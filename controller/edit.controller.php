<?php

use Classes\Flash;
use Classes\Request;
use Classes\Validator;
use Classes\QueryBuilder;

$request = new Request();
$validator = new Validator();

$id = (int)$request->getQuery('id');

if ($request->isPost()) {

    $title = $request->getPost('title');
    $price = $request->getPost('price');

    if ($validator->isNotEmpty([$id, $title]) && $validator->isNumeric($price)) {

        //Обновляет товар
        $db = new QueryBuilder();
        $db->update('products', [
            'ID' => $id,
            'TITLE' => $title,
            'PRICE' => $price,
        ]);

        //Редирект на список товаров
        header('Location: /');

    } else {

        Flash::setMessage('Неверно заполнены поля товара!');

    }

} else {

    if ($validator->isNotEmpty($id)) {

        //Получаем товар
        $db = new QueryBuilder();
        $arProduct = $db->getById('products', $id);

    } else {

        Flash::setMessage('Товар не найден!');

    }

}

include $_SERVER['DOCUMENT_ROOT'] . '/view/edit.view.php';
