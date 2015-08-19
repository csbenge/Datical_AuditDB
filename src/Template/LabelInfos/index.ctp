<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Label Info'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="labelInfos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('METADATA_KEY') ?></th>
            <th><?= $this->Paginator->sort('METADATA_VALUE') ?></th>
            <th><?= $this->Paginator->sort('FK_LABELS_ID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($labelInfos as $labelInfo): ?>
        <tr>
            <td><?= $this->Number->format($labelInfo->ID) ?></td>
            <td><?= h($labelInfo->METADATA_KEY) ?></td>
            <td><?= h($labelInfo->METADATA_VALUE) ?></td>
            <td><?= $this->Number->format($labelInfo->FK_LABELS_ID) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $labelInfo->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labelInfo->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labelInfo->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $labelInfo->ID)]) ?>
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
