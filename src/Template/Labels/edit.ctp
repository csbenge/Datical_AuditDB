<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $label->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $label->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Labels'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="labels form large-10 medium-9 columns">
    <?= $this->Form->create($label) ?>
    <fieldset>
        <legend><?= __('Edit Label') ?></legend>
        <?php
            echo $this->Form->input('NAME');
            echo $this->Form->input('PROJECT_NAME');
            echo $this->Form->input('FK_PROJECTS_UUID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
