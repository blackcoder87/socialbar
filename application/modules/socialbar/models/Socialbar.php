<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Socialbar\Models;

class Faq extends \Ilch\Model
{
    /**
     * The id of the faq.
     *
     * @var int
     */
    protected $id;

    /**
     * The question of the faq.
     *
     * @var string
     */
    protected $icon;

    /**
     * The answer of the faq.
     *
     * @var string
     */
    protected $link;

    /**
     * Gets the id of the faq.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the faq.
     *
     * @param int $id
     * @return this
     */
    public function setId($id)
    {
        $this->id = (int)$id;

        return $this;
    }

    /**
     * Gets the question of the faq.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets the question of the faq.
     *
     * @param string $question
     * @return this
     */
    public function setIcon($icon)
    {
        $this->icon = (string)$icon;

        return $this;
    }

    /**
     * Gets the answer of the faq.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the answer of the faq.
     *
     * @param string $answer
     * @return this
     */
    public function setLink($link)
    {
        $this->link = (string)$link;

        return $this;
    }
}
