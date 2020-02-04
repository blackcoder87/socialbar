<link href="<?=$this->getBoxUrl('static/css/socialbar.css') ?>" rel="stylesheet">
<?php
$socials = $this->get('socials');
?>

<?php if (!empty($socials)): ?>
  <div id="social">
    <ul class="list-unstyled">
        <?php foreach ($socials as $social): ?>
            <li>
              <a href="<?=$this->escape($social->getLink()) ?>" target="_blank" rel="noopener"><?=$this->escape($social->getText()) ?>
        		     <div class="btn-social-icon"><i class="<?=$this->escape($social->getIcon()) ?>"></i></div>
                <div class="btn-social-icon">
        		     <i class="<?=$this->escape($social->getIcon()) ?>"></i>
                </div>
              </a>
            </li>
        <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
