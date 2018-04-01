<?php
  
  include("../classes/DatabaseQuery.php");
  $dbQ = new DatabaseQuery(new DatabaseInfo);
  $id = $_GET['id'];
  $quan = $_GET['quan'];
  $width = $_GET['width'];
  $length = $_GET['length'];

  $query = "UPDATE `order_details` SET `quantity`= $quan,`length`=$length,`width`=$width where order_details_id = $id";
  $dbQ->query($query);
  

?>