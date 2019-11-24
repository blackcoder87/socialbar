<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Socialbar\Models;

class Socialbar extends \Ilch\Model
{
    /**
     * The id of the social.
     *
     * @var int
     */
    protected $id;

    /**
     * The icon of the social.
     *
     * @var string
     */
    protected $icon;

    /**
     * The link of the social.
     *
     * @var string
     */
    protected $link;

    /**
     * The link of the social.
     *
     * @var string
     */
    protected $text;

    /**
     * Gets the id of the social.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id of the social.
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
     * Gets the icon of the social.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Sets the icon of the social.
     *
     * @param string $icon
     * @return this
     */
    public function setIcon($icon)
    {
        $this->icon = (string)$icon;

        return $this;
    }

    /**
     * Gets the link of the social.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link of the social.
     *
     * @param string $answer
     * @return this
     */
    public function setLink($link)
    {
        $this->link = (string)$link;

        return $this;
    }

    /**
     * Gets the icon of the social.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the icon of the social.
     *
     * @param string $icon
     * @return this
     */
    public function setText($text)
    {
        $this->text = (string)$text;

        return $this;
    }
}
