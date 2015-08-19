<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Op Database'), ['action' => 'edit', $opDatabase->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Op Database'), ['action' => 'delete', $opDatabase->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $opDatabase->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Op Databases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Op Database'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opDatabases view large-10 medium-9 columns">
    <h2><?= h($opDatabase->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('VENDOR') ?></h6>
            <p><?= h($opDatabase->VENDOR) ?></p>
            <h6 class="subheader"><?= __('VERSION') ?></h6>
            <p><?= h($opDatabase->VERSION) ?></p>
            <h6 class="subheader"><?= __('DRIVER') ?></h6>
            <p><?= h($opDatabase->DRIVER) ?></p>
            <h6 class="subheader"><?= __('DRIVER VERSION') ?></h6>
            <p><?= h($opDatabase->DRIVER_VERSION) ?></p>
            <h6 class="subheader"><?= __('JDBC VERSION') ?></h6>
            <p><?= h($opDatabase->JDBC_VERSION) ?></p>
            <h6 class="subheader"><?= __('ENGINE') ?></h6>
            <p><?= h($opDatabase->ENGINE) ?></p>
            <h6 class="subheader"><?= __('USER NAME') ?></h6>
            <p><?= h($opDatabase->USER_NAME) ?></p>
            <h6 class="subheader"><?= __('HOST') ?></h6>
            <p><?= h($opDatabase->HOST) ?></p>
            <h6 class="subheader"><?= __('SID') ?></h6>
            <p><?= h($opDatabase->SID) ?></p>
            <h6 class="subheader"><?= __('SERVICE NAME') ?></h6>
            <p><?= h($opDatabase->SERVICE_NAME) ?></p>
            <h6 class="subheader"><?= __('DB NAME') ?></h6>
            <p><?= h($opDatabase->DB_NAME) ?></p>
            <h6 class="subheader"><?= __('APPLICATION NAME') ?></h6>
            <p><?= h($opDatabase->APPLICATION_NAME) ?></p>
            <h6 class="subheader"><?= __('INSTANCE NAME') ?></h6>
            <p><?= h($opDatabase->INSTANCE_NAME) ?></p>
            <h6 class="subheader"><?= __('URL') ?></h6>
            <p><?= h($opDatabase->URL) ?></p>
            <h6 class="subheader"><?= __('FK PROJECTS UUID') ?></h6>
            <p><?= h($opDatabase->FK_PROJECTS_UUID) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($opDatabase->ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($opDatabase->E_VERSION) ?></p>
            <h6 class="subheader"><?= __('PORT') ?></h6>
            <p><?= $this->Number->format($opDatabase->PORT) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('LAST DEPLOY') ?></h6>
            <p><?= h($opDatabase->LAST_DEPLOY) ?></p>
            <h6 class="subheader"><?= __('LAST ROLLBACK') ?></h6>
            <p><?= h($opDatabase->LAST_ROLLBACK) ?></p>
            <h6 class="subheader"><?= __('LAST CHANGELOG SYNC') ?></h6>
            <p><?= h($opDatabase->LAST_CHANGELOG_SYNC) ?></p>
        </div>
    </div>
</div>
