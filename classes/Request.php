<?php

namespace Classes;

class Request
{

    private $arServer;
    private $arPost;
    private $arQuery;
    private $postValue;
    private $queryValue;

    /**
     * В конструкторе устанавливаем значения суперглобальных массивов
     * Основная мысль - стараемся не работать с суперглобальными массивами на прямую
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
     * Возвращает безопасное значение из POST массива по ключу
     * @param $key
     * @return string
     */
    public function getPost($key)
    {

        $this->postValue = trim(strip_tags($this->arPost[$key]));

        return $this->postValue;

    }

    /**
     * Возвращает безопасное значение из GET массива по ключу
     * @param $key
     * @return string
     */
    public function getQuery($key)
    {

        $this->queryValue = trim(strip_tags($this->arQuery[$key]));

        return $this->queryValue;

    }

}
