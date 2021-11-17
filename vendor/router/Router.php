<?php

class Router
{

    private $rout;
    private $arRoutes;

    public function __construct()
    {

        $arConfig = self::getConfig();

        if (!empty($arConfig)) {

            $this->rout = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->arRoutes = $arConfig;

        }

    }

    public function getRout()
    {

        return $this->rout;

    }

    public function getController()
    {

        if (array_key_exists($this->rout, $this->arRoutes)) {

            include $_SERVER['DOCUMENT_ROOT'] . $this->arRoutes[$this->rout];
            exit();

        }

        include $_SERVER['DOCUMENT_ROOT'] . '/controller/404.controller.php';

    }

    public static function getConfig()
    {

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/config/routes.php')) {
            return false;
        }

        return include $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';

    }

}
