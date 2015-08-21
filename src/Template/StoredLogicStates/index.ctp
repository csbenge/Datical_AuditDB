<!-- File: src/Template/storedlogicstates/index.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-code"></i>Stored Logic Compiles <small> All</small></h2>

<div class="col-md-12 main">
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-code fa-fw"></i> Messages</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

          <?php if (!($storedLogicStates->isEmpty())) { ?>
          <table class="table table-striped table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th><?= $this->Paginator->sort('PROJECT') ?></th>
              <th><?= $this->Paginator->sort('STEP') ?></th>
              <th><?= $this->Paginator->sort('OBJECT_NAME') ?></th>
              <th><?= $this->Paginator->sort('OBJECT_TYPE') ?></th>
              <th><?= $this->Paginator->sort('STATE_BEFORE') ?></th>
              <th><?= $this->Paginator->sort('STATE_AFTER') ?></th>
              <th><?= $this->Paginator->sort('MESSAGES') ?></th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($storedLogicStates as $storedLogicState): ?>
            <tr>
              <td>
                <?= $this->Html->link(h($this->DeployResults->getStoredLogicStateProjectName(h($storedLogicState->FK_OPERATIONS_ID))),
                    ['controller' => 'Operations', 'action' => 'view', h($storedLogicState->FK_OPERATIONS_ID)]) ?>
              </td>
              <td><?= $this->DeployResults->getStoredLogicStateProjectStep(h($storedLogicState->FK_OPERATIONS_ID)) ?></td>
              <td><?= h($storedLogicState->OBJECT_NAME) ?></td>
              <td><?= h($storedLogicState->OBJECT_TYPE) ?></td>
              <td style="text-align:center"><?= $this->DeployResults->prettyUpResult(h($storedLogicState->STATE_BEFORE)) ?></td>
              <td style="text-align:center"><?= $this->DeployResults->prettyUpResult(h($storedLogicState->STATE_AFTER)) ?></td>
              <td><?= $this->DeployResults->getStoredLogicCompMsgs(h($storedLogicState->ID)) ?></td>
          <?php endforeach; ?>
          </tbody>
          </table>
          <?php } else { ?>
              <div class="well">There are no messages.</div>
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
