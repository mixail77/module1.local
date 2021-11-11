<?php

include 'include/functions.php';
$db = include 'database/start.php';

//Получаем товары
$arProducts = $db->getAll();

include 'index.view.php';

?>
