<?php

use Classes\Flash;
use Classes\Request;
use Classes\Validator;
use Classes\QueryBuilder;

$request = new Request();
$validator = new Validator();

$id = (int)$request->getQuery('id');

if ($validator->isNotEmpty($id)) {

    //Удаляем товар
    $db = new QueryBuilder();
    $db->delete('products', $id);

} else {

    Flash::setMessage('Не удалось удалить товар!');

}

//Редирект на список товаров
header('Location: /');
