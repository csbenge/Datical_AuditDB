<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="messages index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('MESSAGE_TIME') ?></th>
            <th><?= $this->Paginator->sort('MESSAGE_LEVEL') ?></th>
            <th><?= $this->Paginator->sort('TEXT') ?></th>
            <th><?= $this->Paginator->sort('FK_CHANGE_IMPACTS_ID') ?></th>
            <th><?= $this->Paginator->sort('MESSAGES_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $this->Number->format($message->ID) ?></td>
            <td><?= $this->Number->format($message->E_VERSION) ?></td>
            <td><?= h($message->MESSAGE_TIME) ?></td>
            <td><?= h($message->MESSAGE_LEVEL) ?></td>
            <td><?= h($message->TEXT) ?></td>
            <td><?= $this->Number->format($message->FK_CHANGE_IMPACTS_ID) ?></td>
            <td><?= $this->Number->format($message->MESSAGES_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $message->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $message->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $message->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->ID)]) ?>
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
