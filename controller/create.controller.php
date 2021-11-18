<?php

$request = new Validator();

if ($request->isPost()) {

    $title = $request->getPost('title');
    $price = $request->getPost('price');

    if ($title && is_numeric($price)) {

        //Добавляем новый товар
        $db = new QueryBuilder();
        $db->create('products', [
            'TITLE' => $title,
            'PRICE' => $price,
        ]);

        //Редирект на список товаров
        header('Location: /');

    } else {

        Flash::setMessage('Неверно заполнены поля товара!');

    }

}

include $_SERVER['DOCUMENT_ROOT'] . '/view/create.view.php';

