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
     * Get social (optionally with a condition)
     *
     * @param array $where
     * @return array|SocialbarModel[]
     */
    public function getSocial($where = [])
    {
        $socialArray = $this->db()->select('*')
            ->from('socialbar')
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

            $social[] = $socialModel;
        }

        return $social;
    }

    /**
     * Get social by id.
     *
     * @param $id
     * @return mixed
     */
    public function getSocialById($id)
    {
        $social = $this->getSocial(['id' => $id]);
        return reset($social);
    }

    /**
     * Save social to database.
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
            $this->db()->update('socialbar')
                ->values($fields)
                ->where(['id' => $social->getId()])
                ->execute();
        } else {
            $this->db()->insert('socialbar')
                ->values($fields)
                ->execute();
        }
    }

    /**
     * Delete social by id.
     *
     * @param $id
     */
    public function delete($id)
    {
        $this->db()->delete('socialbar')
            ->where(['id' => $id])
            ->execute();
    }
}
