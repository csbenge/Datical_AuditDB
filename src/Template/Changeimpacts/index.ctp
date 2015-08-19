<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Change Impact'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="changeImpacts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGE_DESCRIPTION') ?></th>
            <th><?= $this->Paginator->sort('FAILURE_MESSAGE') ?></th>
            <th><?= $this->Paginator->sort('FK_OPERATIONS_ID') ?></th>
            <th><?= $this->Paginator->sort('FK_CHANGESET_DETAILS_ID') ?></th>
            <th><?= $this->Paginator->sort('CHANGE_IMPACTS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changeImpacts as $changeImpact): ?>
        <tr>
            <td><?= $this->Number->format($changeImpact->ID) ?></td>
            <td><?= $this->Number->format($changeImpact->E_VERSION) ?></td>
            <td><?= h($changeImpact->CHANGE_DESCRIPTION) ?></td>
            <td><?= h($changeImpact->FAILURE_MESSAGE) ?></td>
            <td><?= $this->Number->format($changeImpact->FK_OPERATIONS_ID) ?></td>
            <td><?= $this->Number->format($changeImpact->FK_CHANGESET_DETAILS_ID) ?></td>
            <td><?= $this->Number->format($changeImpact->CHANGE_IMPACTS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $changeImpact->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $changeImpact->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $changeImpact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpact->ID)]) ?>
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
