<?php

class Validator
{

    public $arServer;

    public $arPost;
    public $arQuery;

    public $postValue;
    public $queryValue;

    public function __construct()
    {

        $this->arServer = $_SERVER;
        $this->arPost = $_POST;
        $this->arQuery = $_GET;

    }

    public function isPost()
    {

        if ($this->arServer['REQUEST_METHOD'] == 'POST') {

            return true;

        }

        return false;

    }

    public function getPost($key)
    {

        $this->postValue = trim(strip_tags($this->arPost[$key]));

        if (!empty($this->postValue)) {

            return $this->postValue;

        }

        return false;

    }

    public function getQuery($key)
    {

        $this->queryValue = trim(strip_tags($this->arQuery[$key]));

        if (!empty($this->queryValue)) {

            return $this->queryValue;

        }

        return false;

    }

}
