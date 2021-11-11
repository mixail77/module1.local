<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {

        $this->pdo = $pdo;

    }

    function getAll()
    {

        //Подготавливаем запрос
        $sql = 'SELECT * FROM `products`';
        $statement = $this->pdo->prepare($sql);

        //Выполняем запрос
        $statement->execute();

        //Получаем результат в виде массива
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>