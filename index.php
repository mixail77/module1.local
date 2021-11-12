<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/init.php';
$db = include $_SERVER['DOCUMENT_ROOT'] . '/database/start.php';

//Получаем товары
$arProducts = $db->getAll('products');

include $_SERVER['DOCUMENT_ROOT'] . '/view/index.view.php';

?>
