<?php

define('ROOT_PATH', __DIR__);
define('CONFIG_PATH', ROOT_PATH . '/../config');
define('APP_PATH', ROOT_PATH . '/../app');
define('VENDOR_PATH', ROOT_PATH . '/../vendor');
define('APF_PATH', ROOT_PATH . '/../../apf');
define('LOG_PATH', '/var/log');
define('APP_NAME', 'devinjin.top');
define('PAGE_PATH', ROOT_PATH . '/../page');
define('CONTROLLER_PATH', APP_PATH . '/controller');
define('MIDDLEWARE_PATH', APP_PATH . '/middleware');

require_once VENDOR_PATH . '/autoload.php';
$app = require_once APF_PATH . '/bootstrap/app.php';
$app->run();