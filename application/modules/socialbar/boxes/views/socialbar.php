<?php
$socials = $this->get('socials');
$socialMapper = $this->get('socialMapper');
$socials = $socialMapper->getSocial();
$this->getView()->set('socials', $socials);
?>

<?php if (!empty($socials)): ?>
    <ul>
        <?php foreach ($socials as $social): ?>
            <li class="list-group-item"><a href="<?=$this->escape($social->getLink()) ?>"><b><?=$this->escape($social->getText()) ?> ?></b></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
