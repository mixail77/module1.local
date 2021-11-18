<?php

class Flash
{

    /**
     * Добавляет новое сообщение в сессию
     * @param $message
     */
    public static function setMessage($message)
    {

        $_SESSION['MESSAGE'][] = $message;

    }

    /**
     * Выводит все сообщения с подключением отдельного шаблона (чтобы в коде не было лишних условий и верстки)
     * После вывода сообщений, удаляет все сообщения (чтобы при обновлении страницы не было неактуальных сообщений так как они хранятся в сессии)
     */
    public static function showMessage()
    {

        if (is_array($_SESSION['MESSAGE'])) {

            $message = 'Сообщение: ' . implode(', ', $_SESSION['MESSAGE']);

            include $_SERVER['DOCUMENT_ROOT'] . '/view/message.view.php';

        }

        self::clearAllMessage();

    }

    /**
     * Удаляет все сообщения из сессии
     */
    public static function clearAllMessage()
    {

        unset($_SESSION['MESSAGE']);

    }

}
