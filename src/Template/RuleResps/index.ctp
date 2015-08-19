<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rule Resp'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ruleResps index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('RULE_NAME') ?></th>
            <th><?= $this->Paginator->sort('PHASE') ?></th>
            <th><?= $this->Paginator->sort('LEVEL_NAME') ?></th>
            <th><?= $this->Paginator->sort('FK_OPERATIONS_ID') ?></th>
            <th><?= $this->Paginator->sort('OPERATIONS_RULE_RESPS_IDX') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ruleResps as $ruleResp): ?>
        <tr>
            <td><?= $this->Number->format($ruleResp->ID) ?></td>
            <td><?= $this->Number->format($ruleResp->E_VERSION) ?></td>
            <td><?= h($ruleResp->RULE_NAME) ?></td>
            <td><?= h($ruleResp->PHASE) ?></td>
            <td><?= h($ruleResp->LEVEL_NAME) ?></td>
            <td><?= $this->Number->format($ruleResp->FK_OPERATIONS_ID) ?></td>
            <td><?= $this->Number->format($ruleResp->OPERATIONS_RULE_RESPS_IDX) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ruleResp->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ruleResp->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ruleResp->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $ruleResp->ID)]) ?>
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
