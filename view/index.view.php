<?php

use Classes\Flash;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Каталог товаров</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Каталог товаров</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">

                <?= Flash::showMessage() ?>

                <a href="/create.php" class="btn btn-success">Добавить товар</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Наименование</th>
                            <th scope="col">Управление</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($arProducts as $product): ?>
                            <tr>
                                <th scope="row"><?= $product['ID'] ?></th>
                                <td><a href="show.php?id=<?= $product['ID'] ?>"><?= $product['TITLE'] ?></a> - <?= $product['PRICE'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $product['ID'] ?>" class="btn btn-warning">Редактировать</a>
                                    <a href="delete.php?id=<?= $product['ID'] ?>" class="btn btn-danger">Удалить</a>
                                </td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
</html>
