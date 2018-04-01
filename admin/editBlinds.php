<?php 

        include("classes/DatabaseQuery.php");

        $dbq = new DatabaseQuery(new DatabaseInfo);    

        if($_POST['action'] == "editcategory"){
            $dbblindsCategoryName = $_POST['dbblindsCategoryName'];
            $dbblindsCategoryWidth = $_POST["dbblindsCategoryWidth"];
//            $blindsCategoryUnitWidth = $_POST["blindsCategoryUnitWidth"];
            $dbblindsCategoryHeight = $_POST['dbblindsCategoryHeight'];
//            $blindsCategoryUnitHeight = $_POST["blindsCategoryUnitHeight"];
            $dbblindsCategoryDescription = $_POST["dbblindsCategoryDescription"];
            $dbcategoryId = $_POST["dbcategoryId"];
            
            $pic = $_FILES['dbblindsCategoryFile']['tmp_name'];
            $pic = $dbq->setBlob($pic);
            
            $query = "";
            if(isset($_FILES["dbblindsCategoryFile"]) && !empty($_FILES["dbblindsCategoryFile"]["name"])){
                
              $query = "UPDATE `blinds_category` SET `blinds_type_name` = '$dbblindsCategoryName', `description` = '$dbblindsCategoryDescription',`image` = '$pic',`minwidth` = '$dbblindsCategoryWidth',`minheight` = '$dbblindsCategoryHeight' WHERE `blinds_category_id` = $dbcategoryId";
            }
            else{
                $query = "UPDATE `blinds_category` SET `blinds_type_name` = '$dbblindsCategoryName', `description` = '$dbblindsCategoryDescription',`minwidth` = '$dbblindsCategoryWidth',`minheight` = '$dbblindsCategoryHeight' WHERE `blinds_category_id` = $dbcategoryId";
               
            }
            
            $res = $dbq->query($query);
            if($res){
             
                header("Location: blindsCategory.php");
            }

           
        }
        else if($_POST['action'] == "editBlinds"){

            $dbblinds_id = $_POST['dbblinds_id'];
            $dbblindsName = $_POST['dbblindsName'];
            $dbaddBlindsCategory = $_POST['dbaddBlindsCategory'];
            $dbDescription = $_POST["dbDescription"];
            $dbdate = $_POST["dbdate"];
            
            
            $chosenpic = $_FILES["viewblindFile"]["tmp_name"];   
            $chosenpic = $dbq->setBlob($chosenpic);
            
           
            
            $query = "";
            if(isset($_FILES["viewblindFile"]) && !empty($_FILES["viewblindFile"]["name"])){
              
                   $query = "UPDATE `blinds` SET `blinds_category_id` = '$dbaddBlindsCategory', `admin_username` = 'static',`name` = '$dbblindsName',`image` = '$chosenpic',`description` = '$dbDescription',`date_added` = '$dbdate' WHERE `blinds_category_id` = $dbblinds_id";
          
            }
            else{
                $query = "UPDATE `blinds` SET `blinds_category_id` = '$dbaddBlindsCategory', `admin_username` = 'static',`name` = '$dbblindsName',`description` = '$dbDescription',`date_added` = '$dbdate' WHERE `blinds_id` = $dbblinds_id";
                
               
            }
            
            $res = $dbq->query($query);
            if($res){
            
                header("Location: blinds.php");
            }

        }
        else if($_POST['action'] == "updateFabric"){

            $dbdate = $_POST['dbdate'];
            $dbfabricId = $_POST['dbfabricId'];
            $dbfabricName = $_POST['dbfabricName'];

            $query = "UPDATE `fabric` SET `fabric_name`='$dbfabricName', `date_added`='$dbdate' WHERE `fabric_id`='$dbfabricId'";

            $res = $dbq->query($query);

            if($res){
                header("Location: fabric.php");
            }
        }
        

        
?>
