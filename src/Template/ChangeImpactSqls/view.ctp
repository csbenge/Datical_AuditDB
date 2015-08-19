<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Change Impact Sql'), ['action' => 'edit', $changeImpactSql->FK_CHANGE_IMPACTS_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Change Impact Sql'), ['action' => 'delete', $changeImpactSql->FK_CHANGE_IMPACTS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpactSql->FK_CHANGE_IMPACTS_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Change Impact Sqls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Change Impact Sql'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="changeImpactSqls view large-10 medium-9 columns">
    <h2><?= h($changeImpactSql->FK_CHANGE_IMPACTS_ID) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('FK CHANGE IMPACTS ID') ?></h6>
            <p><?= $this->Number->format($changeImpactSql->FK_CHANGE_IMPACTS_ID) ?></p>
            <h6 class="subheader"><?= __('CHANGE IMPACT SQLS IDX') ?></h6>
            <p><?= $this->Number->format($changeImpactSql->CHANGE_IMPACT_SQLS_IDX) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('SQL TEXT') ?></h6>
            <?= $this->Text->autoParagraph(h($changeImpactSql->SQL_TEXT)) ?>
        </div>
    </div>
</div>
