<?php

  session_start();
  if(isset($_SESSION['username']))
  {
    echo "User name From session : " .$_SESSION['username'];
    echo "<br>";
    echo "User password From session : " .$_SESSION['pass'];
    echo "<br>Your saved session data !";
  
  }
  else{
    echo "Login to continue.....";
  }

?>