<?php
  include("classes/DatabaseQuery.php");

  $visitationid = $_GET["id"];
  
  $arrVisitation = array();
  
  $dbQ = new DatabaseQuery(new DatabaseInfo);
  $query = "select visitation.*, customer.firstname as 'fname', customer.lastname as 'lname' from visitation,customer where visitation.customer_id = customer.customer_id and visitation_id = '$visitationid'";

  $res = $dbQ->query($query);

  $row = mysqli_fetch_array($res);

  array_push($arrVisitation, $visitationid);
  array_push($arrVisitation, $row["address"]);
  array_push($arrVisitation, date_format(date_create($row["scheduled_date"]), "D, F d, Y"));
  array_push($arrVisitation, date('h:i:s a', strtotime($row["from_time"])));
  array_push($arrVisitation, $row["lname"].", ".$row["fname"]);
 
  echo implode("~", $arrVisitation);
  

?>