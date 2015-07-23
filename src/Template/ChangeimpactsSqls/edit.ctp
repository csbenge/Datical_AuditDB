<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changeimpactsSql->CHANGEIMPACT_SQL_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changeimpactsSql->CHANGEIMPACT_SQL_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Changeimpacts Sqls'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changeimpactsSqls form large-10 medium-9 columns">
    <?= $this->Form->create($changeimpactsSql) ?>
    <fieldset>
        <legend><?= __('Edit Changeimpacts Sql') ?></legend>
        <?php
            echo $this->Form->input('SQL_TEXT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
