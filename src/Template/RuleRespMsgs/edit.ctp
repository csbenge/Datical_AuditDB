<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ruleRespMsg->FK_RULE_RESPS_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ruleRespMsg->FK_RULE_RESPS_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rule Resp Msgs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ruleRespMsgs form large-10 medium-9 columns">
    <?= $this->Form->create($ruleRespMsg) ?>
    <fieldset>
        <legend><?= __('Edit Rule Resp Msg') ?></legend>
        <?php
            echo $this->Form->input('MESSAGE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
