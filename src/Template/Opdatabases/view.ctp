<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Opdatabase'), ['action' => 'edit', $opdatabase->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opdatabase'), ['action' => 'delete', $opdatabase->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $opdatabase->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Opdatabases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opdatabase'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opdatabases view large-10 medium-9 columns">
    <h2><?= h($opdatabase->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DTYPE') ?></h6>
            <p><?= h($opdatabase->DTYPE) ?></p>
            <h6 class="subheader"><?= __('VENDOR') ?></h6>
            <p><?= h($opdatabase->VENDOR) ?></p>
            <h6 class="subheader"><?= __('VERSION') ?></h6>
            <p><?= h($opdatabase->VERSION) ?></p>
            <h6 class="subheader"><?= __('DRIVER') ?></h6>
            <p><?= h($opdatabase->DRIVER) ?></p>
            <h6 class="subheader"><?= __('DRIVERVERSION') ?></h6>
            <p><?= h($opdatabase->DRIVERVERSION) ?></p>
            <h6 class="subheader"><?= __('JDBCVERSION') ?></h6>
            <p><?= h($opdatabase->JDBCVERSION) ?></p>
            <h6 class="subheader"><?= __('ENGINE') ?></h6>
            <p><?= h($opdatabase->ENGINE) ?></p>
            <h6 class="subheader"><?= __('USERNAME') ?></h6>
            <p><?= h($opdatabase->USERNAME) ?></p>
            <h6 class="subheader"><?= __('HOST') ?></h6>
            <p><?= h($opdatabase->HOST) ?></p>
            <h6 class="subheader"><?= __('SID') ?></h6>
            <p><?= h($opdatabase->SID) ?></p>
            <h6 class="subheader"><?= __('SERVICE NAME') ?></h6>
            <p><?= h($opdatabase->SERVICE_NAME) ?></p>
            <h6 class="subheader"><?= __('DBNAME') ?></h6>
            <p><?= h($opdatabase->DBNAME) ?></p>
            <h6 class="subheader"><?= __('APPLICATION NAME') ?></h6>
            <p><?= h($opdatabase->APPLICATION_NAME) ?></p>
            <h6 class="subheader"><?= __('INSTANCE NAME') ?></h6>
            <p><?= h($opdatabase->INSTANCE_NAME) ?></p>
            <h6 class="subheader"><?= __('URL') ?></h6>
            <p><?= h($opdatabase->URL) ?></p>
            <h6 class="subheader"><?= __('ECONTAINER CLASS') ?></h6>
            <p><?= h($opdatabase->ECONTAINER_CLASS) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER') ?></h6>
            <p><?= h($opdatabase->E_CONTAINER) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER FEATURE NAME') ?></h6>
            <p><?= h($opdatabase->E_CONTAINER_FEATURE_NAME) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($opdatabase->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($opdatabase->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('PORT') ?></h6>
            <p><?= $this->Number->format($opdatabase->PORT) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('LAST DEPLOY') ?></h6>
            <p><?= h($opdatabase->LAST_DEPLOY) ?></p>
            <h6 class="subheader"><?= __('LAST ROLLBACK') ?></h6>
            <p><?= h($opdatabase->LAST_ROLLBACK) ?></p>
            <h6 class="subheader"><?= __('LAST CHANGELOG SYNC') ?></h6>
            <p><?= h($opdatabase->LAST_CHANGELOG_SYNC) ?></p>
        </div>
    </div>
</div>
