<?php
require("connection.php");
include("session.php");
$user = $_SESSION['username'];
$deckn=$_POST["deckn"];
$cardn=$_POST["cardn"];
$typen=$_POST["typen"];
$effectn=$_POST["effectn"];

$check= $db->prepare("SELECT name from decks where name=?");
$check->bind_param("s",$deckn);
$check->execute();
$check->bind_result($namee);
$check->fetch();

if(!empty($namee)){
    echo("aa");
    require("connection.php");
    $check2= $db->prepare("SELECT id from decks where name=?");
    $check2->bind_param("s",$deckn);
    $check2->execute();
    $check2->bind_result($nameid);
    $check2->fetch();
    require("connection.php");
    $adicionar = $db->prepare("INSERT INTO allcards(id_deck,name,type,effect) VALUES(?,?,?,?)");
    $adicionar->bind_param("isss",$nameid,$cardn,$typen,$effectn);
    $adicionar->execute();
    header("location: ../deckcreator.php");

}else{
    
    require("connection.php");

    $adicionar = $db->prepare("INSERT INTO decks(id_player,name) VALUES(?,?)");
    $adicionar->bind_param("is",$user,$deckn);
    $adicionar->execute();

    require("connection.php");
    $check= $db->prepare("SELECT id from decks where name=?");
    $check->bind_param("s",$deckn);
    $check->execute();
    $check->bind_result($nameid);
    $check->fetch();
    require("connection.php");
    $adicionar = $db->prepare("INSERT INTO allcards(id_deck,name,type,effect) VALUES(?,?,?,?)");

    $adicionar->bind_param("isss",$nameid,$cardn,$typen,$effectn);
    $adicionar->execute();
    header("location: ../deckcreator.php");
}


// header("Location: ../deckcreator.php" );