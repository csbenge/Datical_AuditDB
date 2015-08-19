<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Stored Logic State'), ['action' => 'edit', $storedLogicState->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stored Logic State'), ['action' => 'delete', $storedLogicState->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicState->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Stored Logic States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stored Logic State'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="storedLogicStates view large-10 medium-9 columns">
    <h2><?= h($storedLogicState->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('OBJECT NAME') ?></h6>
            <p><?= h($storedLogicState->OBJECT_NAME) ?></p>
            <h6 class="subheader"><?= __('OBJECT TYPE') ?></h6>
            <p><?= h($storedLogicState->OBJECT_TYPE) ?></p>
            <h6 class="subheader"><?= __('STATE AFTER') ?></h6>
            <p><?= h($storedLogicState->STATE_AFTER) ?></p>
            <h6 class="subheader"><?= __('STATE BEFORE') ?></h6>
            <p><?= h($storedLogicState->STATE_BEFORE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($storedLogicState->ID) ?></p>
            <h6 class="subheader"><?= __('FK OPERATIONS ID') ?></h6>
            <p><?= $this->Number->format($storedLogicState->FK_OPERATIONS_ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($storedLogicState->E_VERSION) ?></p>
        </div>
    </div>
</div>
