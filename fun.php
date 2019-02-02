<?php
require_once 'form.php'; // подключаем скрипт
require_once 'index.php';
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "users";
$db = mysqli_connect($dbHost, $dbUser, $dbPass) or die("Ошибка подключения!");



?>