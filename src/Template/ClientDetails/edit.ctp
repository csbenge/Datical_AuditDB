<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientDetail->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientDetail->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Details'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="clientDetails form large-10 medium-9 columns">
    <?= $this->Form->create($clientDetail) ?>
    <fieldset>
        <legend><?= __('Edit Client Detail') ?></legend>
        <?php
            echo $this->Form->input('OPERATION_ID');
            echo $this->Form->input('DTYPE');
            echo $this->Form->input('E_VERSION');
            echo $this->Form->input('CLIENT_TZ');
            echo $this->Form->input('CLIENT_HOSTNAME');
            echo $this->Form->input('CLIENT_IP');
            echo $this->Form->input('CLIENT_TYPE');
            echo $this->Form->input('CLIENT_USER');
            echo $this->Form->input('CLIENT_ROLE');
            echo $this->Form->input('ECONTAINER_CLASS');
            echo $this->Form->input('E_CONTAINER');
            echo $this->Form->input('E_CONTAINER_FEATURE_NAME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
