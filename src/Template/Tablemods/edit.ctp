<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tablemod->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tablemod->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tablemods'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tablemods form large-10 medium-9 columns">
    <?= $this->Form->create($tablemod) ?>
    <fieldset>
        <legend><?= __('Edit Tablemod') ?></legend>
        <?php
            echo $this->Form->input('DTYPE');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('TABLENAME');
            echo $this->Form->input('ROWSTOUCHED');
            echo $this->Form->input('VALUESDELETED');
            echo $this->Form->input('OPERATION_TABLEMODS_ID');
            echo $this->Form->input('OPERATION_TABLEMODS_IDX');
            echo $this->Form->input('ECONTAINER_CLASS');
            echo $this->Form->input('E_CONTAINER');
            echo $this->Form->input('E_CONTAINER_FEATURE_NAME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
