<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */
namespace Modules\Socialbar\Controllers;
use Modules\Socialbar\Mappers\Socialbar as SocialMapper;
class Index extends \Ilch\Controller\Frontend
{
  public function indexAction()
  {
      $socialMapper = new SocialMapper();

      if ($this->getRequest()->getParam('Id')) {
          $social = $socialMapper->getCategoryById($this->getRequest()->getParam('Id'));

          if (!$social) {
              $this->redirect(['action' => 'index']);
          }

          $this->getLayout()->getHmenu()
                  ->add($this->getTranslator()->trans('menuFaqs'), ['action' => 'index'])
                  ->add($social->getTitle(), ['action' => 'index', 'Id' => $social->getId()]);

          $socials = $socialMapper->getSocial(['id' => $this->getRequest()->getParam('Id')]);
      } else {
          $socialId = $socialMapper->getSocialById();

          if ($socialId != '') {
              $social = $socialMapper->getSocialById($socialId->getId());

              $this->getLayout()->getHmenu()
                      ->add($this->getTranslator()->trans('menuFaqs'), ['action' => 'index']);
          } else {
              $this->getLayout()->getHmenu()->add($this->getTranslator()->trans('menuFaqs'), ['action' => 'index']);

              $socials = $socialMapper->getId();
          }
      }

      $this->getView()->set('socialMapper', $socialMapper);
      $this->getView()->set('socials', $social);
  }
}
