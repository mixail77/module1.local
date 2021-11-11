<?php

class Connection
{

    public static function make()
    {

        //Подключаемся к базе
        return new PDO('mysql:host=localhost;dbname=module1;charset=utf8', 'admin', 'root');

    }

}

?>