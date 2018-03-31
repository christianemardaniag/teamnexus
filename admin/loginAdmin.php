<?php
    session_start();
    

    include("classes/DatabaseQuery.php");

    
    
        if(isset($_GET['username'])&&isset($_GET['password'])){
            $username = $_GET['username'];
            $password = $_GET['password'];
            
            $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $dbq = new DatabaseQuery(new DatabaseInfo);    
            $result = $dbq->query($query);

            if(mysqli_num_rows($result) > 0)
            {
               $_SESSION["admin_username"] = $username;
                echo "success";
            }
            else{
                echo "failed";  
            }
        }
        


//    $_SESSION["admin_username"] = $username;




?>
