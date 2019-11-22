<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Socialbar\Mappers;

class Socialbar extends \Ilch\Mapper
{
  public function getSocial($where = [])
    {
        $socialArray = $this->db()->select('*')
            ->from('social')
            ->where($where)
            ->execute()
            ->fetchRows();

        if (empty($socialArray)) {
            return [];
        }

        $socials = [];
        foreach ($socialArray as $socialRow) {
            $socialModel = new SocialModel();
            $socialModel->setId($socialRow['id']);
            $socialModel->setCatId($socialRow['icon']);
            $socialModel->setQuestion($socialRow['link']);
            $socialModel->setAnswer($socialRow['text']);

            $socials[] = $socialModel;
        }

        return $socials;
    }

    public function getSocialById($id)
    {
        $socials = $this->getSocials(['id' => $id]);
        return reset($socials);
    }

    public function save(SocialModel $social)
    {
        $fields = [
            'id' => $fsocial->getId(),
            'icon' => $social->getIcon(),
            'link' => $social->getLink(),
            'text' => $social->getText()
        ];

        if ($social->getId()) {
            $this->db()->update('socials')
                ->values($fields)
                ->where(['id' => $social->getId()])
                ->execute();
        } else {
            $this->db()->insert('socials')
                ->values($fields)
                ->execute();
        }
    }

    public function delete($id)
    {
        $this->db()->delete('socials')
            ->where(['id' => $id])
            ->execute();
    }
}
