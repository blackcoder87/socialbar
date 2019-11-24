<h1><?=$this->getTrans('manage') ?></h1>
<?php if (!empty($this->get('socials'))): ?>
    <form class="form-horizontal" method="POST" action="">
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->get('social') as $social): ?>
                        <?php $social = $socialMapper->getSocialById($social->getSocialId()); ?>
                        <tr>
                            <td><?=$this->getDeleteCheckbox('check_social', $faq->getId()) ?></td>
                            <td><?=$this->getEditIcon(['action' => 'treat', 'id' => $faq->getId()]) ?></td>
                            <td><?=$this->getDeleteIcon(['action' => 'delsocial', 'id' => $faq->getId()]) ?></td>
                            <td><?=$this->escape($faqsCats->getTitle()) ?></td>
                            <td><?=$this->escape($faq->getQuestion()) ?></td>
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
