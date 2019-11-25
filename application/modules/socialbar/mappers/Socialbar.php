<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Socialbar\Mappers;
use Modules\Socialbar\Models\Socialbar as SocialbarModel;

class Socialbar extends \Ilch\Mapper
{
  /**
     * Gets socil.
     *
     * @param array $where
     * @return SocialbarModel[]|[]
     */

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
            $socialModel = new SocialbarModel();
            $socialModel->setId($socialRow['id']);
            $socialModel->setIcon($socialRow['icon']);
            $socialModel->setLink($socialRow['link']);
            $socialModel->setText($socialRow['text']);

            $social[] = $socialbarModel;
        }

        return $social;
    }

    /**
     * Gets social by id.
     *
     * @param integer $id
     * @return SocialbarModel|null
     */

    public function getSocialById($id)
    {
        $social = $this->getSocial(['id' => $id]);
        return reset($social);
    }

    /**
     * Inserts or updates social model.
     *
     * @param SocialbarModel $social
     */

    public function save(SocialbarModel $social)
    {
        $fields = [
            'id' => $social->getId(),
            'icon' => $social->getIcon(),
            'link' => $social->getLink(),
            'text' => $social->getText()
        ];

        if ($social->getId()) {
            $this->db()->update('social')
                ->values($fields)
                ->where(['id' => $social->getId()])
                ->execute();
        } else {
            $this->db()->insert('social')
                ->values($fields)
                ->execute();
        }
    }

    /**
     * Deletes social with given id.
     *
     * @param integer $id
     */

    public function delete($id)
    {
        $this->db()->delete('social')
            ->where(['id' => $id])
            ->execute();
    }
}
