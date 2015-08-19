<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changeImpactSql->FK_CHANGE_IMPACTS_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpactSql->FK_CHANGE_IMPACTS_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Change Impact Sqls'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changeImpactSqls form large-10 medium-9 columns">
    <?= $this->Form->create($changeImpactSql) ?>
    <fieldset>
        <legend><?= __('Edit Change Impact Sql') ?></legend>
        <?php
            echo $this->Form->input('SQL_TEXT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
