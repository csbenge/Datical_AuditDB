<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Op Databases'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="opDatabases form large-10 medium-9 columns">
    <?= $this->Form->create($opDatabase) ?>
    <fieldset>
        <legend><?= __('Add Op Database') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('VENDOR');
            echo $this->Form->input('VERSION');
            echo $this->Form->input('DRIVER');
            echo $this->Form->input('DRIVER_VERSION');
            echo $this->Form->input('JDBC_VERSION');
            echo $this->Form->input('ENGINE');
            echo $this->Form->input('USER_NAME');
            echo $this->Form->input('HOST');
            echo $this->Form->input('PORT');
            echo $this->Form->input('SID');
            echo $this->Form->input('SERVICE_NAME');
            echo $this->Form->input('DB_NAME');
            echo $this->Form->input('APPLICATION_NAME');
            echo $this->Form->input('INSTANCE_NAME');
            echo $this->Form->input('URL');
            echo $this->Form->input('LAST_DEPLOY');
            echo $this->Form->input('LAST_ROLLBACK');
            echo $this->Form->input('LAST_CHANGELOG_SYNC');
            echo $this->Form->input('FK_PROJECTS_UUID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
