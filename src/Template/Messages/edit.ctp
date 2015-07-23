<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $message->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $message->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="messages form large-10 medium-9 columns">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Edit Message') ?></legend>
        <?php
            echo $this->Form->input('DTYPE');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('MESSAGE_TIME');
            echo $this->Form->input('MESSAGE_LEVEL');
            echo $this->Form->input('TEXT');
            echo $this->Form->input('CHANGEIMPACT_MESSAGES_ID');
            echo $this->Form->input('CHANGEIMPACT_MESSAGES_IDX');
            echo $this->Form->input('ECONTAINER_CLASS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
