<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Rule Resp Msgs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ruleRespMsgs form large-10 medium-9 columns">
    <?= $this->Form->create($ruleRespMsg) ?>
    <fieldset>
        <legend><?= __('Add Rule Resp Msg') ?></legend>
        <?php
            echo $this->Form->input('MESSAGE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
