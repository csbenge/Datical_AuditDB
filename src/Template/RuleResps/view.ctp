<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rule Resp'), ['action' => 'edit', $ruleResp->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rule Resp'), ['action' => 'delete', $ruleResp->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ruleResp->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Rule Resps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rule Resp'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ruleResps view large-10 medium-9 columns">
    <h2><?= h($ruleResp->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('RULE NAME') ?></h6>
            <p><?= h($ruleResp->RULE_NAME) ?></p>
            <h6 class="subheader"><?= __('PHASE') ?></h6>
            <p><?= h($ruleResp->PHASE) ?></p>
            <h6 class="subheader"><?= __('LEVEL NAME') ?></h6>
            <p><?= h($ruleResp->LEVEL_NAME) ?></p>
            <h6 class="subheader"><?= __('PARENT TABLE') ?></h6>
            <p><?= h($ruleResp->PARENT_TABLE) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($ruleResp->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($ruleResp->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('FK OPERATIONS ID') ?></h6>
            <p><?= $this->Number->format($ruleResp->FK_OPERATIONS_ID) ?></p>
            <h6 class="subheader"><?= __('OPERATIONS RULE RESPS IDX') ?></h6>
            <p><?= $this->Number->format($ruleResp->OPERATIONS_RULE_RESPS_IDX) ?></p>
            <h6 class="subheader"><?= __('FK CHANGE IMPACTS ID') ?></h6>
            <p><?= $this->Number->format($ruleResp->FK_CHANGE_IMPACTS_ID) ?></p>
            <h6 class="subheader"><?= __('CHANGE IMPACTS RULE RESPS IDX') ?></h6>
            <p><?= $this->Number->format($ruleResp->CHANGE_IMPACTS_RULE_RESPS_IDX) ?></p>
        </div>
    </div>
</div>
