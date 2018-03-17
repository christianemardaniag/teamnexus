<?php 

        include("classes/DatabaseQuery.php");

        $dbq = new DatabaseQuery(new DatabaseInfo);    

//        if($_POST['action'] == "editcategory"){
////            $blindsCategoryName = $_POST['dbblindsCategoryName'];
////            $blindsCategoryWidth = $_POST["dbblindsCategoryWidth"];
//////            $blindsCategoryUnitWidth = $_POST["blindsCategoryUnitWidth"];
////            $blindsCategoryHeight = $_POST['dbblindsCategoryHeight'];
//////            $blindsCategoryUnitHeight = $_POST["blindsCategoryUnitHeight"];
////            $blindsCategoryDescription = $_POST["dbblindsCategoryDescription"];
////
//////
////            $chosenpic = $_FILES["dbblindsCategoryFile"]["tmp_name"];   
////            $chosenpic = $dbq->setBlob($chosenpic);
//////
////            $query = "UPDATE blinds_category SET blinds_type_name = '$blindsCategoryName',description = '$blindsCategoryDescription',image = '$chosenpic',minwidth = '$blindsCategoryWidth',minheight = '$blindsCategoryHeight' WHERE ";
//////
////            $res = $dbq->query($query);
////            if($res){
////             echo "Hey!";
//////                header("Location: blindsCategory.php");
////            }
//
//           
//        }
//        else if($_POST['action'] == "editBlinds"){
//
//            $blinds_id = $_POST['dbblinds_id'];
//            $blindsName = $_POST['dbblindsName'];
//            $addBlindsCategory = $_POST['dbaddBlindsCategory'];
//            $addBlindsDescription = $_POST["dbDescription"];
//           
////            $addBlindsFabric = $_POST["addBlindsFabric"];
//         
//
//            $chosenpic = $_FILES["viewblindFile"]["tmp_name"];   
//            $chosenpic = $dbq->setBlob($chosenpic);
//
////            wala date ordered - dateadded
////            wala ba talagang fabric type yung blinds?
//                
////            select blinds_type_name from blinds_category where blinds_category_id in (select blinds_category_id from blinds)
//            
////            "UPDATE `accountInfo` SET `username`='$username',`name`='$name',`bio`='$bio',`email`='$email',`phone`='$phone',`gender`='$gender' WHERE `username`='$username'"
////            $query = "UPDATE `blinds` SET ``";
////
////            $res = $dbq->query($query);
////
////            if($res){
////                header("Location: blinds.php");
////            }
//        }
        if($_POST['action'] == "updateFabric"){

            $dbdate = $_POST['dbdate'];
            $dbfabricId = $_POST['dbfabricId'];
            $dbfabricName = $_POST['dbfabricName'];
//            $dbfabricNameTemp = $_POST['dbfabricNameTemp'];
//            $chosenpic = $_FILES["dbfabricFile"]["tmp_name"];   
           
            
           
//            $chosenpicFinal = $dbq->setBlob($chosenpicFinal);
              
//            echo $dbdate . " " . $dbfabricName . " " . $dbfabricNameTemp;
//           
            
            $query = "UPDATE `fabric` SET `fabric_name`='$dbfabricName', `date_added`='$dbdate' WHERE `fabric_id`='$dbfabricId'";

            $res = $dbq->query($query);

            if($res){
                header("Location: fabric.php");
            }
        }
        

        
?>
