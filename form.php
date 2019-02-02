<?php
require_once 'fun.php';

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_base = 'users';
$db_table = "myusers";

$your_name = htmlspecialchars($_POST["name"]);
$surname = htmlspecialchars($_POST["surname"]);
$years = htmlspecialchars($_POST["years"]);
$genus = htmlspecialchars($_POST["genus"]);
$username = htmlspecialchars($_POST["username"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$repassword = htmlspecialchars($_POST["repassword"]);

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (name,surname,years,username,genus,email,password,repassword) VALUES ('$your_name','$surname','$years', '$username','$genus','$email','$password','$repassword')");

if ($result == true) {
    echo "Информация занесена в базу данных";
} else {
    echo "Информация не занесена в базу данных";
}
