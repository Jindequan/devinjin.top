<?php

define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . '/../app');
define('VENDOR_PATH', ROOT_PATH . '/../vendor');
define('APF_PATH', ROOT_PATH . '/../../apf');

require_once VENDOR_PATH . '/autoload.php';
$app = require_once APF_PATH . '/bootstrap/app.php';
$app->run();