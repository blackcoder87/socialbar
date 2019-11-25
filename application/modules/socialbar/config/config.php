<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\Socialbar\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'key' => 'socialbar',
        'version' => '1.0',
        'icon_small' => 'fa-question-circle',
        'author' => 'Slipi',
        'link' => 'http://ilch.de',
        // 'isLayout' => true,
        // 'hide_menu' => true,
        'languages' => [
            'de_DE' => [
                'name' => 'Social-Bar',
                'description' => 'Hier können die Sociale Netzwercke - hienzugefühgt werden',
            ],
            'en_EN' => [
                'name' => 'Social-Bar',
                'description' => 'Here you can manage your Social Network - joined weren ',
            ],
        ],
        'boxes' => [
            'socialbar' => [
                'de_DE' => [
                    'name' => 'Social Bar'
                ],
                'en_EN' => [
                    'name' => 'Social Bar'
                ]
            ]
        ],
        'ilchCore' => '2.0.0',
        'phpVersion' => '5.6'
    ];

    public function install()
    {
      $this->db()->queryMulti($this->getInstallSql());
    }

    public function uninstall()
    {
       $this->db()->queryMulti('DROP TABLE `[prefix]_social`;');
    }

    public function getInstallSql()
    {
			return	'CREATE TABLE IF NOT EXISTS `[prefix]_social` (
					`id` INT(11) NOT NULL AUTO_INCREMENT,
					`icon` MEDIUMTEXT NOT NULL,
					`link` VARCHAR(255) NOT NULL,
					`text` MEDIUMTEXT NOT NULL,
					PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1';
    }

    public function getUpdate($installedVersion)
    {

    }
}
