<?php
require("connection.php");
$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["password"];
$adicionar = $db->prepare("INSERT INTO accounts(username,email,pass) VALUES(?,?,?)");

$adicionar->bind_param("sss", $username,$email,$pass);
$adicionar->execute();
header("Location: ../index.php" );

