<!-- File: src/Template/Dashboards/overview.ctp -->

<div class="col-md-8 main">
  <h2 class="page-header"><i class="fa fa-fw fa-dashboard"></i>Dashboard <small>Deployments</small></h2>

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
            <div class="panel-footer">
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
                        <div><strong>Deployments</strong></div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
              <span class="pull-left">
                <?= $this->Html->link(__('View Details'), ['controller' => 'Dashboards','action' => 'deploymentsAll']) ?>
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
                        <div><strong>Changes</strong></div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
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
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-th fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($tableModCount) ?></div>
                        <div><strong>Table Modifications</strong></div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
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
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?= h($ruleRespsCount) ?></div>
                        <div><strong>Rule Responses</strong></div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
            <span class="pull-left">
              <?php
                  echo $this->Html->link(__('View Details'), ['controller' => 'RuleResps','action' => 'index'],
                  ['class' => '']);
              ?>
            </span>
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
            <div class="panel-footer">
            <span class="pull-left">
              <?php
                  echo $this->Html->link(__('View Details'), ['controller' => 'Projects','action' => 'index'],
                  ['class' => '']);
              ?>
            </span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
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
            <div class="panel-footer">
            <span class="pull-left">
              <?php
                  echo $this->Html->link(__('View Details'), ['controller' => 'Dashboards','action' => 'databasesAll'],
                  ['class' => '']);
              ?>
            </span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
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
