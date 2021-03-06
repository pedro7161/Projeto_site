<?php
// session_start();
include("php/session.php");
$user = $_SESSION['username'];


?>
<!doctype html>
<html lang="en">

<head>
  <title>Yu-gi-oh Master Duel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .dark ,.dark .table {
      background-color: #222;
      color: #e6e6e6;
    }
    .backimage{
      background-image:url('img/ExodiaMasterDuel.png');
      background-repeat: no-repeat;
      background-size:cover;
    }
 
  </style>
</head>

<body class="darkmode backimage" id="bodyfundo">
  <!-- Nav tabs -->
  <nav class="nav nav-pills flex-column flex-sm-row">
    <button class="flex-sm-fill text-sm-center nav-link active" id="1" onclick="reply_click(this.id)" href="#">Home</button>
    <button class="flex-sm-fill text-sm-center nav-link " id="2" onclick="reply_click()" href="#">Decks</button>
    <button class="flex-sm-fill text-sm-center nav-link" id="3" onclick="reply_click()" href="#">Settings</button>
    <button class="flex-sm-fill text-sm-center nav-link" id="4" onclick="reply_click()" href="#">Sign out</button>
  </nav>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
      <div class="container d-flex justify-content-center" >

 
      </div>
    </div>


    <div class="tab-pane fade" id="tab3Id" role="tabpanel">
      <div class="container">
        <p class="darkmode">dark mode:</p>
        <button class="flex-sm-fill text-sm-center darkmode" onclick="myFunction()" href="#">Switch</button>

      </div>
    </div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel">
      <div class="container d-flex justify-content-center">

        <form method="post" action="php/logout.php">
          <h2>log out</h2>

          <input type="submit" value="logout">
        </form>

      </div>
    </div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel">
      <div class="container">
      
        <h2 class="d-flex justify-content-center"> Your Decks</h2>
        <p>para ver as cartas dentro do deck ?? so clicar no nome</p>
        <?php
        require("php/connection.php");
        $sql = "SELECT name FROM decks  where id_player=$user;";

        //runs the query and prints the result
        $result = mysqli_query($db, $sql);
        $j=0;
        if (!mysqli_query($db, $sql)) {
          die('Error: ' . mysqli_error($db));
        }

        if ($result->num_rows > 0) {
          echo "<table class='table table-sm'id='tbl' border='1' style='object-fit: scale-down;'><tr>";
          $field = $result->fetch_fields();
          // output column names
          foreach ($field as $col) {
            echo "<th>" . $col->name . "</th>";
          }
          echo "</tr>";

          // output data of each row
          while ($row = $result->fetch_row()) {
            echo "<tr onclick='opendeck(this.id)' id='td". $j ."'>";
            $j++;
            for ($i = 0; $i < $result->field_count; $i++) {
              echo "<td style='width:200px' >" . $row[$i] . "</td>";
            }

            echo "</tr>";
          }
          echo "</table>";
        }
        ?>
        <div class="d-flex justify-content-center">
          <form method="post" action="deckcreator.php">
            <button type="submit">create deck</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function myFunction() {
      var element = document.body;

      element.classList.toggle("dark");


    }
  </script>
  <!-- Optional JavaScript -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>