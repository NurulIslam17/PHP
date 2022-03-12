

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login">
<h1>Cookies </h1><br>
        <?php
            

            $cokies_check= $_COOKIE['user'];
            echo $cokies_check."<br>";
        
        ?>
</div>
    
</body>
</html>