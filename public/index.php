<?php

define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . '/../app');
define('CONFIG_PATH', ROOT_PATH . '/../config');
define('CONTROLLER_PATH', ROOT_PATH . '/../app/controller');
define('VENDOR_PATH', ROOT_PATH . '/../vendor');
define('APF_PATH', ROOT_PATH . '/../../apf');
define('LOG_PATH', '/var/log');
define('APP_NAME', 'devinjin.top');
define('PAGE_PATH', ROOT_PATH . '/../page');

require_once VENDOR_PATH . '/autoload.php';
$app = require_once APF_PATH . '/bootstrap/app.php';
$app->run();