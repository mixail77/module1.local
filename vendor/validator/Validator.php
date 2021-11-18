<?php

class Validator
{

    private $arServer;
    private $arPost;
    private $arQuery;
    private $postValue;
    private $queryValue;

    /**
     * В конструкторе устанавливаем значения суперглобальных массивов
     * Основная мысль - стараемся не работать с суперглобальных массивами на прямую
     */
    public function __construct()
    {

        $this->arServer = $_SERVER;
        $this->arPost = $_POST;
        $this->arQuery = $_GET;

    }

    /**
     * Проверяет, отправлен ли запрос методом POST
     * @return bool
     */
    public function isPost()
    {

        if ($this->arServer['REQUEST_METHOD'] == 'POST') {

            return true;

        }

        return false;

    }

    /**
     * Проверяет и возвращает значение из POST массива по ключу
     * @param $key
     * @return false|string
     */
    public function getPost($key)
    {

        $this->postValue = trim(strip_tags($this->arPost[$key]));

        if (!empty($this->postValue)) {

            return $this->postValue;

        }

        return false;

    }

    /**
     * Проверяет и возвращает значение из GET массива по ключу
     * @param $key
     * @return false|string
     */
    public function getQuery($key)
    {

        $this->queryValue = trim(strip_tags($this->arQuery[$key]));

        if (!empty($this->queryValue)) {

            return $this->queryValue;

        }

        return false;

    }

}
