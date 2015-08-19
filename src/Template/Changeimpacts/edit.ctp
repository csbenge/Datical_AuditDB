<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changeImpact->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpact->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Change Impacts'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changeImpacts form large-10 medium-9 columns">
    <?= $this->Form->create($changeImpact) ?>
    <fieldset>
        <legend><?= __('Edit Change Impact') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('CHANGE_DESCRIPTION');
            echo $this->Form->input('CAN_ROLLBACK');
            echo $this->Form->input('FAILURE_MESSAGE');
            echo $this->Form->input('SKIPPED');
            echo $this->Form->input('FK_OPERATIONS_ID');
            echo $this->Form->input('FK_CHANGESET_DETAILS_ID');
            echo $this->Form->input('CHANGE_IMPACTS_IDX');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
