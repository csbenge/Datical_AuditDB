<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Change Impact Sql'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="changeImpactSqls index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('FK_CHANGE_IMPACTS_ID') ?></th>
            <th><?= $this->Paginator->sort('CHANGE_IMPACT_SQLS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changeImpactSqls as $changeImpactSql): ?>
        <tr>
            <td><?= $this->Number->format($changeImpactSql->FK_CHANGE_IMPACTS_ID) ?></td>
            <td><?= $this->Number->format($changeImpactSql->CHANGE_IMPACT_SQLS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $changeImpactSql->FK_CHANGE_IMPACTS_ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $changeImpactSql->FK_CHANGE_IMPACTS_ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $changeImpactSql->FK_CHANGE_IMPACTS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpactSql->FK_CHANGE_IMPACTS_ID)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
