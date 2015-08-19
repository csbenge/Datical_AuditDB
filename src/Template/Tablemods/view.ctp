<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Table Mod'), ['action' => 'edit', $tableMod->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Table Mod'), ['action' => 'delete', $tableMod->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tableMod->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Table Mods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Table Mod'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tableMods view large-10 medium-9 columns">
    <h2><?= h($tableMod->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('TABLE NAME') ?></h6>
            <p><?= h($tableMod->TABLE_NAME) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($tableMod->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($tableMod->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('ROWS TOUCHED') ?></h6>
            <p><?= $this->Number->format($tableMod->ROWS_TOUCHED) ?></p>
            <h6 class="subheader"><?= __('VALUES DELETED') ?></h6>
            <p><?= $this->Number->format($tableMod->VALUES_DELETED) ?></p>
            <h6 class="subheader"><?= __('FK OPERATIONS ID') ?></h6>
            <p><?= $this->Number->format($tableMod->FK_OPERATIONS_ID) ?></p>
            <h6 class="subheader"><?= __('OPERATIONS TABLE MODS IDX') ?></h6>
            <p><?= $this->Number->format($tableMod->OPERATIONS_TABLE_MODS_IDX) ?></p>
        </div>
    </div>
</div>
