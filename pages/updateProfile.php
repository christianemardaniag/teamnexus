<?php
  session_start();
  include("../classes/DatabaseQuery.php");

  $dbQ = new DatabaseQuery(new DatabaseInfo);
  
  $email = $_GET["oldEmail"];
  $newEmail = $_GET["newEmail"];
  $newPass = $_GET["newPass"];
  $fname = $_GET["fname"];
  $lname = $_GET["lname"];
  $address = $_GET["address"];
  $contact = $_GET["contact"];
  $password = $_GET["password"];
  
  $query = "UPDATE `customer` SET `email`= '$newEmail',`password`='$password',`firstname`='$fname',`lastname`='$lname',`address`='$address',`contact`='$contact',
  `user_status`='unblock' WHERE email = '$email'";

  $res = $dbQ->query($query);
  
  $_SESSION["current_user"] = $fname;
  $_SESSION["current_user_email"] = $newEmail;
      
  echo "Updated Profile";

?>