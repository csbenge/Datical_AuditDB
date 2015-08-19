<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Audit Sequence'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="auditSequences index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('TABLE_NAME') ?></th>
            <th><?= $this->Paginator->sort('SEQUENCE_NUMBER') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($auditSequences as $auditSequence): ?>
        <tr>
            <td><?= h($auditSequence->TABLE_NAME) ?></td>
            <td><?= $this->Number->format($auditSequence->SEQUENCE_NUMBER) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $auditSequence->TABLE_NAME]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $auditSequence->TABLE_NAME]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $auditSequence->TABLE_NAME], ['confirm' => __('Are you sure you want to delete # {0}?', $auditSequence->TABLE_NAME)]) ?>
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
