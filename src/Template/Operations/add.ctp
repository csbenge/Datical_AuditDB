<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Operations'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="operations form large-10 medium-9 columns">
    <?= $this->Form->create($operation) ?>
    <fieldset>
        <legend><?= __('Add Operation') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('PROJECT_NAME');
            echo $this->Form->input('CLIENT_TZ');
            echo $this->Form->input('CLIENT_HOSTNAME');
            echo $this->Form->input('CLIENT_IP');
            echo $this->Form->input('CLIENT_TYPE');
            echo $this->Form->input('CLIENT_USER');
            echo $this->Form->input('CLIENT_ROLE');
            echo $this->Form->input('STEP');
            echo $this->Form->input('DEPLOY_THRESHOLD');
            echo $this->Form->input('VALIDITY_SETTING');
            echo $this->Form->input('TOTAL_CHANGESETS');
            echo $this->Form->input('TOTAL_ROWS_TOUCHED');
            echo $this->Form->input('TOTAL_VALUES_DELETED');
            echo $this->Form->input('FK_OP_DATABASES_ID');
            echo $this->Form->input('PREDICTED_SUCCESS');
            echo $this->Form->input('DEPLOY_RESULT');
            echo $this->Form->input('DESCRIPTION');
            echo $this->Form->input('ACTION_TYPE');
            echo $this->Form->input('CONTEXTS');
            echo $this->Form->input('LABELS');
            echo $this->Form->input('GEN_SQL');
            echo $this->Form->input('GEN_ROLLBACK_SQL');
            echo $this->Form->input('GEN_SQL_PATH');
            echo $this->Form->input('GEN_ROLLBACK_SQL_PATH');
            echo $this->Form->input('START_TIME');
            echo $this->Form->input('STOP_TIME');
            echo $this->Form->input('TOTAL_TIME');
            echo $this->Form->input('DEPLOY_MODE');
            echo $this->Form->input('LOG_PATH');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
