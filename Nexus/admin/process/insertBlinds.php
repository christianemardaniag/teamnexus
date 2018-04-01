<?php 

        include("../classes/DatabaseQuery.php");

        $minheight = $_GET['minheight'];
        $minWidth = $_GET["minWidth"];
        $desc = $_GET["desc"];
        $img = $_GET["img"];
        $action = $_GET["action"];
        $blindsCategoryName = $_GET["blindsCategoryName"];

//        $img = mysqli_escape_string($con, file_get_contents($img));

        $query = "INSERT INTO blinds_category (blinds_type_name,description,image,minwidth,minheight) VALUES ('$blindsCategoryName','$desc','$img','$minWidth','$minheight')";

        $dbQ = new DatabaseQuery(new DatabaseInfo);
        $res = $dbQ->query($query);
       
        if($res){
            echo "Successfully Added!";
        }
        
?>
