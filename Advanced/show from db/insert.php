<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View from database</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
            $connection = mysqli_connect('localhost','root','','user');

            if(!$connection)
            {
                die("Not connected.".mysqli_error($connection));
            }

            $query = "SELECT * FROM user_info";
            $result = mysqli_query($connection,$query);

            $count = mysqli_num_rows($result);

            if($count >0)
            {
                while($rows = mysqli_fetch_assoc($result))
                {
                    /*
                    // All information from the table
                      echo "<pre>";
                          print_r($rows);
                      echo "</pre>";
                    */
                    $id = $rows['id'];
                    $user = $rows['userName'];
                    echo " id : $id ". "User Name : $user <br>";
                  }

                  echo "Total Inserted data rows in your database : $count";

            }else {
                echo " There is no data in your Database";
            }

            // $rows = mysqli_fetch_row($result);
        ?>  
    </body>
</html>