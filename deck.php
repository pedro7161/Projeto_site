<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <?php
require("php/connection.php");
include("php/session.php");
$a = $_GET["name"];
$user = $_SESSION['username'];
$sql = "SELECT allcards.name,allcards.effect,allcards.type FROM allcards INNER JOIN decks where decks.id_player=$user and allcards.id_deck=decks.id;";
echo("<h1>".$a."</h1>");
echo("");
//runs the query and prints the result
$result = mysqli_query($db, $sql);
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
    echo "<tr>";

    for ($i = 0; $i < $result->field_count; $i++) {
      echo "<td style='width:200px'id='td". $i ."'>" . $row[$i] . "</td>";
    }

    echo "</tr>";
  }
  echo "</table>";
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>