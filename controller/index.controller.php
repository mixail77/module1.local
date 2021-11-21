<?php

use Classes\QueryBuilder;

//Получаем товары
$db = new QueryBuilder();
$arProducts = $db->getAll('products');

include $_SERVER['DOCUMENT_ROOT'] . '/view/index.view.php';
