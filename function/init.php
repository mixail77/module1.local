<?php
session_start();
if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/vendor/database/QueryBuilder.php')) {
    require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/database/QueryBuilder.php');
}
if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/vendor/flash/Flash.php')) {
    require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/flash/Flash.php');
}
if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/vendor/router/Router.php')) {
    require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/router/Router.php');
}
if (file_exists($_SERVER["DOCUMENT_ROOT"] . '/vendor/validator/Validator.php')) {
    require_once($_SERVER["DOCUMENT_ROOT"] . '/vendor/validator/Validator.php');
}
