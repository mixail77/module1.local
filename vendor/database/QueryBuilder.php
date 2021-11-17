<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct()
    {

        $arConfig = self::getConfig();

        if (!empty($arConfig)) {

            $this->pdo = new PDO("mysql:host={$arConfig['DATABASE']['HOST']};dbname={$arConfig['DATABASE']['NAME']};charset={$arConfig['DATABASE']['CHARSET']}",
                $arConfig['DATABASE']['USER'],
                $arConfig['DATABASE']['PASSWORD']
            );

        }

    }

    public function getAll($table)
    {

        if (empty($table)) {
            return false;
        }

        //Подготавливаем запрос
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);

        //Выполняем запрос
        $statement->execute();

        //Возвращаем результат в виде массива
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getById($table, $id)
    {

        if (empty($table) || empty($id)) {
            return false;
        }

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

    public function create($table, $arFields)
    {

        if (empty($table) || !is_array($arFields)) {
            return false;
        }

        //Формируем запрос
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

    public function update($table, $arFields)
    {

        if (empty($table) || !is_array($arFields)) {
            return false;
        }

        //Формируем запрос
        $arKeys = array_keys($arFields);

        $setStr = '';
        foreach ($arKeys as $key) {

            if ($key == 'ID') {
                continue;
            }

            $setStr .= $key . '=:' . $key . ',';

        }
        $setStr = rtrim($setStr, ',');

        $sql = "UPDATE {$table} SET {$setStr} WHERE ID=:ID";

        //Подготавливаем запрос
        $statement = $this->pdo->prepare($sql);

        //Выполняем запрос
        $statement->execute($arFields);

        //Возвращаем количество строк, затронутых последним запросом
        return $statement->rowCount();

    }

    public function delete($table, $id)
    {

        if (empty($table) || empty($id)) {
            return false;
        }

        $sql = "DELETE FROM {$table} WHERE id=:id";

        //Подготавливаем запрос
        $statement = $this->pdo->prepare($sql);

        //$statement->bindParam(':id', $id);
        $statement->bindValue(':id', $id);

        //Выполняем запрос
        $statement->execute();

        //Возвращаем количество строк, затронутых последним запросом
        return $statement->rowCount();

    }

    public static function getConfig()
    {

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/config/database.php')) {
            return false;
        }

        return include $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';

    }

}
