<!-- File: src/Template/Dashboards/overview.ctp -->

<div class="col-md-8 main">
  <h2 class="page-header"><i class="fa fa-fw fa-dashboard"></i>Dashboard <small>Deployments Overview</small></h2>
  
  <div class="row">
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

            <?php if (!($latestMessages->isEmpty())) { ?>
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
                <td><?= $this->Html->link(h($this->DeployResults->getChangeImpact_ChangeID(h($latestMessage->FK_CHANGEIMPACT_ID))), ['controller' => 'Operations', 'action' => 'view', $this->DeployResults->getChangeImpact_ChangeIDID(h($latestMessage->FK_CHANGEIMPACT_ID))]) ?>
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
            <?php } else { ?>
                
            <?php } ?>

        </div>
    </div>

  </div>

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
                <td><?= $latestOperation->PROJECT_NAME ?></td>
            </tr>
            <tr>
                <td><strong>ENVIRONMENT</strong></td>
                <td><?= $latestOperation->STEP ?><td>
            </tr>
            <tr>
                <td><strong>TIME</strong></td>
                <td><?= $latestOperation->STARTTIME ?></td>
            </tr>
            <tr>
                <td><strong>DURATION</strong></td>
                <td><?= $latestOperation->TOTALTIME ?></td>
            </tr>
            <tr>
                <td><strong>RESULT</strong></td>
                <td><?= $this->DeployResults->prettyUpResult(h($latestOperation->DEPLOY_RESULT)) ?></td>
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
                <td><?= $latestTableMod->TABLENAME ?></td>
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
</div>
 
<!-- Environment -->

<div class="col-md-2">
    <br/>
    <h4 class="page-header"><?= __('Environmentals') ?></h4>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-folder fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($projectCount) ?></div>
                        <div>Projects</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-database fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($databaseCount) ?></div>
                        <div>Databases</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-server fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($serverCount) ?></div>
                        <div>Servers</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-desktop fa-4x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($clientCount) ?></div>
                        <div>Clients</div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    </div>
  </div>