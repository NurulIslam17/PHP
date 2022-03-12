<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home">
    <h3>Welcome To Home Page</h3>

    <?php

        $name = $_REQUEST['name'];
        $pass = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        // echo "Name : $name <br>";
        // echo "Password : $pass <br>";
        // echo "Email : $email <br>";

        $passLen = strlen($pass);
        // echo $passLen;

        if($passLen >=5 && $passLen<=10) 
        {
            echo "Login Successfull !<br>";
        }
        else 
        {
            header("location:login.php?wrong= Password length is not correct.");
        }
    ?>

    </div>
    
</body>
</html>