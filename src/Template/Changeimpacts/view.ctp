<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Changeimpact'), ['action' => 'edit', $changeimpact->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Changeimpact'), ['action' => 'delete', $changeimpact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeimpact->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Changeimpacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Changeimpact'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="changeimpacts view large-10 medium-9 columns">
    <h2><?= h($changeimpact->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DTYPE') ?></h6>
            <p><?= h($changeimpact->DTYPE) ?></p>
            <h6 class="subheader"><?= __('CHANGE DESCRIPTION') ?></h6>
            <p><?= h($changeimpact->CHANGE_DESCRIPTION) ?></p>
            <h6 class="subheader"><?= __('AUTHOR') ?></h6>
            <p><?= h($changeimpact->AUTHOR) ?></p>
            <h6 class="subheader"><?= __('FAILUREMESSAGE') ?></h6>
            <p><?= h($changeimpact->FAILUREMESSAGE) ?></p>
            <h6 class="subheader"><?= __('IDX') ?></h6>
            <p><?= h($changeimpact->IDX) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($changeimpact->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($changeimpact->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('OPERATION CHANGEIMPACTS ID') ?></h6>
            <p><?= $this->Number->format($changeimpact->OPERATION_CHANGEIMPACTS_ID) ?></p>
            <h6 class="subheader"><?= __('CHNGESET DETAIL CHNGEIMPACT ID') ?></h6>
            <p><?= $this->Number->format($changeimpact->CHNGESET_DETAIL_CHNGEIMPACT_ID) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('CANROLLBACK') ?></h6>
            <?= $this->Text->autoParagraph(h($changeimpact->CANROLLBACK)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('SKIPPED') ?></h6>
            <?= $this->Text->autoParagraph(h($changeimpact->SKIPPED)) ?>
        </div>
    </div>
</div>
