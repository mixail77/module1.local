<?php

use Classes\Router;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/function/init.php')) {
    require_once($_SERVER["DOCUMENT_ROOT"] . '/function/init.php');
}

$rout = new Router();
$rout->getController();
