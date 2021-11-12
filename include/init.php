<?php

//Распечатывает массив
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

?>