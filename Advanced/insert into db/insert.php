<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert into dataase</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <?php

        if(isset($_POST['submit'])) 
        {
            $user = $_POST['userName'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $connection = mysqli_connect('localhost','root','','user');

            if(!$connection)
            {
                die("Not connected.".mysqli_error());
            }

            //INSERT INTO `user_info` (`userName`, `email`, `password`) VALUES ('afik', 'a@gmail.com', '123456afik');
            $query = "INSERT INTO user_info (userName , email, password) VALUES ('$user ', '$email', '$pass')";

            $res = mysqli_query($connection,$query);

            if( !$res) {
                die("Data Not Inserted".mysqli_error());
            }
        }
  
        ?>

        <div class="login">
            <form action="insert.php" method="post">
                    <h3>Insert In DB</h3>
                    <input type="text" name="userName" placeholder="User Name" required class="inp"><br><br>
                    <input type="email" name="email" placeholder="User email" required class="inp"><br><br>
                    <input type="password" name="password" placeholder="User Password" required class="inp"><br><br>
                    <input type="submit" name="submit" value="Submit" class="btn"><br><br>
            </form>
        </div>

    <body>
        
    </body>
</html>