<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opdatabase->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opdatabase->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Opdatabases'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="opdatabases form large-10 medium-9 columns">
    <?= $this->Form->create($opdatabase) ?>
    <fieldset>
        <legend><?= __('Edit Opdatabase') ?></legend>
        <?php
            echo $this->Form->input('DTYPE');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('VENDOR');
            echo $this->Form->input('VERSION');
            echo $this->Form->input('DRIVER');
            echo $this->Form->input('DRIVERVERSION');
            echo $this->Form->input('JDBCVERSION');
            echo $this->Form->input('ENGINE');
            echo $this->Form->input('USERNAME');
            echo $this->Form->input('HOST');
            echo $this->Form->input('PORT');
            echo $this->Form->input('SID');
            echo $this->Form->input('SERVICE_NAME');
            echo $this->Form->input('DBNAME');
            echo $this->Form->input('APPLICATION_NAME');
            echo $this->Form->input('INSTANCE_NAME');
            echo $this->Form->input('URL');
            echo $this->Form->input('LAST_DEPLOY');
            echo $this->Form->input('LAST_ROLLBACK');
            echo $this->Form->input('LAST_CHANGELOG_SYNC');
            echo $this->Form->input('ECONTAINER_CLASS');
            echo $this->Form->input('E_CONTAINER');
            echo $this->Form->input('E_CONTAINER_FEATURE_NAME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
