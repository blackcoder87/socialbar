<link href="<?=$this->getBoxUrl('static/css/socialbar.css') ?>" rel="stylesheet">
<?php
$socials = $this->get('socials');
$socialMapper = $this->get('socialMapper');
?>

<?php if (!empty($socials)): ?>
    <ul class="list-unstyled">
        <?php foreach ($socials as $social): ?>
            <li>
              <a href="<?=$this->escape($social->getLink()) ?>" target="_blank"><?=$this->escape($social->getText()) ?>
                <div class="btn-social-icon">
        		     <i class="fa <?=$this->escape($social->getIcon()) ?>"></i>
                </div>
              </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
