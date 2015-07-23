<!-- File: src/Template/Operations/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
      <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-10 main">
      <h2 class="page-header"><?= __('OPERATION') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
<thead>
    <tr>
        <th><?= $this->Paginator->sort('PROJECT_NAME') ?></th>
        <th><?= $this->Paginator->sort('STEP') ?></th>
        <th><?= $this->Paginator->sort('ID') ?></th>
        <th><?= $this->Paginator->sort('OPDATABASE_DB_ID') ?></th>
        <th><?= $this->Paginator->sort('E_VERSION') ?></th>
        <th><?= $this->Paginator->sort('OPDATE') ?></th>
        <th><?= $this->Paginator->sort('DEPLOY_THRESHOLD') ?></th>
        <th><?= $this->Paginator->sort('VALIDITY_SETTING') ?></th>
    </tr>
</thead>
<tbody>
<?php foreach ($operations as $operation): ?>
    <tr>
        <td><?= $this->Html->link(h($operation->PROJECT_NAME), ['action' => 'view', $operation->ID]) ?>
        </td>
        <td><?= h($operation->STEP) ?></td>
        <td><?= $this->Number->format($operation->ID) ?></td>
        <td><?= $this->Number->format($operation->OPDATABASE_DB_ID) ?></td>
        <td><?= $this->Number->format($operation->E_VERSION) ?></td>
        <td><?= h($operation->OPDATE) ?></td>
        <td><?= h($operation->DEPLOY_THRESHOLD) ?></td>
        <td><?= h($operation->VALIDITY_SETTING) ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?><br/>
        <small><?= $this->Paginator->counter() ?></small>
    </ul>
  </div>
  <div class="col-md-4"></div>
</div>
