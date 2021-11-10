<?php

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function connectToDB()
{

    //Подключаемся к базе
    $pdo = new PDO('mysql:host=localhost;dbname=module1;charset=utf8', 'admin', 'root');

    return $pdo;

}

?>