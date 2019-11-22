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
                <input type="text"
                       class="form-control"
                       id="icon"
                       name="icon"
                        required
                       value="<?php if ($this->get('social') != '') { echo $this->escape($this->get('social')->getLink()); } else { echo $this->originalInput('icon'); } ?>" />
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
                        required
                       value="<?php if ($this->get('social') != '') { echo $this->escape($this->get('social')->getLink()); } else { echo $this->originalInput('icon'); } ?>" />
            </div>
        </div>
        <div class="form-group <?=$this->validation()->hasError('text') ? 'has-error' : '' ?>">
            <label for="text" class="col-lg-2 control-label">
                <?=$this->getTrans('socialtext') ?>:
            </label>
            <div class="col-lg-10">
                <input    type="text"
                          class="form-control ckeditor"
                          id="ck_1"
                          name="text"
                           required
                          toolbar="ilch_html"><?php if ($this->get('social') != '') { echo $this->escape($this->get('social')->getText()); } else { echo $this->originalInput('text'); } ?></input>
            </div>
        </div>
        <?php if (!empty($this->get('social'))) {
            echo $this->getSaveBar('updateButton');
        } else {
            echo $this->getSaveBar('addButton');
        }
        ?>
    </form>

<?=$this->getDialog('mediaModal', $this->getTrans('media'), '<iframe frameborder="0"></iframe>'); ?>
