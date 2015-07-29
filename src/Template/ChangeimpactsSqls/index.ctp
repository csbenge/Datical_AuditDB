<!-- File: src/Template/ChangesetImpactsSQLs/index.ctp -->

<div class="container-fluid">
    <div class="col-md-2 sidebar">
    <?php echo $this->element('sidebar-tables'); ?>
    </div>

    <div class="col-md-8 main">
      <h2 class="page-header"><?= __('CHANGE_IMPACTS_SQLS') ?></h2>

<table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('CHANGEIMPACT_SQL_ID') ?></th>
            <th><?= $this->Paginator->sort('CHANGEIMPACT_SQL_IDX') ?></th>
            <th><?= $this->Paginator->sort('SQL_TEXT') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($changeimpactsSqls as $changeimpactsSql): ?>
        <tr>
            <td><?= $this->Number->format($changeimpactsSql->CHANGEIMPACT_SQL_ID) ?></td>
            <td><?= $this->Number->format($changeimpactsSql->CHANGEIMPACT_SQL_IDX) ?></td>
            <td><?= h($changeimpactsSql->SQL_TEXT) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-7 text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?><br/>
        <small><?= $this->Paginator->counter() ?></small>
    </ul>
  </div>
  <div class="col-md-3"></div>
</div>

</div>
