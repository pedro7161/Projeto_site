<?php
require("connection.php");
$username=$_POST["username"];
$email=$_POST["email"];
$password)$_POST["password"];
$adicionar = $db->prepare("INSERT INTO account(username,email,pass) VALUES(?,?,?)");

$adicionar->bind_param("sss", $username,$email,$pass);
$adicionar->execute();
header("Location: ../index.html" );