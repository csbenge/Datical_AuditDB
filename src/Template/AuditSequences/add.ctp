<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Audit Sequences'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="auditSequences form large-10 medium-9 columns">
    <?= $this->Form->create($auditSequence) ?>
    <fieldset>
        <legend><?= __('Add Audit Sequence') ?></legend>
        <?php
            echo $this->Form->input('SEQUENCE_NUMBER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
