<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Table Mods'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tableMods form large-10 medium-9 columns">
    <?= $this->Form->create($tableMod) ?>
    <fieldset>
        <legend><?= __('Add Table Mod') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('TABLE_NAME');
            echo $this->Form->input('ROWS_TOUCHED');
            echo $this->Form->input('VALUES_DELETED');
            echo $this->Form->input('FK_OPERATIONS_ID');
            echo $this->Form->input('OPERATIONS_TABLE_MODS_IDX');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
