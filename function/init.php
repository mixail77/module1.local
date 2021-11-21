<?php
session_start();

spl_autoload_register(static function ($class) {

    $class = str_replace('\\', '/', $class);

    require_once($_SERVER["DOCUMENT_ROOT"] . '/' . $class . '.php');

});
