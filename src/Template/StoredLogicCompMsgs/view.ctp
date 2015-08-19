<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Stored Logic Comp Msg'), ['action' => 'edit', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stored Logic Comp Msg'), ['action' => 'delete', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Stored Logic Comp Msgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stored Logic Comp Msg'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="storedLogicCompMsgs view large-10 medium-9 columns">
    <h2><?= h($storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('MESSAGE') ?></h6>
            <p><?= h($storedLogicCompMsg->MESSAGE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('FK STORED LOGIC STATES ID') ?></h6>
            <p><?= $this->Number->format($storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID) ?></p>
            <h6 class="subheader"><?= __('STORED LOGIC COMP MSGS IDX') ?></h6>
            <p><?= $this->Number->format($storedLogicCompMsg->STORED_LOGIC_COMP_MSGS_IDX) ?></p>
        </div>
    </div>
</div>
