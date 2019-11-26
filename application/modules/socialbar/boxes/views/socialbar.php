<link href="<?=$this->getBoxUrl('static/css/socialbar.css') ?>" rel="stylesheet">
<?php
$socials = $this->get('socials');
$socialMapper = $this->get('socialMapper');
?>

<?php if (!empty($socials)): ?>
    <ul class="list-unstyled ilch_menu_ul">
        <?php foreach ($socials as $social): ?>
            <li class="list-group-item"><a href="<?=$this->escape($social->getLink()) ?>"><b><?=$this->escape($social->getText()) ?> ?></b></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
