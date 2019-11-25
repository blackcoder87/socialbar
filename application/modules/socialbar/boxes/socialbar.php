<?php

namespace Modules\SocialBar\Boxes;

use Modules\Socialbar\Mappers\Socialbar as SocialMapper;

class SocialBar extends \Ilch\Box
{
    public function render()
    {
        $socialMapper = new SocialMapper();

        $this->getView()->set('socialMapper', $socialMapper);
    }
}
