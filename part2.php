<?php

function dispaBlock()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "homesql";
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

    $sql = "SELECT * FROM block WHERE theme = 'bartik' AND module ='system'";

    $stmt = $db->query($sql);
    $block = $stmt->fetchAll();

    foreach ($block as $row) {
        echo $row['module'] . ' ' . $row['theme'] . '<br>';
    }
}

function dispaNode()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "homesql";
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

    $sql = "SELECT * FROM node WHERE type = 'delivery' AND title LIKE '8046%' AND MONTH(FROM_UNIXTIME(created)) = 10";

    $stmt = $db->query($sql);
    $node = $stmt->fetchAll();

    foreach ($node as $row) {
        echo $row['type'] . '    ' . $row['title'] . '   ' . date('Y-m-d', $row['created']) . '<br>';
    }
}

function dispaUserNode()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "homesql";
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

    $sql = "SELECT p2.name as user_name, p2.mail as mail, p1.* FROM node as p1 JOIN users as p2 ON p1.uid = p2.uid AND p2.name = 'serhiy' LIMIT 0, 20";

    $stmt = $db->query($sql);
    $node = $stmt->fetchAll();

    foreach ($node as $row) {
        echo $row['user_name'] . '  ' . $row['mail'] .  '<br>';
    }
}

function dispaVariable()
{
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "homesql";
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

    $sql = "SELECT * FROM variable WHERE name LIKE 'cache_%' ";
    $stmt = $db->query($sql);
    $variable = $stmt->fetchAll();

    foreach ($variable as $row) {
        echo $row['name'] . '<br>';

    }

}
