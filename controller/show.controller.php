<?php

use Classes\Flash;
use Classes\Request;
use Classes\Validator;
use Classes\QueryBuilder;

$request = new Request();
$validator = new Validator();

$id = (int)$request->getQuery('id');

if ($validator->isNotEmpty($id)) {

    //Получаем товар
    $db = new QueryBuilder();
    $arProduct = $db->getById('products', $id);

} else {

    Flash::setMessage('Товар не найден!');

}

include $_SERVER['DOCUMENT_ROOT'] . '/view/show.view.php';
