<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Audit Sequence'), ['action' => 'edit', $auditSequence->TABLE_NAME]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit Sequence'), ['action' => 'delete', $auditSequence->TABLE_NAME], ['confirm' => __('Are you sure you want to delete # {0}?', $auditSequence->TABLE_NAME)]) ?> </li>
        <li><?= $this->Html->link(__('List Audit Sequences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Sequence'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="auditSequences view large-10 medium-9 columns">
    <h2><?= h($auditSequence->TABLE_NAME) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('TABLE NAME') ?></h6>
            <p><?= h($auditSequence->TABLE_NAME) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('SEQUENCE NUMBER') ?></h6>
            <p><?= $this->Number->format($auditSequence->SEQUENCE_NUMBER) ?></p>
        </div>
    </div>
</div>
