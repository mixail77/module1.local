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

        //Возвращаем результат в виде массива
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function create($table, $arFields)
    {

        $key = implode(',', array_keys($arFields));
        $value = ':' . implode(',:', array_keys($arFields));

        $sql = "INSERT INTO {$table} ({$key}) VALUE ({$value})";

        //Подготавливаем запрос
        $statement = $this->pdo->prepare($sql);

        //Выполняем запрос
        $statement->execute($arFields);

        //Возвращаем результат в виде ID добавленной записи
        return $this->pdo->lastInsertId();

    }

    public function getOne($table, $id)
    {

        $sql = "SELECT * FROM {$table} WHERE id=:id";

        //Подготавливаем запрос
        $statement = $this->pdo->prepare($sql);

        //$statement->bindParam(':id', $id);
        $statement->bindValue(':id', $id);

        //Выполняем запрос
        $statement->execute();

        //Возвращаем результат в виде массива
        return $statement->fetch(PDO::FETCH_ASSOC);

    }

}

?>