<?php

include 'include/functions.php';
$db = include 'database/start.php';

$arProducts = $db->getAll();

include 'index.view.php';

?>
