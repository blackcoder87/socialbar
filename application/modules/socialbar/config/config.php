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
        'version' => '1.7.0',
        'icon_small' => 'fa-solid fa-circle-question',
        'author' => 'Slipi',
        'link' => 'https://ilch.de',
        'languages' => [
            'de_DE' => [
                'name' => 'Social-Bar',
                'description' => 'Hier können soziale Netzwerke hinzugefügt werden.',
            ],
            'en_EN' => [
                'name' => 'Social-Bar',
                'description' => 'Here you can add social networks.',
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
        'ilchCore' => '2.2.0',
        'phpVersion' => '7.3'
    ];

    public function install()
    {
      $this->db()->queryMulti($this->getInstallSql());
    }

    public function uninstall()
    {
       $this->db()->queryMulti('DROP TABLE `[prefix]_socialbar`;');
    }

    public function getInstallSql()
    {
			return	'CREATE TABLE IF NOT EXISTS `[prefix]_socialbar` (
      				`id` INT(11) NOT NULL AUTO_INCREMENT,
      				`icon` MEDIUMTEXT NOT NULL,
      				`link` VARCHAR(255) NOT NULL,
      				`text` MEDIUMTEXT NOT NULL,
      				PRIMARY KEY (`id`)
      				) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1';
    }

    public function getUpdate($installedVersion)
    {
        switch ($installedVersion) {
            case "1.6.0":
                $this->db()->update('modules', ['icon_small' => $this->config['icon_small']], ['key' => $this->config['key']])->execute();
        }

        return '"' . $this->config['key'] . '" Update-function executed.';
    }
}
