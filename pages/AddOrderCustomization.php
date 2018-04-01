<?php
  session_start();
  include("../classes/Customer.php");
 
  date_default_timezone_set('Asia/Manila');
  $dbQ = new DatabaseQuery(new DatabaseInfo);

  $custID = 0;
  $blimg = $_POST['image'];
  $blimg = $dbQ->setBlob($blimg);
  
//  $blimg = base64_decode($blimg);
//  $blimg2 = explode(",", $blimg);
//  $blimg3 = base64_decode($blimg2[1]);
//  
  $blindsID = $_POST['blindsID'];
  $quan = $_POST['quantity'];
  $length = $_POST['length'];
  $width = $_POST['width'];
  $today = date("Y/m/d h:i:sa");
  $image_title = $_POST['templateName'];
  $fabricID = "";
  $image_properties = "";
  $isCustomed = $_POST['iscustomed'];

  $orderID = "ORDER-" . uniqid();  


  if (isset($_SESSION["current_user_email"]))
  {
//    $custEmail = $_SESSION["current_user_email"]; 
//    $query = "select * from customer where email = '" . $custEmail ."'";
//    $dbQ->query($query);
//    $custClass = new Customer($dbQ);
//    $custID = $custClass->getColVal("customer_id");
//    
//  
//    $query = "INSERT INTO `tblorder`(`order_id`, `customer_id`, `order_date`, `status`, `isviewed`) VALUES ('$orderID', $custID, '$today', 'pending', 'no')";
//
//    $dbQ->query($query);
//
//    $query = "INSERT INTO `order_details`(`order_id`, `quantity`, `length`, `width`, `isCustomed`) VALUES ('$orderID', $quan, $length, $width, '$isCustomed')";
//
//    $dbQ->query($query);
//
//
//    $query = "INSERT INTO `design`(`blinds_id`, `fabric_id`, `order_id`, `design_date`) VALUES ($blindsID, '$fabricID', '$orderID', '$today')";
//    $dbQ->query($query);
    echo $blimg;
    
    $query = "INSERT INTO `design_details`(`design_id`, `design_image`, `design_title`) VALUES ((SELECT designid FROM design order by designid DESC LIMIT 1), $blimg, '$image_title')";

    $dbQ->query($query);

//    echo "Pending order added!";


    
//echo "added";
  }
  else
  {
      echo "login first!";
  
  }



?>