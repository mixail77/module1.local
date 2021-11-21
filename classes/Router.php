<?php

namespace Classes;

class Router
{

    private $rout;
    private $arRoutes;

    /**
     * В конструкторе получаем массив описывающий существующую маршрутизацию
     * Устанавливаем значение текущего REQUEST_URI без параметров
     */
    public function __construct()
    {

        $arConfig = self::getConfig();

        if (!empty($arConfig)) {

            $this->rout = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $this->arRoutes = $arConfig;

        }

    }

    /**
     * Подключает контроллер для текущего REQUEST_URI
     * Если контроллер не найден, подключается контроллер ошибки 404
     */
    public function getController()
    {

        if (array_key_exists($this->rout, $this->arRoutes)) {

            include $_SERVER['DOCUMENT_ROOT'] . $this->arRoutes[$this->rout];
            exit();

        }

        include $_SERVER['DOCUMENT_ROOT'] . '/controller/404.controller.php';

    }

    /**
     * Получает настройки маршрутизации из конфигурационного файла
     * @return false|mixed
     */
    public static function getConfig()
    {

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/config/routes.php')) {
            return false;
        }

        return include $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php';

    }

}
