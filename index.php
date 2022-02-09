<?php

session_start();
session_destroy();



?>
<!doctype html>
<html lang="en">

<head>
  <title>Yu-gi-oh Master Duel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .dark {
      background-color: #222;
      color: #e6e6e6;
    }

    .white {
      color: #fff;
    }
  </style>
</head>

<body class="darkmode">
  <!-- Nav tabs -->
 
    <div class="container d-flex justify-content-center">
      <h1>Choose</h1>
    </div>
      <div class="row">

       <div class="col-sm-6 d-flex justify-content-center"style="border: solid black 2px;float:left">
      
          <form method="post" action="php/register.php" >
          <h2>Register</h2>
            <label for="fname">username:</label><br>
            <input type="text" id="fname" name="username"><br>
            <label for="fname">Email:</label><br>
            <input type="email" id="fname" name="email"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="password"><br><br>
            <input type="submit" value="create account">
          </form>
          </div>
          <div class="col-sm-6 d-flex justify-content-center" style="border: solid black 2px;float:right">


          <form method="post" action="php/login.php">
          <h2>Login</h2>
            <label for="fname">username:</label><br>
            <input type="text" id="fname" name="lusername"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="lpassword"><br><br>
            <input type="submit" value="Login">
          </form>
          </div>
      </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>