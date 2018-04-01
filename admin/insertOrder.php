<?php
    include("classes/DatabaseQuery.php");

    $email = $_GET['email'];
//    $newAddress = $_GET['newAddress'];

    date_default_timezone_set("Asia/Manila");
    $dateTime = date("Y/m/d h:i:sa");


    $dbq = new DatabaseQuery(new DatabaseInfo);    
    $query = "INSERT INTO `tblorder`(`order_id`, `customer_id`, `order_date`, `status`, `isviewed`) VALUES ('" . uniqid(); . "',(SELECT customer_id FROM customer WHERE email = '$email'),'$dateTime','pending','no')";
    $result = $dbq->query($query);


    if($result){
        echo "Successfully Added!";
    }else{
        echo "Failed to add!";
    }


   
     


?>
