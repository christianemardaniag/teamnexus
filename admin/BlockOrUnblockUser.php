<?php
  include("classes/DatabaseQuery.php");
  
  $isBlock = $_GET['isBlock'];
  $id = $_GET['id'];
  $dbQ = new DatabaseQuery(new DatabaseInfo);

  $query = "update customer set user_status = '$isBlock' where customer_id = $id";
  
  $res = $dbQ->query($query);

  if (($res) > 0)
  {
    $reverseBlock = ($isBlock == "block") ? "unblock" : "block";
    echo $reverseBlock;
  }
  

?>