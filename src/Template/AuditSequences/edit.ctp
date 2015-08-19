<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $auditSequence->TABLE_NAME],
                ['confirm' => __('Are you sure you want to delete # {0}?', $auditSequence->TABLE_NAME)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Audit Sequences'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="auditSequences form large-10 medium-9 columns">
    <?= $this->Form->create($auditSequence) ?>
    <fieldset>
        <legend><?= __('Edit Audit Sequence') ?></legend>
        <?php
            echo $this->Form->input('SEQUENCE_NUMBER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
