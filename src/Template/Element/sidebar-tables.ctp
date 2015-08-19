  <ul class="nav nav-sidebar">
  <h3><?= __('Tables') ?></h3>
    <li><?= $this->Html->link(__('Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Operations'), ['controller' => 'operations', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('OpDatabases'), ['controller' => 'opdatabases', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ChangeSetDetails'), ['controller' => 'ChangesetDetails', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('TableMods'), ['controller' => 'Tablemods', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ChangeImpacts'), ['controller' => 'ChangeImpacts', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('ChangeImpactsSQLs'), ['controller' => 'ChangeImpactSqls', 'action' => 'index']) ?></li>
  </ul>
