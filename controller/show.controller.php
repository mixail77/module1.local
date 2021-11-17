<?php

//Получаем товар
$db = new QueryBuilder();
$arProduct = $db->getById('products', (int)$_GET['id']);

include $_SERVER['DOCUMENT_ROOT'] . '/view/show.view.php';

?>
