<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/init.php';
$db = include $_SERVER['DOCUMENT_ROOT'] . '/database/start.php';

//Получаем товар
$arProduct = $db->getOne('products', (int)$_GET['id']);

include $_SERVER['DOCUMENT_ROOT'] . '/view/edit.view.php';

?>
