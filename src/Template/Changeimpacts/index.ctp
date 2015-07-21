<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Changeimpact'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="changeimpacts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGE_DESCRIPTION') ?></th>
            <th><?= $this->Paginator->sort('AUTHOR') ?></th>
            <th><?= $this->Paginator->sort('FAILUREMESSAGE') ?></th>
            <th><?= $this->Paginator->sort('OPERATION_CHANGEIMPACTS_ID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changeimpacts as $changeimpact): ?>
        <tr>
            <td><?= $this->Number->format($changeimpact->ID) ?></td>
            <td><?= h($changeimpact->DTYPE) ?></td>
            <td><?= $this->Number->format($changeimpact->E_VERSION) ?></td>
            <td><?= h($changeimpact->CHANGE_DESCRIPTION) ?></td>
            <td><?= h($changeimpact->AUTHOR) ?></td>
            <td><?= h($changeimpact->FAILUREMESSAGE) ?></td>
            <td><?= $this->Number->format($changeimpact->OPERATION_CHANGEIMPACTS_ID) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $changeimpact->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $changeimpact->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $changeimpact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeimpact->ID)]) ?>
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
