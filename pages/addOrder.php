<?php
  session_start();
  include("../classes/Customer.php");
 
 
  $dbQ = new DatabaseQuery(new DatabaseInfo);

  $custID = 0;
  $blindsID = $_GET['blindsID'];
  $quan = $_GET['quantity'];
  $length = $_GET['length'];
  $width = $_GET['width'];
  $today = date("Y/m/d h:i:sa");
  $image_title = "";
  $fabricID = "";
  $image_properties = "";
  $isCustomed = $_GET['iscustomed'];

  $orderID = "ORDER-" . uniqid();  
  if ($isCustomed == "no")
  {
    $query = "select * from blinds where blinds_id = $blindsID";
    $res = $dbQ->query($query);
    $row = mysqli_fetch_array($res);
    $fabricID = $row["fabric_codeNo"];
    $image_title = $row["name"];
    
    
      
  }
  else
  {
    $image_title = $_GET['img_title'];
    $isCustomed = $_GET['isCustomed'];
    $image_title = $_GET['imgTitle'];

  }


  if (isset($_SESSION["current_user_email"]))
  {
    $custEmail = $_SESSION["current_user_email"]; 
    $query = "select * from customer where email = '" . $custEmail ."'";
    $dbQ->query($query);
    $custClass = new Customer($dbQ);
    $custID = $custClass->getColVal("customer_id");
    
    
    $query = "INSERT INTO `tblorder`(`order_id`, `customer_id`, `order_date`, `status`, `isviewed`) VALUES ('$orderID', $custID, '$today', 'pending', 'no')";

    $dbQ->query($query);

    $query = "INSERT INTO `order_details`(`order_id`, `quantity`, `length`, `width`, `isCustomed`) VALUES ('$orderID', $quan, $length, $width, '$isCustomed')";

    $dbQ->query($query);


    $query = "INSERT INTO `design`(`blinds_id`, `fabric_id`, `order_id`, `design_date`) VALUES ($blindsID, '$fabricID', '$orderID', '$today')";
    $dbQ->query($query);

    $query = "INSERT INTO `design_details`(`design_id`, `design_image`, `design_title`) VALUES ((SELECT designid FROM design order by designid DESC LIMIT 1), (SELECT image FROM blinds where blinds_id = $blindsID), '$image_title')";

    $dbQ->query($query);

    echo "Pending order added!";

  }
  else
  {
      echo "login first!";
  
  }



?>