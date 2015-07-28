<!-- File: src/Template/T/index.ctpablemods -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-8 main">
      <h2 class="page-header"><?= __('TABLEMODS') ?></h2>

    <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('DTYPE') ?></th>
            <th><?= $this->Paginator->sort('E_VERSION') ?></th>
            <th><?= $this->Paginator->sort('TABLENAME') ?></th>
            <th><?= $this->Paginator->sort('ROWSTOUCHED') ?></th>
            <th><?= $this->Paginator->sort('VALUESDELETED') ?></th>
            <th><?= $this->Paginator->sort('OPERATION_TABLEMODS_ID') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tablemods as $tablemod): ?>
        <tr>
            <td><?= $this->Number->format($tablemod->ID) ?></td>
            <td><?= h($tablemod->DTYPE) ?></td>
            <td><?= $this->Number->format($tablemod->E_VERSION) ?></td>
            <td><?= h($tablemod->TABLENAME) ?></td>
            <td><?= $this->Number->format($tablemod->ROWSTOUCHED) ?></td>
            <td><?= $this->Number->format($tablemod->VALUESDELETED) ?></td>
            <td><?= $this->Number->format($tablemod->OPERATION_TABLEMODS_ID) ?></td>
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
