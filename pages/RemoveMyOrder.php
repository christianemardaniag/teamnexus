<?php
  
  include("../classes/DatabaseQuery.php");
  
  $dbQ = new DatabaseQuery(new DatabaseInfo);
  $orderid = $_GET["orderID"];
  
  $query = "update `tblorder` set status = 'removed' WHERE order_id = '$orderid'";
  $res = $dbQ->query($query);
  
  if ($res >= 1)
  {
    echo "Removed items!";
  }

?>