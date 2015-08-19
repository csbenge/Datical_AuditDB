<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Change Impact'), ['action' => 'edit', $changeImpact->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Change Impact'), ['action' => 'delete', $changeImpact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $changeImpact->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Change Impacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Change Impact'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="changeImpacts view large-10 medium-9 columns">
    <h2><?= h($changeImpact->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('CHANGE DESCRIPTION') ?></h6>
            <p><?= h($changeImpact->CHANGE_DESCRIPTION) ?></p>
            <h6 class="subheader"><?= __('FAILURE MESSAGE') ?></h6>
            <p><?= h($changeImpact->FAILURE_MESSAGE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($changeImpact->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($changeImpact->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('FK OPERATIONS ID') ?></h6>
            <p><?= $this->Number->format($changeImpact->FK_OPERATIONS_ID) ?></p>
            <h6 class="subheader"><?= __('FK CHANGESET DETAILS ID') ?></h6>
            <p><?= $this->Number->format($changeImpact->FK_CHANGESET_DETAILS_ID) ?></p>
            <h6 class="subheader"><?= __('CHANGE IMPACTS IDX') ?></h6>
            <p><?= $this->Number->format($changeImpact->CHANGE_IMPACTS_IDX) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('CAN ROLLBACK') ?></h6>
            <?= $this->Text->autoParagraph(h($changeImpact->CAN_ROLLBACK)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('SKIPPED') ?></h6>
            <?= $this->Text->autoParagraph(h($changeImpact->SKIPPED)) ?>
        </div>
    </div>
</div>
