  <ul class="nav nav-sidebar">
  <br/>
  <h3><?= __('Deployments') ?></h3>
    <li><?= $this->Html->link(__('Operations'), ['controller' => 'operations', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('OpDatabases'), ['controller' => 'opdatabases', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ChangeSetDetails'), ['controller' => 'ChangesetDetails', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ChangeImpacts'), ['controller' => 'Changeimpacts', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ClientDetails'), ['controller' => 'ClientDetails', 'action' => 'index']) ?></li>
  </ul>