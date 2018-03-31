<?php
  
  include("../classes/DatabaseQuery.php");

  $dbQ = new DatabaseQuery(new DatabaseInfo);


  $orderID = "ORDER-" . uniqid();  
  $blindsID = $_GET['blindsID'];
  $fabricID = $_GET['fabricID'];
  $custID = 0;
  $quan = $_GET['quantity'];
  $length = $_GET['length'];
  $width = $_GET['width'];
  $image = $_GET['image'];
  $image_properties = $_GET['properties'];
  $isCustomed = $_GET['isCustomed'];
  $today = new Date("Y/m/d h:i:sa");

  if (!isset($_SESSION['current_user']))
  {
    echo "login first!";
  }
  else
  {

    $query = "INSERT INTO `tblorder`(`order_id`, `customer_id`, `order_date`, `status`, `isviewed`) VALUES ('$orderID', $custID, '$today', 'pending', 'no')";

    $dbQ->query($query);

    $query = "INSERT INTO `order_details`(`order_id`, `quantity`, `length`, `width`, `isCustomed`) VALUES ('$orderID', $quan, $length, $width, '$isCustomed')";

    $dbQ->query($query);


    $query = "INSERT INTO `design`(`blinds_id`, `fabric_id`, `order_id`, `design_date`) VALUES ($blindsID, $fabricID, '$orderID', '$today')";
    $dbQ-query($query);

    $query = "INSERT INTO `design_details`(`design_id`, `design_image`, `design_properties`) VALUES (SELECT designid FROM design BY ID DESC LIMIT 1, $image, $image_properties)";

    $dbQ->query($query);

    echo "Pending order added!";

  }



?>