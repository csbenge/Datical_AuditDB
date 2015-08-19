<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Operation'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="operations index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('PROJECT_NAME') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_TZ') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_HOSTNAME') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_IP') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_TYPE') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($operations as $operation): ?>
        <tr>
            <td><?= $this->Number->format($operation->ID) ?></td>
            <td><?= $this->Number->format($operation->E_VERSION) ?></td>
            <td><?= h($operation->PROJECT_NAME) ?></td>
            <td><?= h($operation->CLIENT_TZ) ?></td>
            <td><?= h($operation->CLIENT_HOSTNAME) ?></td>
            <td><?= h($operation->CLIENT_IP) ?></td>
            <td><?= h($operation->CLIENT_TYPE) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $operation->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $operation->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $operation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $operation->ID)]) ?>
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
