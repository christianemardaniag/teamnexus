<?php
   
    include("DatabaseInfo.php");
    include("DatabaseQuery.php");

    $custid = $_GET["custid"];
    $custaddress = $_GET["custaddress"];
    $schedDate = $_GET["schedDate"];
    $fromTime = $_GET["fromTime"]. ":00";
    $toTime = $_GET["toTime"] . ":00";
    $today = date("Y/m/d");

    $query = $_GET['query'];
    
    $dbif = new DatabaseInfo();
    $dbQuery = new DatabaseQuery($dbif);

   

    
//
//    $query = "select * from visitation where customer_id = ".$custid;
//    
//
//    $res = $dbQuery->query($query);
//
//    if (mysqli_num_rows($res) <= 0)
//    {
    
//        $query = "INSERT INTO `visitation`(`visitation_id`, `customer_id`, `address`, `date_today`, `scheduled_date`, `from_time`, `to_time`, `status`) VALUES ('$id',$custid, '$custaddress','$today', '$schedDate','$fromTime', '$toTime', 'unavailable')";
    
        $res = mysqli_query($con, $query);
        echo "Added Visitation!";
        
//    }
//    else
//    {
//        echo "You already have an appointment!";   
//    }

    
    
    
?>
