<?php

//Удаляет товар
$db = new QueryBuilder();
$db->delete('products', (int)$_GET['id']);

//Редирект на список товаров
header('Location: /');

?>
