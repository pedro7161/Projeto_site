<?php
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
  <body class="darkmode">
      <!-- Nav tabs -->
      <nav class="nav nav-pills flex-column flex-sm-row">
        <button class="flex-sm-fill text-sm-center nav-link active" id="1"onclick="reply_click()" href="#">Home</button>
        <button class="flex-sm-fill text-sm-center nav-link "id="2" onclick="reply_click()" href="#">Link</button>
        <button class="flex-sm-fill text-sm-center nav-link" id="3" onclick="reply_click()" href="#">Settings</button>
        <button class="flex-sm-fill text-sm-center nav-link"id="4"  onclick="reply_click()" href="#">Sign up</button>
      </nav>
      
      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"><div class="container"><p>a</p></div></div>

          <div class="tab-pane fade" id="tab2Id" role="tabpanel">
          
</div>
<div class="tab-pane fade" id="tab3Id" role="tabpanel">
    <div class="container">
        <p class="darkmode">dark mode:</p>
        <button class="flex-sm-fill text-sm-center darkmode" id="a" onclick="backgroundcolor(this.id)"
            href="#">on</button>
        <button class="flex-sm-fill text-sm-center darkmode active" id="b" onclick="backgroundcolor(this.id)"
            href="#">off</button>
    </div>
</div>
<div class="tab-pane fade" id="tab4Id" role="tabpanel">
    <div class="container d-flex justify-content-center">

        <form method="post" action="php/register.php">
            <label for="fname">username:</label><br>
            <input type="text" id="fname" name="username"><br>
            <label for="fname">Email:</label><br>
            <input type="email" id="fname" name="email"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="password"><br><br>
            <input type="submit" value="create account">
        </form>
    </div>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>