<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changesetDetail->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changesetDetail->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Changeset Details'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changesetDetails form large-10 medium-9 columns">
    <?= $this->Form->create($changesetDetail) ?>
    <fieldset>
        <legend><?= __('Edit Changeset Detail') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('CHANGESET_ID');
            echo $this->Form->input('AUTHOR');
            echo $this->Form->input('FILENAME');
            echo $this->Form->input('CHECKSUM');
            echo $this->Form->input('DBMS');
            echo $this->Form->input('LABELS');
            echo $this->Form->input('CONTEXTS');
            echo $this->Form->input('FAIL_ON_ERROR');
            echo $this->Form->input('ON_VALIDATION_FAIL');
            echo $this->Form->input('ON_RUN_ALWAYS');
            echo $this->Form->input('RUN_ON_CHANGE');
            echo $this->Form->input('RESULT');
            echo $this->Form->input('FK_OPERATIONS_ID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
