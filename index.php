<?php

include 'include/functions.php';
$db = include 'database/start.php';

//Получаем товары
$arProducts = $db->getAll('products');

include 'index.view.php';

?>
