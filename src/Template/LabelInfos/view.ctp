<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Label Info'), ['action' => 'edit', $labelInfo->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Label Info'), ['action' => 'delete', $labelInfo->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $labelInfo->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Label Infos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Label Info'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="labelInfos view large-10 medium-9 columns">
    <h2><?= h($labelInfo->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('METADATA KEY') ?></h6>
            <p><?= h($labelInfo->METADATA_KEY) ?></p>
            <h6 class="subheader"><?= __('METADATA VALUE') ?></h6>
            <p><?= h($labelInfo->METADATA_VALUE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($labelInfo->ID) ?></p>
            <h6 class="subheader"><?= __('FK LABELS ID') ?></h6>
            <p><?= $this->Number->format($labelInfo->FK_LABELS_ID) ?></p>
        </div>
    </div>
</div>
