<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="div1">
    <h2>Welcome to Result page</h2>
        <?php
          $name = $_GET['user'];
          $pass = $_GET['passward'];
          echo " User name :  $name <br>";
          echo " User Pass :  $pass <br>";
        ?>
  </div>
</body>
</html>