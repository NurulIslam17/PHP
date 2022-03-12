<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Information</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <?php
        
            $connection = mysqli_connect('localhost','root','','user');

            if(!$connection){
                die("Not connected.".mysqli_error($connection));
            }

            
            // $query = "INSERT INTO user_info (userName , email, password) VALUES ('$user ', '$email', '$pass')";
  
        ?>

    <body>
        <div class="update">
            <form action="insert.php" method="post">
                    <h3>Update Data</h3>
                    <input type="text" name="userName" placeholder="User Name" required class="inp"><br><br>
                    <input type="email" name="email" placeholder="User email" required class="inp"><br><br>
                    <input type="password" name="password" placeholder="User Password" required class="inp"><br><br>
                    <input type="submit" name="update" value="Update" class="btn"><br><br>
            </form>
        </div>
    </body>
</html>