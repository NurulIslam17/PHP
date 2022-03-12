

<?php


     $delete_item = $_REQUEST['id'];

     echo $delete_item;

    $connection = mysqli_connect('localhost','root','','user');

    if(!$connection){
        die("Not connected.".mysqli_error($connection));
    }

    $query = "DELETE FROM user_info WHERE id=$delete_item";

    $result_delete = mysqli_query($connection,$query);

    if( $delete_item ) {
        header("location : home.php?Deleted");
    }

?>