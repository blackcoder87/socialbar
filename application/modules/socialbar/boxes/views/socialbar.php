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
<<<<<<< HEAD
        		     <div class="btn-social-icon"><i class="<?=$this->escape($social->getIcon()) ?>"></i></div>
=======
                <div class="btn-social-icon">
        		     <i class="<?=$this->escape($social->getIcon()) ?>"></i>
                </div>
>>>>>>> cb1c57938583550db739a39722c7a54f377863fc
              </a>
            </li>
        <?php endforeach; ?>
    </ul>
  </div>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
