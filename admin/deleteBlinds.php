<?php 

        include("classes/DatabaseQuery.php");

        $dbq = new DatabaseQuery(new DatabaseInfo);    

       if($_POST['action'] == "deleteCategory"){
           
            $deleteCategory = $_POST['deleteCategory'];
           
           $query = "UPDATE `blinds_category` SET `status`='remove'  WHERE blinds_category_id = " . $deleteCategory;
            
            $res = $dbq->query($query);
           
           $query = "update blinds set status = 'not available' where blinds_category_id in (select blinds_category_id from blinds_category where status = 'remove') ";
            
            $res = $dbq->query($query);
           
           

            if($res){
                header("Location: blindsCategory.php");
            }
        }
        else if($_POST['action'] == "deleteBlinds"){
            $deleteBlindsid = $_POST['deleteBlinds'];
            
            $query = "UPDATE `blinds` SET `status`='remove'  WHERE blinds_id = " . $deleteBlindsid;
            
            $res = $dbq->query($query);

            if($res){
                header("Location: blinds.php");
            }
            
            
        }
        else if($_POST['action'] == "deleteFabric"){
           
            $deleteFabricid = $_POST['deleteFabric'];
            
//            echo $deleteFabricid;
            $query = "UPDATE `fabric` SET `status`='remove'  WHERE fabric_id = " . $deleteFabricid;
            
            $res = $dbq->query($query);

            if($res){
                header("Location: fabric.php");
            }
        }
        

        
?>
