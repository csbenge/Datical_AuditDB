<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Op Database'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="opDatabases index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('VENDOR') ?></th>
            <th><?= $this->Paginator->sort('VERSION') ?></th>
            <th><?= $this->Paginator->sort('DRIVER') ?></th>
            <th><?= $this->Paginator->sort('DRIVER_VERSION') ?></th>
            <th><?= $this->Paginator->sort('JDBC_VERSION') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opDatabases as $opDatabase): ?>
        <tr>
            <td><?= $this->Number->format($opDatabase->ID) ?></td>
            <td><?= $this->Number->format($opDatabase->E_VERSION) ?></td>
            <td><?= h($opDatabase->VENDOR) ?></td>
            <td><?= h($opDatabase->VERSION) ?></td>
            <td><?= h($opDatabase->DRIVER) ?></td>
            <td><?= h($opDatabase->DRIVER_VERSION) ?></td>
            <td><?= h($opDatabase->JDBC_VERSION) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $opDatabase->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opDatabase->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opDatabase->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $opDatabase->ID)]) ?>
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
