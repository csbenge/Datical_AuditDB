<div class="col-md-8 main">
  <h2 class="page-header"><i class="fa fa-fw fa-folder"></i>Project <small><?= h($project->PROJECT_UUID) ?></small></h2>

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
</div>
