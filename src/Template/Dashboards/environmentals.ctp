<!-- File: src/Template/Dashboards/environmentals.ctp -->
 
<!-- Environment -->

<div class="col-md-10">
  <h2 class="page-header"><i class="fa fa-fw fa-dashboard"></i>Dashboard <small>Environmentals</small></h2>
    <div class="col-md-3">
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
                <table class="table table-hover table-condensed">
                <thead>
                    <th>Project</th>
                    <th>Last Deploy</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($projectList as $project): ?>
                <tr>
                    <td><?= $project->PROJECT_NAME ?></td>
                    <td><?= $project->STARTTIME ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="col-md-3">
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
                <table class="table table-hover table-condensed">
                <thead>
                    <th>Database</th>
                    <th>Last Deploy</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($databaseList as $database): ?>
                <tr>
                    <td><?= $database->DBNAME ?></td>
                    <td><?= $database->LAST_DEPLOY ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="col-md-3">
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
            <div class="panel-footer">
                <table class="table table-hover table-condensed">
                <thead>
                    <th>Server</th>
                    <th>Service Name</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($serverList as $server): ?>
                <tr>
                    <td><?= $server->HOST ?></td>
                    <td><?= $server->SERVICE_NAME ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="col-md-3">
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
            <div class="panel-footer">
                <table class="table table-hover table-condensed">
                <thead>
                    <th>Client</th>
                    <th>User</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clientList as $client): ?>
                <tr>
                    <td><?= $client->CLIENT_HOSTNAME ?></td>
                    <td><?= $client->CLIENT_USER ?></td>
                    <td><?= $client->CLIENT_TYPE?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
        </div>
    
    </div>
    </div>
  </div>