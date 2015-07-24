  <ul class="nav nav-sidebar">
  <h3><?= __('Dashboards') ?></h3>
    <li><?= $this->Html->link(__('Overview'), ['controller' => 'dashboards', 'action' => 'overview']) ?></li>
    <li><?=  $this->Html->link(__('Databases All'), ['controller' => 'Dashboards','action' => 'databasesAll']) ?></li>
    <li><?=  $this->Html->link(__('Deployments All'), ['controller' => 'Dashboards','action' => 'deploymentsAll']) ?></li>
    <li><?=  $this->Html->link(__('Deployments Passed'), ['controller' => 'Dashboards','action' => 'deploymentsPassed']) ?></li>
    <li><?=  $this->Html->link(__('Deployments Failed'), ['controller' => 'Dashboards','action' => 'deploymentsFailed']) ?></li>
  </ul>