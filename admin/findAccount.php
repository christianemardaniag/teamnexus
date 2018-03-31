<?php
    include("classes/DatabaseQuery.php");

    $email = $_GET['email'];

    $dbq = new DatabaseQuery(new DatabaseInfo);    
    $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = $dbq->query($query);

   
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result)){
                echo "<h6>Customer's Information:</h6>";
                echo "<div class='col-10 mt-3'>";
                    echo "<label for='fullname'>Customer's Name: </label>";
                    echo "<p>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
                echo "</div>";
                echo "<div class='col-12 mt-3'>";
                   echo " <label for='fulladdress'>Customer's Address: </label>";
                    echo "<p>" . $row['address'] . "</p>";
                    echo "<div class='custom-control custom-checkbox form-inline'>";
                        echo "<input type='checkbox' class='custom-control-input' onclick='toggleClass()' id='changeAddress'>";
                        echo "<label class='custom-control-label' for='changeAddress'>Check to set other address:</label>";
                        echo "<input type='text' id='inputChangeAddress' class='d-none form-control'>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-10 mt-3'>";
                    echo "<label for='emailaddress'>Email Address: </label>";
                    echo "<p>" . $row['email'] . "</p>";
                echo "</div>";
                echo "<div class='col-10 mt-3'>";
                    echo "<label for='phonenumber'>Phone Number: </label>";
                    echo "<p>" . $row['contact'] . "</p>";
                echo "</div>";
              

            }
        }
        else{
            echo "No such account";
        }




?>
