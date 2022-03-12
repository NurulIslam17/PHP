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
        <?php
            //setcookie(name, value, expire, path, domain, secure, httponly);
            //Only the name parameter is required. All other parameters are optional.

            $name = "user";
            $value = "Islam Nurul";
            setcookie ($name,$value ,time()+10);

            if(isset($_COOKIE['user'])) 
            {
                echo "Save cookies is : {$_COOKIE['user']}";
            }
            else 
            {
                echo "Cookies is not set <br>";
            }
        ?>
    </div>
    
</body>
</html>