<?php

include 'functions.php';
include 'database/QueryBuilder.php';

$pdo = connectToDB();

$db = new QueryBuilder($pdo);
$arProducts = $db->getAll();

include 'index.view.php';

?>

