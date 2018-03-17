<?php
  
  include("../classes/DatabaseQuery.php");
  $message = $_POST["feed"];
  $summary = $_POST["summary"];
  $email = $_POST["email"];
  $rating = $_POST["hiddenRating"];
  $selectedType = $_POST["selectedType"];
  $today = date("Y/m/d");


  $query = "INSERT INTO `feedback`(`email`, `feedback_type`, `message`, `short_summary`, `ratings`, `feedback_date`) VALUES ('$email','$selectedType','$message','$summary',$rating,$today)";

  $dbQ = new DatabaseQuery(new DatabaseInfo);

  $res = $dbQ->query($query);
  
  echo $res;
  
  header("location: about.php");

?>
