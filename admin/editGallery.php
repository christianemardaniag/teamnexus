<?php


    $description = $_POST["galleryDesc"];
    $action = $_POST["action"];
    $post_id = $_POST["post_id"];
    $date = $_POST["date"];


    if($action == "edit"){
         $query = "UPDATE `post` SET `caption`='$description', `date_posted`='$date' WHERE `postid`='$post_id'";

         $res = $dbq->query($query);

         if($res){
             header("Location: gallery.php");
         }

    }

?>
