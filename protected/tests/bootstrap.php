<?php

// change the following paths if necessary
$yiit='D:\FRAMEWORK\yii-1.1.13.e9e4a0\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
