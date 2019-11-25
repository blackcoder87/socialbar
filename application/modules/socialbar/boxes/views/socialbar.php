<?php
$socialMapper = $this->get('socialMapper');
?>

<?php
if (!empty($this->get('social'))): ?>
    <?php echo 'Hallo Welt';?>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
