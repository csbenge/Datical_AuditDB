<!-- File: src/Template/Dashboards/overview.ctp -->

<div class="col-md-10 main">
  <h2 class="page-header"><i class="fa fa-fw fa-folder"></i>Project <small><?= $latestOperation->PROJECT_NAME ?></small></h2>

  <div class="row">

    <?php if (!($latestMessages->isEmpty())) { ?>
    <div class="col-lg-12 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-exclamation-triangle fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($messageCount) ?></div>
                        <div>Messages</div>
                    </div>
                </div>
            </div>


            <div class="panel-footer">

            <table class="table table-hover table-condensed table-stripped">
            <thead>
            <tr>
                <th><?= __('Level') ?></th>
                <th><?= __('Time') ?></th>
                <th><?= __('Project') ?></th>
                <th><?= __('Message') ?></th>
            </tr>
            </thead>
            <?php foreach ($latestMessages as $latestMessage): ?>
            <tr>
                <td width="50px"><?= $this->DeployResults->prettyUpMessageLevel(h($latestMessage->MESSAGE_LEVEL)) ?></td>
                <td width="175px"><?= $latestMessage->MESSAGE_TIME ?></td>
                <td><?= $this->Html->link(h($this->DeployResults->getChangeImpact_ChangeID(h($latestMessage->FK_CHANGE_IMPACTS_ID))), ['controller' => 'Operations', 'action' => 'view', $this->DeployResults->getChangeImpact_ChangeIDID(h($latestMessage->FK_CHANGE_IMPACTS_ID))]) ?>
                </td>
                <td><?= $latestMessage->TEXT ?></td>
            </tr>
            <?php endforeach; ?>
            </table>
                <span class="pull-left">
                <?php
                    echo $this->Html->link(__('View Details'), ['controller' => 'Messages','action' => 'index'],
                    ['class' => '']);
                ?>
                </span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <?php } ?>


<div class="row">

    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-power-off fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($operationCount) ?></div>
                        <div>Deployments</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
            <table class="table table-hover table-condensed">
            <tr>
                <td colspan="2" style="text-align:center;"><strong>LATEST</strong></td>
            </tr>
            <tr>
                <td><strong>PROJECT</strong></td>

                <td>
                    <?= $latestOperation->PROJECT_NAME ?>
                </td>
            </tr>
            <tr>
                <td><strong>ENVIRONMENT</strong></td>
                <td>
                    <?= $latestOperation->STEP ?>
                <td>
            </tr>
            <tr>
                <td><strong>TIME</strong></td>
                <td>
                    <?= $latestOperation->START_TIME ?>
                </td>
            </tr>
            <tr>
                <td><strong>DURATION</strong></td>
                <td>
                    <?= $latestOperation->TOTAL_TIME ?>
                </td>
            </tr>
            <tr>
                <td><strong>RESULT</strong></td>
                <td>
                    <?= $this->DeployResults->prettyUpResult(h($latestOperation->DEPLOY_RESULT)) ?>
                </td>
            </tr>
            </table>
            <span class="pull-left">
                <?= $this->Html->link(__('View Details'), ['controller' => 'Operations', 'action' => 'view', $latestOperation->ID]) ?>
          </span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

     <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-play-circle fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($changeImpactsCount) ?></div>
                        <div>Changes</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
            <table class="table table-hover table-condensed">
            <tr>
                <td colspan="2" style="text-align:center;"><strong>LATEST</strong></td>
            </tr>
            <tr>
                <td><strong>DESC</strong></td>
                <td><?= $latestChangeImpact->CHANGE_DESCRIPTION ?></td>
            </tr>
            </table>
            <span class="pull-left">
                <?php
                    echo $this->Html->link(__('View Details'), ['controller' => 'Dashboards','action' => 'deploymentsAll'],
                ['class' => '']);
        ?></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-th fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($tableModCount) ?></div>
                        <div>Table Modifications</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
            <table class="table table-hover table-condensed">
            <tr>
                <td colspan="2" style="text-align:center;"><strong>LATEST</strong></td>
            </tr>
            <tr>
                <td><strong>TABLE</strong></td>
                <td><?= $latestTableMod->TABLE_NAME ?></td>
            </tr>
            </table>
            <span class="pull-left">
                <?php
                    echo $this->Html->link(__('View Details'), ['controller' => 'Dashboards','action' => 'deploymentsAll'],
                ['class' => '']);
        ?></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
  </div>

<div class="row">

  <div class="col-lg-4 col-md-6">
      <div class="panel panel-red">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-check fa-3x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                      <div class="huge"><?= h($operationCount) ?></div>
                      <div>Rule Messages</div>
                  </div>
              </div>
          </div>
          <div class="panel-footer">
          <table class="table table-hover table-condensed">
          <tr>
              <td colspan="2" style="text-align:center;"><strong>LATEST</strong></td>
          </tr>
          <tr>
              <td><strong>Message</strong></td>
              <td>Rule says bad.</td>
          </tr>
          </table>
          <span class="pull-left">
              <?= $this->Html->link(__('View Details'), ['controller' => 'Operations', 'action' => 'view', $latestOperation->ID]) ?>
        </span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
          </div>
      </div>
  </div>

</div>

</div>
