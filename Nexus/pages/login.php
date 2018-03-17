<?php
  session_start();
  include("../classes/DatabaseQuery.php");
  
  $email = $_GET['email'];
  $pass = $_GET['pass'];

  $query = "select * from customer where email = '$email'";
  
  $dbQ = new DatabaseQuery(new DatabaseInfo);
  
  
  $res = $dbQ->query($query);
  
  if (mysqli_num_rows($res) > 0)
  {
   $row = mysqli_fetch_array($res); 
    $custpass = $row["password"];
    if ($pass == $custpass)
    {
      $_SESSION["current_user"] = $row["firstname"];
      $_SESSION["isAdmin"] = "none";
      echo $_SESSION["current_user"];
      
    }
    else
    {
      echo "Email or Password is incorrect!";
    }
  }
  else
  {
    echo "Account does not exist!";
  }
    


?>