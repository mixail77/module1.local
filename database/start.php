<?php

$arConfig = include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/database/Connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/database/QueryBuilder.php';

return new QueryBuilder(Connection::make($arConfig));

?>