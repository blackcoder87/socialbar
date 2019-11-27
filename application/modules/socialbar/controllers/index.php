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
      $social = $socialMapper->getSocial();
      $this->getView()->set('socials', $social);
  }
}
