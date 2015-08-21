<!-- File: src/Template/ruleResp/index.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-check"></i>Rule Responses <small> All</small></h2>

<div class="col-md-12 main">
<div class="panel panel-red">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-check fa-fw"></i> Rule Responses</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">

          <?php if (!($ruleResps->isEmpty())) { ?>
          <table class="table table-striped table-bordered table-hover table-condensed">
          <thead>
            <tr>
                <th><?= $this->Paginator->sort('PROJECT') ?></th>
                <th><?= $this->Paginator->sort('STEP') ?></th>
                <th><?= $this->Paginator->sort('RULE_NAME') ?></th>
                <th><?= $this->Paginator->sort('PHASE') ?></th>
                <th style="text-align:center"><?= $this->Paginator->sort('LEVEL') ?></th>
                <th><?= $this->Paginator->sort('MESSAGE') ?></th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($ruleResps as $ruleResp): ?>
            <tr>
                <td>
                  <?= $this->Html->link(h($this->DeployResults->getRuleRespsProject(h($ruleResp->FK_OPERATIONS_ID))), ['controller' => 'Operations', 'action' => 'view', $ruleResp->FK_OPERATIONS_ID]) ?>
                </td>
                <td><?= $this->DeployResults->getRuleRespsStep(h($ruleResp->FK_OPERATIONS_ID)) ?></td>
                <td><?= h($ruleResp->RULE_NAME) ?></td>
                <td><?= h($ruleResp->PHASE) ?></td>
                <td style="text-align:center"><?= $this->DeployResults->prettyUpResult(h($ruleResp->LEVEL_NAME)) ?></td>
                <td><?= $this->DeployResults->getRuleRespsMsg(h($ruleResp->ID)) ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
          </table>
          <?php } else { ?>
              <div class="well">There are no rule responses.</div>
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
