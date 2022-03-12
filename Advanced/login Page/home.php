
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

        <div class="login-result">
            <?php

                $dBuser = "Nurul Islam";
                $dBpass = "nurul123";
                echo "<br>DB User information : <br><br>";
                echo "dbUser Name is : $dBuser <br>";
                echo "dbUser Password : $dBpass<br><br>";
                echo "<hr><br>";
            
                $name = $_POST['user'];
                $pass = $_POST['password'];
                
                echo "User information :<br><br>";
                echo "User Name is : $name <br>";
                echo "User Password : $pass<br>";
                echo "<hr><br>";

                echo "Login information<br><br>";
                if($dBuser==$name && $dBpass==$pass) 
                {
                    
                    echo "<font color='green'>Login Successful</font> <br>";
                    echo "<font color='black'> Welcome to home page</font><br>";
                }
                else 
                {
                    echo "Login Failed<br>";
                }
            ?>
        </div>
        
    </body>
</html>