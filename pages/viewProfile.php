<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Profile - Adam Arc Blinds and Decor</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<!--
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
-->

  
  <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">

</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION["current_user"]))
  {
    include("../classes/DatabaseQuery.php");
    $current_user = $_SESSION["current_user"];
    $current_email = $_SESSION["current_user_email"];
    $dbQ = new DatabaseQuery(new DatabaseInfo);
    $query = "select * from customer where email = '$current_email'";
    $res = $dbQ->query($query);
    $row = mysqli_fetch_array($res);
    $curLName = $row['lastname'];
    $curAddress = $row['address'];
    $curContact = $row['contact'];
    $curID = $row["customer_id"];
    
  }
  else
  {
    $current_user = "Login";
  }
      
  include("header.php");  
  ?>


    <div class="container">
      <h1 class="display-2 text-center">Profile</h1>

      <div class="row">
        <div class="col-sm-6">
          <div class="col-md-auto pt-3 pb-1">
            <label class="label-create"><b class="text-success text-uppercase">Welcome <?php echo $current_user;?></b></label><br/>



            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="text" id="ufname" name="fname" placeholder="First" class="form-control" value="<?php echo $current_user?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Last Name</label>
                <input type="text" id="ulname" name="lname" placeholder="Last" class="form-control" value="<?php echo $curLName;?>">
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress2">Address</label>
              <input type="text" name="address" id="uaddress" class="form-control" placeholder="Barangay, City/Municipality, Province" value="<?php echo $curAddress;?>">
            </div>

            <div class="form-group">
              <label for="inputAddress2">Contact Number</label>
              <input type="text" name="contact" id="ucontact" class="form-control" placeholder="Phone Number" value="<?php echo $curContact;?>">
            </div>
            <div class="form-group">
              <label for="inputAddress">Email Address</label>
              <input type="text" name="email" id="uemail" class="form-control" value="<?php echo $current_email;?>">
            </div>
            <div class="form-group">
              <label for="inputCity">Password</label>
              <input type="password" name="password" placeholder="Minimum of 8 characters" id="upassword" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputCity">Verify Password</label>
              <input type="password" name="verify_pass" placeholder="" id="uverify_pass" class="form-control">
            </div>


            <button type="button" id="btnUpdateProfile" class="btn btn-primary form-control" onclick="check()" data-oldemail="<?php echo $current_email;?>">Update</button>


            <!--                    <br/>-->
          </div>


        </div>
        <div class="col-6" id="visitation-list">
         
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">My Order</h4>
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Preview</th>
                    <th>Name</th>
                    <th>Dimension</th>
                    <th>Quantity</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    
                   
                    //select customers order that is not cancelled
                    $query = "select * from order_details where order_id in (select order_id from tblorder where customer_id = $curID and status != 'removed' and status != 'cancelled')";
                    $res = $dbQ->query($query);
                    echo (mysqli_num_rows($res));
                    while($row = mysqli_fetch_array($res))
                    {
                      $order_id = $row['order_id'];
                      $order_details_id = $row["order_details_id"];
                      $query = "select design_image from design_details where design_id in (select designid from design where order_id = '$order_id')";
                      $res2 = $dbQ->query($query);
                      $img = "";
                      
                      //design image
                      $row2 = mysqli_fetch_array($res2);
                      $img = $dbQ->getBlob($row2["design_image"]);
                      
                      $query = "select blinds_id from design where order_id = '$order_id'";
                      $resBlind = $dbQ->query($query);
                      $rowBlind = mysqli_fetch_array($resBlind);
                      
                      
                      $blinds_id = $rowBlind['blinds_id'];
                      $query = "select blinds_type_name from blinds_category where blinds_category_id = (select blinds_category_id from blinds where blinds_id = '$blinds_id')";
                      $res3 = $dbQ->query($query);
                      $row3 = mysqli_fetch_array($res3);
                      
                      $blindType = $row3['blinds_type_name'];
                      
                        echo "<tr id='trorder$order_id'>
                        <td><img src='".$img."' class='img-fluid' width='100'></td>
                        <td>".$blindType."</td>
                        <td>
                        <form class='form-inline'>
                          <input type='number' class='form-control inputlength$order_details_id' min='' style='width:80px;' value='".$row['length']."'>&times;
                          <input type='number' class='form-control mt-2 inputwidth$order_details_id' min='' style='width:80px;' value='".$row['width']."'>
                        </form>
                        </td>
                        <td>
                          <input type='number' class='form-control inputquan$order_details_id' min='' style='width:70px;' min='1' value='".$row['quantity']."'>
                          <button class='btn btn-success btn-sm mt-2 btnupdateorder' data-orderdetailsid = '".$order_details_id."'>Update</button>
                        </td>
                        <td><span data-toggle='popover' class='btnRemoveOrder' id='btnRemoveOrder' data-orderid = '$order_id'><i class='fas fa-times text-danger' style='cursor:pointer'></i></span></td>
                      </tr>";
                    }
                    
                
                    
                ?>


                </tbody>
              </table>
            </div>
          </div>
          <a href = "calendar2.php"><button type="button" class="btn btn-primary form-control">Set visitation >></button></a>

        </div>

      </div>


    </div>




    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <script type="text/javascript" src="../js/allscript.js"></script>
<script type="text/javascript" src="../js/fontawesome-all.min.js"></script>

</body>

</html>
