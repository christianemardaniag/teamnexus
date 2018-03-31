<?php

    include("classes/DatabaseQuery.php");

    $id = $_GET['id'];
    $dbq = new DatabaseQuery(new DatabaseInfo);    
    $query = "select * from blinds WHERE blinds_category_id = '" . $id . "'";
    $result = $dbq->query($query);
    $ctr= 0;
// echo "<button id= 'click'>ASD</button>";
        while($row = mysqli_fetch_array($result)){
                $dbImg = $dbq->getBlob($row['image']);
                
                echo "<div class='col-4 mb-2 allss'>";
//                    echo "<input type= 'checkbox' id = 'check_" . $ctr . "' class='checkBoxOrder'/>";
//                    echo "<div class='card card-category'>";
            
                    echo "<img width = 100 height = 150 class = 'card-img-top img-order img-order-blinds' src= '" . $dbImg . "' id = 'blindsChoice_$ctr' style = 'object-fit: cover' alt = '"  . $row['name'] . "' onclick = 'blindsChoice(this.id)'>";
                    
//                  echo "<img class='card-img-top img-order' src='" . $dbImg . "'  id='blindChoice_" . $ctr . "' height='150' width ='100' style='object-fit: cover;' alt='" . $row['name'] . "'>";
            
                   
//                    echo "<div class='card-body'>";
                    echo "<h6 class='card-title mt-3'>" . $row['name'] . "</h6>";
//                    echo "</div>";
//                    echo "</div>";
                
                echo "</div>";

            
            $ctr++;
            
            
        }

?>
