<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Rule Resps'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ruleResps form large-10 medium-9 columns">
    <?= $this->Form->create($ruleResp) ?>
    <fieldset>
        <legend><?= __('Add Rule Resp') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('RULE_NAME');
            echo $this->Form->input('PHASE');
            echo $this->Form->input('LEVEL_NAME');
            echo $this->Form->input('FK_OPERATIONS_ID');
            echo $this->Form->input('OPERATIONS_RULE_RESPS_IDX');
            echo $this->Form->input('FK_CHANGE_IMPACTS_ID');
            echo $this->Form->input('CHANGE_IMPACTS_RULE_RESPS_IDX');
            echo $this->Form->input('PARENT_TABLE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
