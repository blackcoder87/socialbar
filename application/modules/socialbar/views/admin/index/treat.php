
    <?php if (!empty($this->get('social'))) {
        echo $this->getTrans('edit');
    } else {
        echo $this->getTrans('add');
    }
    ?>
</h1>
    <form class="form-horizontal" method="POST">
        <?=$this->getTokenField() ?>

        <div class="row form-group ilch-margin-b <?=$this->validation()->hasError('icon') ? 'has-error' : '' ?>">
            <label for="icon" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
              <select class="form-control fontawesome-select" id="icon" name="icon">
                  <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                  <option value="fas fa-globe-europe" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fas fa-globe-europe') ? 'selected' : '' ?>> Globus</option>
                  <option value="fab fa-facebook-f" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-facebook-f') ? 'selected' : '' ?>> Facebook</option>
                  <option value="fab fa-twitter" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-twitter') ? 'selected' : '' ?>> Twitter</option>
                  <option value="fab fa-steam-square" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-steam-square') ? 'selected' : '' ?>> Steam</option>
                  <option value="fab fa-twitch" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-twitch') ? 'selected' : '' ?>> Twitch</option>
                  <option value="fab fa-youtube" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-youtube') ? 'selected' : '' ?>> Youtube</option>
                  <option value="fab fa-whatsapp" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-whatsapp') ? 'selected' : '' ?>> Whatsapp</option>
                  <option value="fab fa-discord" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fab fa-discord') ? 'selected' : '' ?>> Discord</option>
                  <option value="fa fa-instagram" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fa fa-instagram') ? 'selected' : '' ?>> Instagram</option>
                  <option value="fa fa-snapchat" <?=($this->get('social') != '' && $this->get('social')->getIcon() === 'fa fa-snapchat') ? 'selected' : '' ?>> Snapchat</option>
              </select>
            </div>
        </div>
        <div class="row form-group ilch-margin-b <?=$this->validation()->hasError('link') ? 'has-error' : '' ?>">
            <label for="link" class="col-lg-2 control-label">
                <?=$this->getTrans('link') ?>:
            </label>
            <div class="col-lg-4">
                <input type="url"
                       class="form-control"
                       id="link"
                       name="link"
                       value="<?=($this->get('social') != '') ? $this->escape($this->get('social')->getLink()) : $this->escape($this->originalInput('link')) ?>" />
            </div>
        </div>
        <div class="row form-group ilch-margin-b <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
            <label for="text" class="col-lg-2 control-label">
                <?=$this->getTrans('text') ?>:
            </label>
            <div class="col-lg-8">
            <input type="text"
                       class="form-control"
                       id="text"
                       name="text"
                       value="<?=($this->get('social') != '') ? $this->escape($this->get('social')->getText()) : $this->escape($this->originalInput('text')) ?>" />
            </div>
        </div>
        <?php if (!empty($this->get('social'))) {
            echo $this->getSaveBar('updateButton');
        } else {
            echo $this->getSaveBar('addButton');
        }
        ?>
    </form>
