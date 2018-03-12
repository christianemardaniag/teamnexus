<?php

  
    $conn = mysqli_connect("localhost","root","","adamarc");
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());

            }
        echo "asd";

        $img = $_GET['path'];

    
//
//     $name = $_FILES[$img]['name'];
//     $target_dir = "images/";
//     $target_file = $target_dir . basename($name);
//
//     // Select file type
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
//     // Valid file extensions
//     $extensions_arr = array("jpg","jpeg","png","gif");
//
//     // Check extension
//     if( in_array($imageFileType,$extensions_arr) ){
//
//      // Convert to base64 
//      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
//      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
//      // Insert record
//         echo $image;
//         
//      $query = "insert into blinds(Image) values('".$image."')";
//      mysqli_query($conn,$query);

      // Upload file
//      move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
//     }

    
  
//     $target_dir = "images/";
//     $target_file = $target_dir . basename($_FILES[$img]["name"]);
//    echo $target_file;
//     // Select file type
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
//     // Valid file extensions
//     $extensions_arr = array("jpg","jpeg","png");
//
//     // Check extension
//     if( in_array($imageFileType,$extensions_arr) ){
//
//      // Convert to base64 
//      $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
//      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
//      // Insert record
//      $query = "insert into blinds(image) values('".$image."')";
//      mysqli_query($con,$query);
//      // Upload file
//      move_uploaded_file($_FILES[$img]['tmp_name'],$target_dir.$name);
//     }

    
?>
