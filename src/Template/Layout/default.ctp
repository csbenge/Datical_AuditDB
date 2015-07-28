<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Datical';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('foundation-forms.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('sb-admin.css') ?>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</style>
</head>
<body>

  <div id="wrapper">

      <!-- Navigation -->

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
             <a class="navbar-brand" href="#"> <img src="/img/Datical_CMYK_RVS-medium.png" height="24" width="153" alt="Datical" /></a>
          </div>

          <!-- Top Menu Items -->

          <?php if ($authUser) { ?>
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $authUserEmail ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= $this->Html->link(__('Logout'), ['controller' => 'Users','action' => 'logout']); ?>
                        </li>
                    </ul>
                </li>
            </ul>
          <?php } ?>

          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-dashboard"></i> Dashboards <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                          <li>
                              <?= $this->Html->link(__('Overview'), ['controller' => 'dashboards', 'action' => 'overview']) ?>
                          </li>
                          <li><?= $this->Html->link(__('Databases All'), ['controller' => 'Dashboards','action' => 'databasesAll']) ?></li>
                      </ul>
                  </li>

                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-power-off"></i> Deployments <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo2" class="collapse">
                          <li><?= $this->Html->link(__('All'), ['controller' => 'Dashboards','action' => 'deploymentsAll']) ?></li>
                          <li><?= $this->Html->link(__('Passed'), ['controller' => 'Dashboards','action' => 'deploymentsPassed']) ?></li>
                          <li><?=  $this->Html->link(__('Failed'), ['controller' => 'Dashboards','action' => 'deploymentsFailed']) ?></li>
                      </ul>
                  </li>

                  <li> 
                    <a href="/operations/tables"><i class="fa fa-fw fa-table"></i> Tables</a></li>
                      
                  </li>
                  <li>
                      <a href="/users"><i class="fa fa-fw fa-user"></i> Users</a>
                  </li>
                
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>

      <div class="mainbody" id="page-wrapper">

          <div class="container-fluid">
            <div id="content">
            <?= $this->Flash->render() ?>
            <?= $this->Flash->render('auth') ?>
      </div>

      <?= $this->fetch('content') ?>
  </div>
</body>
