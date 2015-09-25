<?php
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);

$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../../../../autoload.php');
require_once(__DIR__ . '/../../../../yiisoft/yii2/Yii.php');
require_once(__DIR__ . '/TestCase.php');

Yii::setAlias('@tests', __DIR__);
Yii::setAlias('@vendor', __DIR__.'/../../../../');