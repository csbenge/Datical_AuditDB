<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Label'), ['action' => 'edit', $label->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Label'), ['action' => 'delete', $label->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $label->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Labels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Label'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="labels view large-10 medium-9 columns">
    <h2><?= h($label->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('NAME') ?></h6>
            <p><?= h($label->NAME) ?></p>
            <h6 class="subheader"><?= __('PROJECT NAME') ?></h6>
            <p><?= h($label->PROJECT_NAME) ?></p>
            <h6 class="subheader"><?= __('FK PROJECTS UUID') ?></h6>
            <p><?= h($label->FK_PROJECTS_UUID) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($label->ID) ?></p>
        </div>
    </div>
</div>
