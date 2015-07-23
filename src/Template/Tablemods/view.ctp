<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tablemod'), ['action' => 'edit', $tablemod->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tablemod'), ['action' => 'delete', $tablemod->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tablemod->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Tablemods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tablemod'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tablemods view large-10 medium-9 columns">
    <h2><?= h($tablemod->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DTYPE') ?></h6>
            <p><?= h($tablemod->DTYPE) ?></p>
            <h6 class="subheader"><?= __('TABLENAME') ?></h6>
            <p><?= h($tablemod->TABLENAME) ?></p>
            <h6 class="subheader"><?= __('ECONTAINER CLASS') ?></h6>
            <p><?= h($tablemod->ECONTAINER_CLASS) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER') ?></h6>
            <p><?= h($tablemod->E_CONTAINER) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER FEATURE NAME') ?></h6>
            <p><?= h($tablemod->E_CONTAINER_FEATURE_NAME) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($tablemod->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($tablemod->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('ROWSTOUCHED') ?></h6>
            <p><?= $this->Number->format($tablemod->ROWSTOUCHED) ?></p>
            <h6 class="subheader"><?= __('VALUESDELETED') ?></h6>
            <p><?= $this->Number->format($tablemod->VALUESDELETED) ?></p>
            <h6 class="subheader"><?= __('OPERATION TABLEMODS ID') ?></h6>
            <p><?= $this->Number->format($tablemod->OPERATION_TABLEMODS_ID) ?></p>
            <h6 class="subheader"><?= __('OPERATION TABLEMODS IDX') ?></h6>
            <p><?= $this->Number->format($tablemod->OPERATION_TABLEMODS_IDX) ?></p>
        </div>
    </div>
</div>
