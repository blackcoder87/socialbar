<h1><?=$this->getTrans('manage') ?></h1>
<?php if (!empty($this->get('socials'))): ?>
    <form class="form-horizontal" method="POST">
        <?=$this->getTokenField() ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <colgroup>
                    <col class="icon_width">
                    <col class="icon_width">
                    <col class="icon_width">
                    <col class="col-lg-2">
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th><?=$this->getCheckAllCheckbox('check_social') ?></th>
                        <th></th>
                        <th></th>
                        <th><?=$this->getTrans('icon') ?></th>
                        <th><?=$this->getTrans('link') ?></th>
                        <th><?=$this->getTrans('text') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->get('socials') as $social): ?>
                        <tr>
                            <td><?=$this->getDeleteCheckbox('check_social', $social->getId()) ?></td>
                            <td><?=$this->getEditIcon(['action' => 'treat', 'id' => $social->getId()]) ?></td>
                            <td><?=$this->getDeleteIcon(['action' => 'delsocial', 'id' => $social->getId()]) ?></td>
                            <td><?=$this->escape($social->getIcon()) ?></td>
                            <td><?=$this->escape($social->getLink()) ?></td>
                            <td><?=$this->escape($social->getText()) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?=$this->getListBar(['delete' => 'delete']) ?>
    </form>
<?php else: ?>
    <?=$this->getTrans('noSocial') ?>
<?php endif; ?>
