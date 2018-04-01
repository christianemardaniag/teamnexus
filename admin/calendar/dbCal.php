<?php
    session_start();
    include("../classes/DatabaseQuery.php");

    $custid = "";
    $custemail = $_GET["custemail"];
    $custaddress = $_GET["custaddress"];
    $schedDate = $_GET["schedDate"];
    $fromTime = $_GET["fromTime"]. ":00";
    //$toTime = $_GET["toTime"] . ":00";
    $today = date("Y/m/d");

    $dbQ = new DatabaseQuery(new DatabaseInfo);
    

    

  
  
    $query = "select * from customer where email = '".$custemail."'";
    $res = $dbQ->query($query);
    $row = mysqli_fetch_array($res);
    $custid = $row["customer_id"];
    
    $id = uniqid();

    if (mysqli_num_rows($res) > 0)
    {
      
      $query = "select * from visitation where status = 'unavailable' and customer_id = ".$custid;
      $res = $dbQ->query($query);
      //check if user already has an appointment
      if (mysqli_num_rows($res) <= 0)
      {

          $query = "INSERT INTO `visitation`(`visitation_id`, `customer_id`, `address`, `date_today`, `scheduled_date`, `from_time`, `status`) VALUES ('$id',$custid, '$custaddress','$today', '$schedDate','$fromTime', 'unavailable')";

          $dbQ->query($query);
          echo "Added Visitation!";

      }
      else
      {
          echo "You already have an appointment!";   
      }

    }
    else
    {
      echo "Invalid Email!";
    }

 
     
    

    
    
    
?>
