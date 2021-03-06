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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base2.css') ?>
    <?= $this->Html->css('cake2.css') ?>
    <?= $this->Html->css('fullcalendar') ?>
    <?= $this->Html->css(['fullcalendar.print'],['media' => 'print']) ?>
    <?= $this->Html->css('jquery.timepicker') ?>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('moment.min') ?>
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('fullcalendar.min') ?>
    <?= $this->Html->script('ja') ?>
    <?= $this->Html->script('calendar') ?>
    <?= $this->Html->script('jquery.timepicker.min') ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <?= $this->fetch('script') ?>
</head>
<body>
  <nav class="top-bar expanded" data-topbar role="navigation">
      <ul class="title-area large-3 medium-4 columns">
          <li class="name">
              <h1><a href=""><?= $this->fetch('title') ?></a></h1>
          </li>
      </ul>
      <div class="top-bar-section">
          <ul class="right">
              <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
              <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
          </ul>
      </div>
  </nav>
  <?= $this->Flash->render() ?>
  <div class="container clearfix" align="center">
      <?= $this->fetch('content') ?>
  </div>
  <footer>
  </footer>
</body>
</html>
