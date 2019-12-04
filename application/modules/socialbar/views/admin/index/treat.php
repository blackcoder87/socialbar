<h1>
    <?php if (!empty($this->get('social'))) {
        echo $this->getTrans('edit');
    } else {
        echo $this->getTrans('add');
    }
    ?>
</h1>
    <form class="form-horizontal" method="POST">
        <?=$this->getTokenField() ?>

        <div class="form-group <?=$this->validation()->hasError('icon') ? 'has-error' : '' ?>">
            <label for="icon" class="col-lg-2 control-label">
                <?=$this->getTrans('icon') ?>:
            </label>
            <div class="col-lg-4">
              <select class="form-control fontawesome-select" id="icon" name="icon">
                  <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                  <option value="fas fa-globe-europe">&#xf7a2; Globus</option>
                  <option value="fab fa-facebook-f">&#xf39e; Facebook</option>
                  <option value="fab fa-twitter">&#xf099; Twitter</option>
                  <option value="fab fa-steam-square">&#xf1b6; Steam</option>
                  <option value="fab fa-twitch">&#xf1e8; Twitch</option>
                  <option value="fab fa-youtube">&#xf167; Youtube</option>
                  <option value="fab fa-whatsapp">&#xf232; Whatsapp</option>
                  <option value="fab fa-discord">&#xf392; Discord</option>
              </select>
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('link') ? 'has-error' : '' ?>">
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
        <div class="form-group <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
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
