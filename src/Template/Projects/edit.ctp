<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $project->PROJECT_UUID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $project->PROJECT_UUID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="projects form large-10 medium-9 columns">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Edit Project') ?></legend>
        <?php
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('PROJECT_ID');
            echo $this->Form->input('PROJECT_NAME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
