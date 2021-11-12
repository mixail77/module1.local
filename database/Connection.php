<?php

class Connection
{

    public static function make($arConfig)
    {

        //Подключение к базе
        return new PDO("mysql:host={$arConfig['DATABASE']['HOST']};dbname={$arConfig['DATABASE']['NAME']};charset={$arConfig['DATABASE']['CHARSET']}",
            $arConfig['DATABASE']['USER'],
            $arConfig['DATABASE']['PASSWORD']
        );

    }

}

?>