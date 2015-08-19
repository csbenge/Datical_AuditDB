<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $storedLogicState->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $storedLogicState->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stored Logic States'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="storedLogicStates form large-10 medium-9 columns">
    <?= $this->Form->create($storedLogicState) ?>
    <fieldset>
        <legend><?= __('Edit Stored Logic State') ?></legend>
        <?php
            echo $this->Form->input('FK_OPERATIONS_ID');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('OBJECT_NAME');
            echo $this->Form->input('OBJECT_TYPE');
            echo $this->Form->input('STATE_AFTER');
            echo $this->Form->input('STATE_BEFORE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
