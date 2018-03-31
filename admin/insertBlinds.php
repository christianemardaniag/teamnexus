<?php 

        include("classes/DatabaseQuery.php");
//addcategory
//action


        $dbq = new DatabaseQuery(new DatabaseInfo);    

        if($_POST['action'] == "addcategory"){
            $blindsCategoryName = $_POST['blindsCategoryName'];
            $blindsCategoryWidth = $_POST["blindsCategoryWidth"];
            $blindsCategoryUnitWidth = $_POST["blindsCategoryUnitWidth"];
            $blindsCategoryHeight = $_POST['blindsCategoryHeight'];
            $blindsCategoryUnitHeight = $_POST["blindsCategoryUnitHeight"];
            $blindsCategoryDescription = $_POST["blindsCategoryDescription"];


            $chosenpic = $_FILES["blindsCategoryFile"]["tmp_name"];   
            $chosenpic = $dbq->setBlob($chosenpic);

            $query = "INSERT INTO blinds_category (blinds_type_name,description,image,minwidth,minheight) VALUES ('$blindsCategoryName','$blindsCategoryDescription','$chosenpic','$blindsCategoryWidth','$blindsCategoryHeight')";

            $res = $dbq->query($query);

            if($res){
                header("Location: blindsCategory.php");
            }
        }
        else if($_POST['action'] == "insertBlinds"){

            $blindsName = $_POST['blindsName'];
            $addBlindsCategory = $_POST['addBlindsCategory'];
            $addBlindsDescription = $_POST["addBlindsDescription"];
            $date = $_POST["date"];
           
//            $addBlindsFabric = $_POST["addBlindsFabric"];
         

            $chosenpic = $_FILES["blindFile"]["tmp_name"];   
            $chosenpic = $dbq->setBlob($chosenpic);

//            wala date ordered - dateadded
//            wala ba talagang fabric type yung blinds?
                
//            select blinds_type_name from blinds_category where blinds_category_id in (select blinds_category_id from blinds)
            
            $query = "INSERT INTO blinds (blinds_category_id,admin_username,name,image,description,date_added) VALUES ('$addBlindsCategory','static','$blindsName','$chosenpic','$addBlindsDescription','$date')";

            $res = $dbq->query($query);

            if($res){
                header("Location: blinds.php");
            }
        }
        else if($_POST['action'] == "insertFabric"){

            $blindsName = $_POST['fabricName'];
            $date = $_POST["date"];
            $chosenpic = $_FILES["fabricFile"]["tmp_name"];   
            $chosenpic = $dbq->setBlob($chosenpic);
//     date_added
            $query = "INSERT INTO fabric (fabric_name,fabric_image,date_added) VALUES ('$blindsName','$chosenpic','$date')";

            $res = $dbq->query($query);

            if($res){
                header("Location: fabric.php");
            }
        }
        

        
?>
