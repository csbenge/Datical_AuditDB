<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Changeimpacts Sql'), ['action' => 'edit', $changeimpactsSql->CHANGEIMPACT_SQL_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Changeimpacts Sql'), ['action' => 'delete', $changeimpactsSql->CHANGEIMPACT_SQL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeimpactsSql->CHANGEIMPACT_SQL_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Changeimpacts Sqls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Changeimpacts Sql'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="changeimpactsSqls view large-10 medium-9 columns">
    <h2><?= h($changeimpactsSql->CHANGEIMPACT_SQL_ID) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('CHANGEIMPACT SQL ID') ?></h6>
            <p><?= $this->Number->format($changeimpactsSql->CHANGEIMPACT_SQL_ID) ?></p>
            <h6 class="subheader"><?= __('CHANGEIMPACT SQL IDX') ?></h6>
            <p><?= $this->Number->format($changeimpactsSql->CHANGEIMPACT_SQL_IDX) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('SQL TEXT') ?></h6>
            <?= $this->Text->autoParagraph(h($changeimpactsSql->SQL_TEXT)) ?>
        </div>
    </div>
</div>
