<?php 

        include("classes/DatabaseQuery.php");

        $dbq = new DatabaseQuery(new DatabaseInfo);    

            $date = $_POST['date'];
            $txtAreaDescription = $_POST["txtAreaDescription"];

             $query = "INSERT INTO post (admin_username,caption,date_posted) VALUES ('static','$txtAreaDescription','$date')";
               
             $dbq->query($query);
          

            $total = count($_FILES['uploadPhoto_browse']['name']);

           for ($x = 0; $x<$total; $x++){
                $imgTemp = $_FILES['uploadPhoto_browse']['tmp_name'][$x];
               
                $imgTemp = $dbq->setBlob($imgTemp);
               
               
               
//                $query = "INSERT INTO tbl_postimage (post_image) VALUES ('$imgTemp')";
                $query = "INSERT INTO tbl_postimage (post_id,post_image) VALUES ((SELECT postid FROM post order by postid DESC limit 1), '$imgTemp')";
               
                $res = $dbq->query($query);

                if($res){
                    header("Location: gallery.php");
                }
//               sleep(20);
           }

?>
