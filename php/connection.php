<?php

$endservidor = "";
$username = "root";
$password = "";

$db = new mysqli($endservidor, $username, $password, "yugiho");
if ($db->connect_error) {
    die("Connection error:" . $db->connect_error);
}