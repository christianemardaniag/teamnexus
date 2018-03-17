<?php
  session_start();
  unset($_SESSION["current_user"]);
  unset($_SESSION["current_user_email"]);

  header("Location: home.php");
?>