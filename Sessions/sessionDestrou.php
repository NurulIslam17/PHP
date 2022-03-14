<?php
// Logout
  session_start();
  session_unset();
  session_destroy();
  echo "You've been logged Out";

?>