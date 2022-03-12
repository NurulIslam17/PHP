<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete from database</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

                <h1>Information</h1>
        <?php
            $connection = mysqli_connect('localhost','root','','user');

            if(!$connection){
                die("Not connected.".mysqli_error($connection));
            }

            $query = "SELECT * FROM user_info";
          
            $result = mysqli_query($connection,$query);

            $count = mysqli_num_rows($result);

            if($count >0) {
        ?>

            <table class="table">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>E-MAIL</th>
                        <th>PASSWORD</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

        <?php
                while($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $user = $rows['userName'];
                    $email = $rows['email'];
                    $pass = $rows['password'];
        ?>

            <tbody>
                <tr>
                    <td> <?php echo $id?> </td>
                    <td> <?php echo $user?> </td>
                    <td> <?php echo $email?> </td>
                    <td> <?php echo $pass?> </td>
                    <td><a href="delete.php?id=<?php echo $id?>"> Delete</a></td>
                </tr>
            </tbody>
        <?php
                  }
        ?>
            </table>
        <?php
            }else {
                echo " There is no data in your Database";
            }
        ?>  
    </body>
</html>
