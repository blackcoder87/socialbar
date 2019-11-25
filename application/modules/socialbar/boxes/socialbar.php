<?php

namespace Modules\Socialbar\Boxes;

use Modules\Socialbar\Mappers\Socialbar as SocialMapper;

class Socialbar extends \Ilch\Box
{
    public function render()
    {
        $socialMapper = new SocialMapper();

        $socials = $socialMapper->getSocial();
        $this->getView()->set('socialMapper', $socialMapper);
        $this->getView()->set('socials', $socials);
    }
}
