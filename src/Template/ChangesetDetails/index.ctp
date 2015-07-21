<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Changeset Detail'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="changesetDetails index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CHANGEID') ?></th>
            <th><?= $this->Paginator->sort('AUTHOR') ?></th>
            <th><?= $this->Paginator->sort('FILENAME') ?></th>
            <th><?= $this->Paginator->sort('CHECKSUM') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changesetDetails as $changesetDetail): ?>
        <tr>
            <td><?= $this->Number->format($changesetDetail->ID) ?></td>
            <td><?= h($changesetDetail->DTYPE) ?></td>
            <td><?= $this->Number->format($changesetDetail->E_VERSION) ?></td>
            <td><?= h($changesetDetail->CHANGEID) ?></td>
            <td><?= h($changesetDetail->AUTHOR) ?></td>
            <td><?= h($changesetDetail->FILENAME) ?></td>
            <td><?= h($changesetDetail->CHECKSUM) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $changesetDetail->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $changesetDetail->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $changesetDetail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changesetDetail->ID)]) ?>
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
