<?php
  include("classes/DatabaseQuery.php");

  $visitationid = $_GET["id"];
  
  $arrVisitation = array();
  $today = date("Y-m-d");
  $dbQ = new DatabaseQuery(new DatabaseInfo);
  $query = "select * from visitation where visitation_id = '$visitationid'";
  $res = $dbQ->query($query);
  $row = mysqli_fetch_array($res);
  if (date('Y-m-d', strtotime($row["scheduled_date"])) < $today)
  {
    echo "Visitation already done!";
  }
  else
  {
   
  $query = "update visitation set status = 'cancelled' where visitation_id = '$visitationid'";

  $res = $dbQ->query($query);
  echo "Cancelled";
  }

?>