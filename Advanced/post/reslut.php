<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post MEthod</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="post">
            <h3>Post Method Page</h3>

            <?php
                $name = $_POST['user'];
                $pass = $_POST['password'];
                
                echo "Name : $name <br>";
                echo "Password : $pass <br>";
            ?>
           
        </div>
        
    </body>
</html>