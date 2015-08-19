<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Stored Logic Comp Msg'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="storedLogicCompMsgs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('FK_STORED_LOGIC_STATES_ID') ?></th>
            <th><?= $this->Paginator->sort('MESSAGE') ?></th>
            <th><?= $this->Paginator->sort('STORED_LOGIC_COMP_MSGS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($storedLogicCompMsgs as $storedLogicCompMsg): ?>
        <tr>
            <td><?= $this->Number->format($storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID) ?></td>
            <td><?= h($storedLogicCompMsg->MESSAGE) ?></td>
            <td><?= $this->Number->format($storedLogicCompMsg->STORED_LOGIC_COMP_MSGS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID)]) ?>
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
