<?php
session_start();
if($_SESSION['username']){
    header("location: ./home.php");
    exit;
}
