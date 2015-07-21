<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $operation->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $operation->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Operations'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="operations form large-10 medium-9 columns">
    <?= $this->Form->create($operation) ?>
    <fieldset>
        <legend><?= __('Edit Operation') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('PROJECT_NAME');
            echo $this->Form->input('OPDATE');
            echo $this->Form->input('STEP');
            echo $this->Form->input('DEPLOY_THRESHOLD');
            echo $this->Form->input('VALIDITY_SETTING');
            echo $this->Form->input('TOTALROWSTOUCHED');
            echo $this->Form->input('TOTALVALUESDELETED');
            echo $this->Form->input('OPDATABASE_DB_ID');
            echo $this->Form->input('PREDICTEDSUCCESS');
            echo $this->Form->input('DEPLOY_RESULT');
            echo $this->Form->input('DESCRIPTION');
            echo $this->Form->input('ACTION_TYPE');
            echo $this->Form->input('CONTEXTS');
            echo $this->Form->input('LABELS');
            echo $this->Form->input('GENSQL');
            echo $this->Form->input('GENROLLBACKSQL');
            echo $this->Form->input('GENSQLPATH');
            echo $this->Form->input('GENROLLBACKSQLPATH');
            echo $this->Form->input('STARTTIME');
            echo $this->Form->input('STOPTIME');
            echo $this->Form->input('TOTALTIME');
            echo $this->Form->input('DEPLOYMODE');
            echo $this->Form->input('LOGPATH');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
