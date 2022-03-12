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

        $hash_format = "$2a$07$";
        $salt = "dcjhdjjfvvcddfvfv22";
        $combined =  $hash_format . $salt;
        // echo $combined."<br>";
        echo "User Password : $pass <br>";
        $encrypted_pass=crypt($pass,$combined);
        echo "Encrypted password : $encrypted_pass <br>";
    ?>

    </div>
    
</body>
</html>