<?php
  session_start();
  $active = $_GET['alink'];
  
  $_SESSION['linkActive'] = $active;
  

?>