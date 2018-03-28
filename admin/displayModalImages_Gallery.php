<?php
     include("classes/DatabaseQuery.php");
     $dbq = new DatabaseQuery(new DatabaseInfo);  

    $post_id = $_GET['post_id'];

     $query = "SELECT post.*, tbl_postimage.post_image FROM post, tbl_postimage WHERE post.postid = '" . $post_id . "' AND tbl_postimage.post_id = '" .$post_id . "'";
         
          $result = $dbq->query($query);
    echo "<div class='modalGallery-container col-12'>";
        echo "<div class='row'>";   
        $caption = "";
    
        while($row = mysqli_fetch_array($result)){
          $dbImg = $dbq->getBlob($row["post_image"]);
            
            echo "<input type='hidden' id = 'post_id' name = 'post_id' value ='" . $post_id . "'>";
            date_default_timezone_set("Asia/Manila");
            $dateTime = date("Y/m/d h:i:sa");
            echo "<input type='hidden' name = 'date' id = 'date' value = '" . $dateTime . "'>";


                 echo "<div class='col-md-3 col-sm-4 col-xs-6 mb-2'>";
                    echo "<img src='" . $dbImg . "' width='160px' height = '200px' alt='img1' id='modal-Gallery' style='object-fit:cover'>";
                 echo "</div>";

                    $caption = $row["caption"];
                    
            
//Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.

        }
 
        echo "</div>";
  echo "</div>";
        echo "<div class='row'>";
             echo "<hr>";
            echo " <textarea style='background-color: white; border: none' name='galleryDesc' id='galleryDesc_" . $post_id ."' class='form-control mt-2 galleryDesc' cols='3000' rows='4' disabled>" . $caption . "</textarea>";
        echo "</div>";
  


?>
