<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Добавление товара</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">

                <form action="/handler/create.php" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Название товара</label>
                        <input type="text" name="title" class="form-control" id="title" value="">
                    </div>
                    <button type="submit" class="btn btn-success">Добавить</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>