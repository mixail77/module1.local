<?php

use Classes\Flash;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Редактирование товара</title>
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

                <form action="/edit.php?id=<?= $id ?>" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Название товара</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= ($request->isPost()) ? $title : $arProduct['TITLE'] ?>">
                        <label for="price" class="form-label">Стоимость товара</label>
                        <input type="text" name="price" class="form-control" id="price" value="<?= ($request->isPost()) ? $price : $arProduct['PRICE'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Редактировать</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
