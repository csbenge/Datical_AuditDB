<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="messages form large-10 medium-9 columns">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('MESSAGE_TIME');
            echo $this->Form->input('MESSAGE_LEVEL');
            echo $this->Form->input('TEXT');
            echo $this->Form->input('FK_CHANGE_IMPACTS_ID');
            echo $this->Form->input('MESSAGES_IDX');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
