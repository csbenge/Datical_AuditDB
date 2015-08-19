<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Table Mod'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tableMods index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('TABLE_NAME') ?></th>
            <th><?= $this->Paginator->sort('ROWS_TOUCHED') ?></th>
            <th><?= $this->Paginator->sort('VALUES_DELETED') ?></th>
            <th><?= $this->Paginator->sort('FK_OPERATIONS_ID') ?></th>
            <th><?= $this->Paginator->sort('OPERATIONS_TABLE_MODS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tableMods as $tableMod): ?>
        <tr>
            <td><?= $this->Number->format($tableMod->ID) ?></td>
            <td><?= $this->Number->format($tableMod->E_VERSION) ?></td>
            <td><?= h($tableMod->TABLE_NAME) ?></td>
            <td><?= $this->Number->format($tableMod->ROWS_TOUCHED) ?></td>
            <td><?= $this->Number->format($tableMod->VALUES_DELETED) ?></td>
            <td><?= $this->Number->format($tableMod->FK_OPERATIONS_ID) ?></td>
            <td><?= $this->Number->format($tableMod->OPERATIONS_TABLE_MODS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tableMod->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tableMod->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tableMod->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tableMod->ID)]) ?>
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
