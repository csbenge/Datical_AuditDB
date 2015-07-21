<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Opdatabase'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="opdatabases index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('VENDOR') ?></th>
            <th><?= $this->Paginator->sort('VERSION') ?></th>
            <th><?= $this->Paginator->sort('DRIVER') ?></th>
            <th><?= $this->Paginator->sort('DRIVERVERSION') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opdatabases as $opdatabase): ?>
        <tr>
            <td><?= $this->Number->format($opdatabase->ID) ?></td>
            <td><?= h($opdatabase->DTYPE) ?></td>
            <td><?= $this->Number->format($opdatabase->E_VERSION) ?></td>
            <td><?= h($opdatabase->VENDOR) ?></td>
            <td><?= h($opdatabase->VERSION) ?></td>
            <td><?= h($opdatabase->DRIVER) ?></td>
            <td><?= h($opdatabase->DRIVERVERSION) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $opdatabase->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opdatabase->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opdatabase->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $opdatabase->ID)]) ?>
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
