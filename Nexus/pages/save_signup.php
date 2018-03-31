<?php 

        include("../classes/DatabaseQuery.php");
        
        $fname = $_GET['fname'];
        $lname = $_GET["lname"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        $contact = $_GET["contact"];
        $password = $_GET["password"];
        
        
        $dbQ = new DatabaseQuery(new DatabaseInfo);
        
    
        $sql = "INSERT INTO customer (firstname, lastname, address, contact, email, password, user_status) VALUES ('$fname','$lname','$address','$contact','$email','$password', 'unblock')";
        
        $dbQ->query($sql);

 
       

    $_POST["fname"] = "";
    $_POST["lname"] = "";
    $_POST["email"] = "";
    $_POST["birthmonth"] = "";
    $_POST["birthday"] = "";
    $_POST["birthyear"] = "";
    $_POST["password"] = "";

//     function test_input($data)
//    {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//        
//    }
    
?>
