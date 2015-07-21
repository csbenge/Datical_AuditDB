<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Detail'), ['action' => 'edit', $clientDetail->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Detail'), ['action' => 'delete', $clientDetail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDetail->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Detail'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDetails view large-10 medium-9 columns">
    <h2><?= h($clientDetail->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('DTYPE') ?></h6>
            <p><?= h($clientDetail->DTYPE) ?></p>
            <h6 class="subheader"><?= __('CLIENT TZ') ?></h6>
            <p><?= h($clientDetail->CLIENT_TZ) ?></p>
            <h6 class="subheader"><?= __('CLIENT HOSTNAME') ?></h6>
            <p><?= h($clientDetail->CLIENT_HOSTNAME) ?></p>
            <h6 class="subheader"><?= __('CLIENT IP') ?></h6>
            <p><?= h($clientDetail->CLIENT_IP) ?></p>
            <h6 class="subheader"><?= __('CLIENT TYPE') ?></h6>
            <p><?= h($clientDetail->CLIENT_TYPE) ?></p>
            <h6 class="subheader"><?= __('CLIENT USER') ?></h6>
            <p><?= h($clientDetail->CLIENT_USER) ?></p>
            <h6 class="subheader"><?= __('CLIENT ROLE') ?></h6>
            <p><?= h($clientDetail->CLIENT_ROLE) ?></p>
            <h6 class="subheader"><?= __('ECONTAINER CLASS') ?></h6>
            <p><?= h($clientDetail->ECONTAINER_CLASS) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER') ?></h6>
            <p><?= h($clientDetail->E_CONTAINER) ?></p>
            <h6 class="subheader"><?= __('E CONTAINER FEATURE NAME') ?></h6>
            <p><?= h($clientDetail->E_CONTAINER_FEATURE_NAME) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($clientDetail->ID) ?></p>
            <h6 class="subheader"><?= __('OPERATION ID') ?></h6>
            <p><?= $this->Number->format($clientDetail->OPERATION_ID) ?></p>
            <h6 class="subheader"><?= __('E VERSION') ?></h6>
            <p><?= $this->Number->format($clientDetail->E_VERSION) ?></p>
        </div>
    </div>
</div>
