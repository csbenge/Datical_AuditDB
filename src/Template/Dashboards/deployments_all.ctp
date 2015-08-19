<!-- File: src/Template/Dashboards/deployments_all.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-power-off"></i>Deployments <small> All</small></h2>

<div class="col-md-12 main">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-database fa-fw"></i> Deployments</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

    <?php if (!($operations->isEmpty())) { ?>
        <?php
            echo $this->Form->select('project', [
                'Projects' => [ 'All' => 'All',
                'BookShop' => 'BookShop',
                'Vehicles' => 'Vehicles']
            ]);
        ?>
    <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('PROJECT') ?></th>
            <th><?= $this->Paginator->sort('STEP') ?></th>
            <th><?= $this->Paginator->sort('LABELS') ?></th>
            <th><?= $this->Paginator->sort('CHANGES') ?></th>
            <th><?= $this->Paginator->sort('START_TIME') ?></th>
            <th><?= $this->Paginator->sort('TOTAL_TIME') ?></th>
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
            <td><?= h($operation->LABELS) ?></td>
            <td><?= h($operation->TOTAL_CHANGESETS) ?></td>
            <td><?= h($operation->START_TIME) ?></td>
            <td><?= h($operation->TOTAL_TIME) ?></td>
            <td><?= $this->DeployResults->prettyUpAction(h($operation->ACTION_TYPE)) ?></td>
            <td><?= $this->DeployResults->prettyUpCase(h($operation->DEPLOY_MODE)) ?></td>
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
</div>
