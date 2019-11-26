<h1>
    <?php if (!empty($this->get('social'))) {
        echo $this->getTrans('edit');
    } else {
        echo $this->getTrans('add');
    }
    ?>
</h1>
    <form class="form-horizontal" method="POST" action="">
        <?=$this->getTokenField() ?>

        <div class="form-group <?=$this->validation()->hasError('icon') ? 'has-error' : '' ?>">
            <label for="icon" class="col-lg-2 control-label">
                <?=$this->getTrans('socialicon') ?>:
            </label>
            <div class="col-lg-4">
              <select class="form-control fontawesome-select" id="socialicon" name="icon">
                  <option value=""  disabled><?=$this->getTrans('pleaseSelect') ?></option>
                  <option value="fa-globe">&#xf0ac; fa-globe</option>
                  <option value="fa-facebook">&#xf09a; fa-facebook</option>
                  <option value="fa-twitter">&#xf099; fa-twitter</option>
                  <option value="fa-steam-square">&#xf1b7; fa-steam-square</option>
                  <option value="fa-twitch">&#xf1e8; fa-twitch</option>
                  <option value="fa-youtube">&#xf167; fa-youtube</option>
              </select>
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('icon') ? 'has-error' : '' ?>">
            <label for="link" class="col-lg-2 control-label">
                <?=$this->getTrans('sociallink') ?>:
            </label>
            <div class="col-lg-4">
                <input type="link"
                       class="form-control"
                       id="link"
                       name="link"
                       value="<?php if ($this->get('social') != '') { echo $this->escape($this->get('social')->getLink()); } else { echo $this->originalInput('link'); } ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
            <label for="text" class="col-lg-2 control-label">
                <?=$this->getTrans('socialtext') ?>:
            </label>
            <div class="col-lg-4">
                <input    type="text"
                          class="form-control"
                          id="text"
                          name="text"
                          value="<?php if ($this->get('social') != '') { echo $this->escape($this->get('social')->getText()); } else { echo $this->originalInput('text'); } ?>" />
            </div>
        </div>
        <?php if (!empty($this->get('social'))) {
            echo $this->getSaveBar('updateButton');
        } else {
            echo $this->getSaveBar('addButton');
        }
        ?>
    </form>
