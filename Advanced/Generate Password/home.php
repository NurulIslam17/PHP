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
            <h3>Welcome To Random Password Page</h3>
            <h4>Reload to generate new password</h4>

                <?php
                    $all_key = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','&','*' );

                    $length = array(8,9,10,11,12,13,14,15);
                    shuffle($length);
                    // echo $length[0];
                    $final_length = $length[0];
                    echo "Password length is : $final_length <br>";
                    $string ="";

                    for( $i=0 ; $i<$final_length ; $i++) 
                    {
                        shuffle($all_key);
                        $string = $string . $all_key[0]; 
                    }
                    echo "Random Password is : $string <br>";
                ?>
        </div>
    </body>
</html>
