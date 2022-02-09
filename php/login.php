<?php
session_start();

include("connection.php");
if(!isset($_POST["lusername"]) || !isset($_POST["lpassword"])){
    header("location: ../index.php");
   
    exit;
}
$username = mysqli_real_escape_string($db,$_POST['lusername']);
$pass = mysqli_real_escape_string($db,$_POST['lpassword']);

$query="SELECT id FROM accounts where username='$username' and pass='$pass';";
$result=mysqli_query($db,$query);
$row=mysqli_num_rows($result);
$te = $result->fetch_row();



if($row==1){

    $_SESSION['username']=$te[0];
//   print_r( $_SESSION['username']);
    header("location: ../home.php");
    
}
else{
    // echo($query);
    // echo($row);
    // echo($_POST["lusername"]);
    // echo($_POST["lpassword"]);
    header("location: ../index.php");
    
}