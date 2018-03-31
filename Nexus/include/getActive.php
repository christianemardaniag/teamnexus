<?php
  session_start();

  if(isset($_SESSION['linkActive']))
  {
   echo $_SESSION['linkActive'];
  }

?>