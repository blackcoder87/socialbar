<?php

namespace Modules\Socialbar\Controllers\Admin;

use Modules\Socialbar\Mappers\Socialbar as SocialMapper;
use Modules\Socialbar\Models\Socialbar as SocialModel;
use Ilch\Validation;

class Index extends \Ilch\Controller\Admin
{
    public function init()
    {
        $items = [
            [
                'name' => 'manage',
                'active' => false,
                'icon' => 'fa fa-th-list',
                'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'index']),
                [
                    'name' => 'add',
                    'active' => false,
                    'icon' => 'fa fa-plus-circle',
                    'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'treat'])
                ]
            ],
            //[
            //    'name' => 'menuCats',
            //    'active' => false,
            //    'icon' => 'fa fa-th-list',
            //    'url' => $this->getLayout()->getUrl(['controller' => 'cats', 'action' => 'index'])
            //]
        ];

        if ($this->getRequest()->getActionName() == 'treat') {
            $items[0][0]['active'] = true;
        } else {
            $items[0]['active'] = true;
        }

        $this->getLayout()->addMenu
        (
            'menuSocial',
            $items
        );
    }

    public function indexAction()
    {
        $socialMapper = new SocialMapper();

        $this->getLayout()->getAdminHmenu()
                ->add($this->getTranslator()->trans('menuSocial'), ['action' => 'index']);

        if ($this->getRequest()->getPost('action') == 'delete' && $this->getRequest()->getPost('check_socials')) {
            foreach ($this->getRequest()->getPost('check_socials') as $socialId) {
                $socialMapper->delete($socialId);
            }
        }

        $this->getView()->set('socials', $socialMapper->getSocial());
    }

    public function treatAction()
    {
        $socialMapper = new SocialMapper();

        if ($this->getRequest()->getParam('id')) {
            $this->getLayout()->getAdminHmenu()
                    ->add($this->getTranslator()->trans('menuSocial'), ['action' => 'index'])
                    ->add($this->getTranslator()->trans('edit'), ['action' => 'treat']);

            $this->getView()->set('social', $socialMapper->getSocialById($this->getRequest()->getParam('id')));
        } else {
            $this->getLayout()->getAdminHmenu()
                    ->add($this->getTranslator()->trans('menuSocial'), ['action' => 'index'])
                    ->add($this->getTranslator()->trans('add'), ['action' => 'treat']);
        }
        if ($this->getRequest()->isPost()) {
            $validation = Validation::create($this->getRequest()->getPost(), [
                'icon' => 'required',
                'link' => 'required',
                'text' => 'required'
            ]);

            if ($validation->isValid()) {
                $model = new SocialModel();

                if ($this->getRequest()->getParam('id')) {
                    $model->setId($this->getRequest()->getParam('id'));
                }

                $model->setIcon($this->getRequest()->getPost('icon'));
                $model->setLink($this->getRequest()->getPost('link'));
                $model->setText($this->getRequest()->getPost('text'));
                $socialMapper->save($model);

                $this->addMessage('saveSuccess');
                $this->redirect(['action' => 'index']);
            } else {
                $this->addMessage($validation->getErrorBag()->getErrorMessages(), 'danger', true);
                $this->redirect()
                  ->withInput()
                  ->withErrors($validation->getErrorBag())
                  ->to(['action' => 'treat', 'id' => $this->getRequest()->getParam('id')]);
            }
        }

        $this->getView()->set('socials', $socialMapper->getSocial());
    }

    public function delSocialAction()
    {
        if ($this->getRequest()->isSecure()) {
            $socialMapper = new SocialMapper();
            $socialMapper->delete($this->getRequest()->getParam('id'));

            $this->addMessage('deleteSuccess');
        }

        $this->redirect(['action' => 'index']);
    }
}
