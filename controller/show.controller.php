<?php

$request = new Validator();

$id = (int)$request->getQuery('id');

if ($id) {

    //Получаем товар
    $db = new QueryBuilder();
    $arProduct = $db->getById('products', $id);

} else {

    Flash::setMessage('Товар не найден!');

}

include $_SERVER['DOCUMENT_ROOT'] . '/view/show.view.php';
