<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Label'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="labels index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('NAME') ?></th>
            <th><?= $this->Paginator->sort('PROJECT_NAME') ?></th>
            <th><?= $this->Paginator->sort('FK_PROJECTS_UUID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($labels as $label): ?>
        <tr>
            <td><?= $this->Number->format($label->ID) ?></td>
            <td><?= h($label->NAME) ?></td>
            <td><?= h($label->PROJECT_NAME) ?></td>
            <td><?= h($label->FK_PROJECTS_UUID) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $label->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $label->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $label->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $label->ID)]) ?>
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
