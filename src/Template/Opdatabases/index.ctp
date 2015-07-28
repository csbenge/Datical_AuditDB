<!-- File: src/Template/Opdatabases/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-8 main">
      <h2 class="page-header"><?= __('OPDATABASE') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('VENDOR') ?></th>
            <th><?= $this->Paginator->sort('VERSION') ?></th>
            <th><?= $this->Paginator->sort('DRIVER') ?></th>
            <th><?= $this->Paginator->sort('DRIVERVERSION') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opdatabases as $opdatabase): ?>
        <tr>
            <td><?= $this->Number->format($opdatabase->ID) ?></td>
            <td><?= h($opdatabase->DTYPE) ?></td>
            <td><?= $this->Number->format($opdatabase->E_VERSION) ?></td>
            <td><?= h($opdatabase->VENDOR) ?></td>
            <td><?= h($opdatabase->VERSION) ?></td>
            <td><?= h($opdatabase->DRIVER) ?></td>
            <td><?= h($opdatabase->DRIVERVERSION) ?></td>
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
