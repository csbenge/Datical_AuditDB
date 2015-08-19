<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Stored Logic State'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="storedLogicStates index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('FK_OPERATIONS_ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('OBJECT_NAME') ?></th>
            <th><?= $this->Paginator->sort('OBJECT_TYPE') ?></th>
            <th><?= $this->Paginator->sort('STATE_AFTER') ?></th>
            <th><?= $this->Paginator->sort('STATE_BEFORE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($storedLogicStates as $storedLogicState): ?>
        <tr>
            <td><?= $this->Number->format($storedLogicState->ID) ?></td>
            <td><?= $this->Number->format($storedLogicState->FK_OPERATIONS_ID) ?></td>
            <td><?= $this->Number->format($storedLogicState->E_VERSION) ?></td>
            <td><?= h($storedLogicState->OBJECT_NAME) ?></td>
            <td><?= h($storedLogicState->OBJECT_TYPE) ?></td>
            <td><?= h($storedLogicState->STATE_AFTER) ?></td>
            <td><?= h($storedLogicState->STATE_BEFORE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $storedLogicState->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storedLogicState->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storedLogicState->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicState->ID)]) ?>
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
