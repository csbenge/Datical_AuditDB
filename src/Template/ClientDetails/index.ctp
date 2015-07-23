<!-- File: src/Template/ClientDetails/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-10 main">
      <h2 class="page-header"><?= __('CLIENT_DETAILS') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('OPERATION_ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_TZ') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_HOSTNAME') ?></th>
            <th><?= $this->Paginator->sort('CLIENT_IP') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDetails as $clientDetail): ?>
        <tr>
            <td><?= $this->Number->format($clientDetail->ID) ?></td>
            <td><?= $this->Number->format($clientDetail->OPERATION_ID) ?></td>
            <td><?= h($clientDetail->DTYPE) ?></td>
            <td><?= $this->Number->format($clientDetail->E_VERSION) ?></td>
            <td><?= h($clientDetail->CLIENT_TZ) ?></td>
            <td><?= h($clientDetail->CLIENT_HOSTNAME) ?></td>
            <td><?= h($clientDetail->CLIENT_IP) ?></td>
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

</div>
