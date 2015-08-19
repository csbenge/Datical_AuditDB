<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Change Impact Sqls'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="changeImpactSqls form large-10 medium-9 columns">
    <?= $this->Form->create($changeImpactSql) ?>
    <fieldset>
        <legend><?= __('Add Change Impact Sql') ?></legend>
        <?php
            echo $this->Form->input('SQL_TEXT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
