<?php

use Classes\Validator;
use Classes\QueryBuilder;
use Classes\Flash;

$request = new Validator();

$id = (int)$request->getQuery('id');

if ($id) {

    //Удаляем товар
    $db = new QueryBuilder();
    $db->delete('products', $id);

} else {

    Flash::setMessage('Не удалось удалить товар!');

}

//Редирект на список товаров
header('Location: /');
