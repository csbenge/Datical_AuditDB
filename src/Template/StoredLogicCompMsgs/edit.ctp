<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicCompMsg->FK_STORED_LOGIC_STATES_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stored Logic Comp Msgs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="storedLogicCompMsgs form large-10 medium-9 columns">
    <?= $this->Form->create($storedLogicCompMsg) ?>
    <fieldset>
        <legend><?= __('Edit Stored Logic Comp Msg') ?></legend>
        <?php
            echo $this->Form->input('MESSAGE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
