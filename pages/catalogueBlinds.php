<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Gallery - Adam Arc Blinds and Decor</title>
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
  <link type="text/css" href="../css/ihover.css" rel="stylesheet">



  <script type="text/javascript" src="../js/fabric.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>



  <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">

</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION["current_user"]))
  {
    $current_user = $_SESSION["current_user"];
    
  }
  else
  {
    $current_user = "Login";
  }
      
  include("header.php");  
  ?>

    <div class="container">

      <h2 class="display-2 text-center">Select Blinds</h2>
    </div>

    <?php
      
      
      include("../classes/DatabaseQuery.php");
      $dbQ = new DatabaseQuery(new DatabaseInfo);
      $catID;  
     
      $catID = $_GET['catID'];
        
    
        $query = "SELECT *, (select blinds_type_name from blinds_category where blinds_category.blinds_category_id = blinds.blinds_category_id) as 'Blinds_Type' FROM `blinds` where blinds_category_id = $catID";
        $res = $dbQ->query($query);
        echo "<div class='container'>";
        echo "<div class='card-columns'>";
        while ($row = mysqli_fetch_array($res))
        {
           
          $img = $dbQ->getBlob($row["image"]);
          
          echo "<div class='card' style='cursor: pointer'>";
          echo "<img class='card-img-top imgViewBlinds' src='$img' id = '".$row['blinds_id']."'/>";
          echo "<div class='card-body'>";
          echo "<h4 class='card-title'>".$row['Blinds_Type']."</h4>";
          echo "<p class='card-text'>".$row['description']."</p>";
//          echo "<button type='button' class='btn btn-warning btnaddOrder' ><span class=' fa fa-cart-plus'>Add to order</span></button>";
//          echo "<span class=' fa fa-cart-plus'>Quantity</span><input type='number' min = '1' value = '1' id = 'quan".$row['blinds_id']."'/>";
          echo "</div>";
          echo "</div>";
  
    
        }
        echo "</div></div>";
      
     
    ?>
      <!--     modal alert-->
      <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Warning</h5>
            </div>
            <div class="modal-body">
              <p id='pMessage'></p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-sm btn-link text-secondary" data-dismiss="modal">Cancel</button>
              <button class="btn btn-sm btn-warning" onclick="modalChangeShades()" data-dismiss="modal">Continue</button>
            </div>
          </div>
        </div>
      </div>

      <!--modal view blinds-->
      <div tabindex="-1" class="modal fade" id="myModal-catalogueBlinds" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><span>Roller Blinds</span></h4>
                            <button class="close" id="close" type="button" data-dismiss="modal">×</button>
                        </div>


                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-7">
                                        <img src="" alt="img1" class="img-fluid" id="modal-catalogueBlinds">
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-5">
                                       <div class="row mb-3">
                                           <p class="h5">Order Details</p>
                                       </div>
                                        <div class="row">
                                            <div class="h5 col-4">
                                                <span class='fa fa-cart-plus'>&nbsp;Quantity</span>
                                            </div>
                                            <div class="h5 col-8">
                                                <input type='number' min='1' value='1' id='orderQuantity' class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="h5 col-4">
                                                <span class='fa fa-cart-plus'>&nbsp;Size:</span>

                                            </div>
                                            <div class="h5 col-8">
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Width:</span>
                                                    </div>
                                                    <input class="form-control" type='number' min='1' value='1' id='orderWidth' placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="input-group mb-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Length:</span>
                                                    </div>
                                                    <input class="form-control" type='number' min='1' value='1' id='orderLength' placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                
                                            </div>

                                        </div>


                                        

                                        <!--                    <div class="dropdown-divider"></div>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                        <button type='button' class='btn btn-warning' id="btnaddOrder" data-iscustomed="no"><span class='fa fa-cart-plus '>&nbsp;Add to order</span></button>
                                        <div><input type='hidden' id='fabid' /></div>
<!--                            <button class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>



      <?php include("../include/footer.php"); ?>
      <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
      <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
      <script type="text/javascript" src="../js/allscript.js"></script>
      <script>
       

      </script>
</body>

</html>
