<?php
$socials = $this->get('socials');
?>

<link href="<?=$this->getModuleUrl('static/css/socialbar.css') ?>" rel="stylesheet">

<h1><?=$this->getTrans('socials') ?></h1>
<?php if (!empty($socials)): ?>
    <ul class="list-unstyled">
        <?php foreach ($socials as $social): ?>
            <li>
<<<<<<< HEAD
                <a href="<?=$this->escape($social->getLink()) ?>" target="_blank" rel="noopener"><?=$this->escape($social->getText()) ?>
                  <div class="btn-social-icon"><i class="<?=$this->escape($social->getIcon()) ?>"></i></div>
                </a>
=======
                <div class="btn-social-icon">
                    <i class="<?=$this->escape($social->getIcon()) ?>"></i>
                </div>
                <a href="<?=$this->escape($social->getLink()) ?>" target="_blank" rel="noopener"><?=$this->escape($social->getText()) ?></a>
>>>>>>> cb1c57938583550db739a39722c7a54f377863fc
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
