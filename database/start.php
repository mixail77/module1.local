<?php

$arConfig = include 'include/config.php';
include 'database/Connection.php';
include 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($arConfig));

?>