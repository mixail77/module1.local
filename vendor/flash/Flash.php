<?php

class Flash
{

    public static function setMessage($message)
    {

        $_SESSION['MESSAGE'][] = $message;

    }

    public static function showMessage()
    {

        if (is_array($_SESSION['MESSAGE'])) {

            $message = 'Сообщение: ' . implode(', ', $_SESSION['MESSAGE']);

            include $_SERVER['DOCUMENT_ROOT'] . '/view/message.view.php';

        }

        self::clearAllMessage();

    }

    public static function clearAllMessage()
    {

        unset($_SESSION['MESSAGE']);

    }

}
