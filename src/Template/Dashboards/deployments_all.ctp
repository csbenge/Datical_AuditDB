<!-- File: src/Template/Dashboards/deployments_all.ctp -->

<div class="col-md-10 main">
<br/>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-database fa-fw"></i> Deployments: All</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

    <?php if (!($operations->isEmpty())) { ?>
    <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('PROJECT') ?></th>
            <th><?= $this->Paginator->sort('STEP') ?></th>
            <th><?= $this->Paginator->sort('DEPLOY_TIME') ?></th>
            <th><?= $this->Paginator->sort('DURATION') ?></th>
            <th><?= $this->Paginator->sort('ACTION') ?></th>
            <th><?= $this->Paginator->sort('MODE') ?></th>
            <th><?= $this->Paginator->sort('RESULT') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($operations as $operation): ?>
        <tr>
            <td><i class="fa fa-database fa-green"></i> <?= $this->Html->link(h($operation->PROJECT_NAME), ['controller' => 'Operations', 'action' => 'view', $operation->ID]) ?>
            </td>
            <td><?= h($operation->STEP) ?></td>
            <td><?= h($operation->STARTTIME) ?></td>
            <td><?= h($operation->TOTALTIME) ?></td>
            <td><?= $this->DeployResults->prettyUpAction(h($operation->ACTION_TYPE)) ?></td>
            <td><?= $this->DeployResults->prettyUpCase(h($operation->DEPLOYMODE)) ?></td>
            <td><?= $this->DeployResults->prettyUpResult(h($operation->DEPLOY_RESULT)) ?></td>
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