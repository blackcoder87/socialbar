<?php
$socials = $this->get('socials');
?>

<link href="<?=$this->getModuleUrl('static/css/socialbar.css') ?>" rel="stylesheet">

<h1><?=$this->getTrans('socials') ?></h1>
<?php if (!empty($socials)): ?>
    <ul class="list-unstyled">
        <?php foreach ($socials as $social): ?>
            <li>
                <div class="btn-social-icon">
                    <i class="fa <?=$this->escape($social->getIcon()) ?>"></i>
                </div>
                <a href="<?=$this->escape($social->getLink()) ?>" target="_blank"><?=$this->escape($social->getText()) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
