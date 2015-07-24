<!-- File: src/Template/Dashboards/overview.ctp -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 ">
        <?php echo $this->element('sidebar-dashboards'); ?>
    </div>

    <div class="col-md-8 main">
      <h2 class="page-header"><?= __('Dashboard: Overview') ?></h2>
      
      <div class="row">
        <div class="col-md-10">
            <div class="panel panel-danger">
            <div class="panel-heading text-center">
                <?php 
                    echo $this->Html->link(__('Messages'), ['controller' => 'Messages','action' => 'index'], 
                        ['class' => 'ppanel-heading-danger ptext-heading-danger']);
                ?>
            </div>

            <div class="panel-body">
                <table class="table table-hover table-condensed table-stripped">
                <thead>
                <tr>
                    <th><?= __('Level') ?></th>
                    <th><?= __('Time') ?></th>
                    <th><?= __('Text') ?></th>
                </tr>
                </thead>
                <?php foreach ($latestMessages as $latestMessage): ?>
                <tr>
                    <td width="50px"><?= $this->DeployResults->prettyUpMessageLevel(h($latestMessage->MESSAGE_LEVEL)) ?></td>
                    <td width="175px"><?= $latestMessage->MESSAGE_TIME ?></td>
                    <td><?= $latestMessage->TEXT ?></td>
                </tr>
                <?php endforeach; ?>
                </table>
            </div> 
            </div>
        </div>
      </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <?php 
                    echo $this->Html->link(__('Deployments'), ['controller' => 'Dashboards','action' => 'deploymentsAll'], 
                        ['class' => 'ppanel-heading ptext-heading']);
                ?>
            </div>

            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td colspan="2" style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($operationCount) ?></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><strong>LATEST</strong></td>
                </tr>
                <tr>
                    <td><strong>PROJECT NAME</strong></td>
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
            </div> 
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-primary">
            <div class="panel-heading  text-center">
                <?php 
                    echo $this->Html->link(__('Changes'), ['controller' => 'Changeimpacts','action' => 'index'], 
                        ['class' => 'ppanel-heading ptext-heading']);
                ?>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($changeImpactsCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-primary">
            <div class="panel-heading  text-center">
                <?php 
                    echo $this->Html->link(__('Table Mods'), ['controller' => 'Tablemods','action' => 'index'], 
                        ['class' => 'ppanel-heading ptext-heading']);
                ?>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($tableModCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>
        </div>

    </div>
    </div>

<div class="col-md-2">
    <br/>
    <h4 class="page-header"><?= __('Environmentals') ?></h4>
            <div class="panel panel-success">
            <div class="panel-heading  text-center"><strong>Projects</strong></div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($projectCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>


            <div class="panel panel-success">
            <div class="panel-heading text-center"><strong>Databases</strong></div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($databaseCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>

            <div class="panel panel-success">
            <div class="panel-heading text-center"><strong>Schemas</strong></div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($schemaCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>

            <div class="panel panel-success">
            <div class="panel-heading  text-center"><strong>Clients</strong></div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                <tr>
                    <td style="text-align:center;"><?= $this->DeployResults->prettyUpCountBig($clientCount) ?></td>
                </tr>
                </table>
            </div> 
            </div>
    
    </div>
    </div>
  </div>