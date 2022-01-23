<?php

// phpinfo();die;
ini_set('display_errors', 1);
error_reporting(-1);


define('ROOT', dirname(__DIR__));   //  /var/www/v2.pasportfasada.ru
// dd(ROOT);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require ROOT.'/vendor/autoload.php';
require ROOT.'/config/helpers.php';
require ROOT.'/config/db.php';
require ROOT.'/config/router.php';