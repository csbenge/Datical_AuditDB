<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $message->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="messages view large-10 medium-9 columns">
    <h2><?= h($message->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('MESSAGE LEVEL') ?></h6>
            <p><?= h($message->MESSAGE_LEVEL) ?></p>
            <h6 class="subheader"><?= __('TEXT') ?></h6>
            <p><?= h($message->TEXT) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($message->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($message->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('FK CHANGE IMPACTS ID') ?></h6>
            <p><?= $this->Number->format($message->FK_CHANGE_IMPACTS_ID) ?></p>
            <h6 class="subheader"><?= __('MESSAGES IDX') ?></h6>
            <p><?= $this->Number->format($message->MESSAGES_IDX) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('MESSAGE TIME') ?></h6>
            <p><?= h($message->MESSAGE_TIME) ?></p>
        </div>
    </div>
</div>
