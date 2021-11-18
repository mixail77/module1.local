<?php

header('HTTP/1.0 404 Not Found');

Flash::setMessage('Ошибка404!');

include $_SERVER['DOCUMENT_ROOT'] . '/view/404.view.php';
