<?php 

//        $fname = $lname = $email = $address = $contact = $password = "";

        $fname = $_GET['fname'];
        
        
        $lname = $_GET["lname"];

        $email = $_GET["email"];
        $address = $_GET["address"];
        $contact = $_GET["contact"];

        $password = $_GET["password"];

        $conn = mysqli_connect("localhost","root","","adamarc");
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());

        }
    
        $sql = "INSERT INTO cutomer_account (first_name,last_name,address,contact_number,email_address,password) VALUES ('$fname','$lname','$address','$contact','$email','$password')";
    
        mysqli_query($conn,$sql);
            echo "asdasd";
        header('Location: pages/home.php');    
        exit();



//        if(mysqli_query($conn,$sql)){
//            header('Location: pages/home.php');    
//        }
//        else{
//            header('Location: signup.php');
//        }

//        $rowcount=mysqli_num_rows($result);
            
    $_POST["fname"] = "";
    $_POST["lname"] = "";
    $_POST["email"] = "";
    $_POST["birthmonth"] = "";
    $_POST["birthday"] = "";
    $_POST["birthyear"] = "";
    $_POST["password"] = "";
    $_SERVER["REQUEST_METHOD"] = null;

     function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
    
?>
