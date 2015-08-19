<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rule Resp Msg'), ['action' => 'edit', $ruleRespMsg->FK_RULE_RESPS_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rule Resp Msg'), ['action' => 'delete', $ruleRespMsg->FK_RULE_RESPS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ruleRespMsg->FK_RULE_RESPS_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Rule Resp Msgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rule Resp Msg'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ruleRespMsgs view large-10 medium-9 columns">
    <h2><?= h($ruleRespMsg->FK_RULE_RESPS_ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('MESSAGE') ?></h6>
            <p><?= h($ruleRespMsg->MESSAGE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('FK RULE RESPS ID') ?></h6>
            <p><?= $this->Number->format($ruleRespMsg->FK_RULE_RESPS_ID) ?></p>
            <h6 class="subheader"><?= __('RULE RESP MSGS IDX') ?></h6>
            <p><?= $this->Number->format($ruleRespMsg->RULE_RESP_MSGS_IDX) ?></p>
        </div>
    </div>
</div>
