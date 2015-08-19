<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rule Resp Msg'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ruleRespMsgs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('FK_RULE_RESPS_ID') ?></th>
            <th><?= $this->Paginator->sort('MESSAGE') ?></th>
            <th><?= $this->Paginator->sort('RULE_RESP_MSGS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ruleRespMsgs as $ruleRespMsg): ?>
        <tr>
            <td><?= $this->Number->format($ruleRespMsg->FK_RULE_RESPS_ID) ?></td>
            <td><?= h($ruleRespMsg->MESSAGE) ?></td>
            <td><?= $this->Number->format($ruleRespMsg->RULE_RESP_MSGS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ruleRespMsg->FK_RULE_RESPS_ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ruleRespMsg->FK_RULE_RESPS_ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ruleRespMsg->FK_RULE_RESPS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ruleRespMsg->FK_RULE_RESPS_ID)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
