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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<header class="navbar navbar-static-top bs-docs-nav " id="top" role="banner">
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#">
        <img src="/img/Datical_CMYK_RVS-medium.png" height="22" width="153" alt="Datical" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <?php
              if ($authUser)
              {
                echo "<li>", $this->Html->link(__('Operations'), ['controller' => 'Operations','action' => 'index']), "</li>";
              }
            ?>
            <?php
              if ($authUserRole == "Admin") 
              {
                echo "<li>", $this->Html->link(__('Users'), ['controller' => 'Users','action' => 'index']), "</li>";
              }
            ?>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         <?php
            if ($authUser)
            {
              echo "<li>", $this->Html->link(__('Logout'), ['controller' => 'Users','action' => 'logout']), "</li>";
              echo "<li>", " ", $this->Html->link($authUserEmail, ['controller' => 'Users','action' => 'view', $authUserID]), "</li>";
            }
          ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>


    <div class="container-fluid">
    
        <div id="content">
          <?= $this->Flash->render() ?>
          <?= $this->Flash->render('auth') ?>
        </div>

        <?= $this->fetch('content') ?>

    </div>

        <footer>
        </footer>
        
</body>
</html>