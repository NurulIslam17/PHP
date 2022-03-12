<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dest_div">
        <pre>
                <?php
                        $pro = $_FILES['profile'];
                                
                        //var_dump($pro);
                        //echo $pro['name']."<br>";
                        //echo $pro['full_path'];
                        //echo $pro['type'];
                        //echo $pro['tmp_name'];
                        //echo $pro['error'];
                        //echo $pro['size'];

                        $name = $pro['name'];
                        $type = $pro['type'];
                        $tmp_name = $pro['tmp_name'];

                        if(!empty($name))
                        {
                            $loc = "upload/";

                            if(move_uploaded_file($tmp_name , $loc.$name))
                            {
                                echo "File uploded successful! <br>";
                                $showFIle = $loc.$name;
                                echo "<img src='$showFIle' width ='200' height='200'>";
                            }
                            else
                            {
                              echo " Upload Failed";
                            }
                        }
                        else
                        {
                            echo "FIle not found";
                        }
                ?>
        </pre>
    </div>
    
</body>
</html>

        


