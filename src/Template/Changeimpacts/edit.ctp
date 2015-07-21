<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changeimpact->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changeimpact->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Changeimpacts'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changeimpacts form large-10 medium-9 columns">
    <?= $this->Form->create($changeimpact) ?>
    <fieldset>
        <legend><?= __('Edit Changeimpact') ?></legend>
        <?php
            echo $this->Form->input('DTYPE');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('CHANGE_DESCRIPTION');
            echo $this->Form->input('AUTHOR');
            echo $this->Form->input('CANROLLBACK');
            echo $this->Form->input('FAILUREMESSAGE');
            echo $this->Form->input('SKIPPED');
            echo $this->Form->input('OPERATION_CHANGEIMPACTS_ID');
            echo $this->Form->input('CHNGESET_DETAIL_CHNGEIMPACT_ID');
            echo $this->Form->input('IDX');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
