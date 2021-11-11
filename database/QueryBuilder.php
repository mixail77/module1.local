<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {

        $this->pdo = $pdo;

    }

    public function getAll($table)
    {

        //Подготавливаем запрос
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);

        //Выполняем запрос
        $statement->execute();

        //Получаем результат в виде массива
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>