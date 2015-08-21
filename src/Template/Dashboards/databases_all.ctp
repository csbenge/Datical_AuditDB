<!-- File: src/Template/Dashboards/dashboards_all.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-database"></i>Databases <small>All</small></h2>

<div class="col-md-12 main">
  <div class="panel panel-primary">
    <div class="panel-heading"><i class="fa fa-database fa-white fa-lg"></i> <strong><big><?= __('Databases') ?></big></strong></div>
    <div class="panel-body">

    <?php if (!($operations->isEmpty())) { ?>
    <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('DATABASE') ?></th>
            <th><?= $this->Paginator->sort('USERNAME') ?></th>
            <th><?= $this->Paginator->sort('HOST') ?></th>
            <th><?= $this->Paginator->sort('ENGINE') ?></th>
            <th><?= $this->Paginator->sort('PORT') ?></th>
            <th><?= $this->Paginator->sort('SID') ?></th>
            <th><?= $this->Paginator->sort('SERVICE_NAME') ?></th>
            <th><?= $this->Paginator->sort('APPLICATION') ?></th>
            <th><?= $this->Paginator->sort('INSTANCE') ?></th>
            <th><?= $this->Paginator->sort('LAST_DEPLOY') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($operations as $operation): ?>
        <tr>
            <td><?= h($operation->DB_NAME) ?></td>
            <td><?= h($operation->USER_NAME) ?></td>
            <td><?= h($operation->HOST) ?></td>
            <td><?= h($operation->ENGINE) ?></td>
            <td><?= h($operation->PORT) ?></td>
            <td><?= h($operation->SID) ?></td>
            <td><?= h($operation->SERVICE_NAME) ?></td>
            <td><?= h($operation->APPLICATION_NAME) ?></td>
            <td><?= h($operation->INSTANCE_NAME) ?></td>
            <td><?= h($operation->LAST_DEPLOY) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <?php } else { ?>
        <div class="well">There are no deployments.</div>
    <?php } ?>
</div>

<div class="row">
  <div class="col-md-12 text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?><br/>
        <small><?= $this->Paginator->counter() ?></small>
    </ul>
  </div>
</div>

</div>
</div>
</div>
