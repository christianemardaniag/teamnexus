<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <!--    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<<<<<<< HEAD:admin/orders.php
  <!-- Navigation-->

  <?php 
        include("include/Navigation.php");
    include("classes/DatabaseQuery.php");
    ?>

  <!--End Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid mt-5">
      <div class="card mb-3">
        <div class="card-header">
          <div class="col-6"><i class="fa fa-table"></i> Orders</div>
        </div>
        <div class="offset-10 mt-1 position-absolute"><button class="btn btn-primary filter_inset filter" data-toggle="modal" data-target=".bd-addOrder-modal-lg" id='addBlinds'><i class="fas fa-plus"></i> Add New Orders</button></div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>

                  <th>Blinds Image</th>
                  <th>Blinds Name</th>
                  <th>Blinds Type</th>
                  <th>Customer's Name</th>
                  <th>Date Ordered</th>
                  <th>Order Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>

                  <th>Blinds Image</th>
                  <th>Blinds Name</th>
                  <th>Blinds Type</th>
                  <th>Customer's Name</th>
                  <th>Date Ordered</th>
                  <th>Order Status</th>
                  <th>Actions</th>

                </tr>
              </tfoot>
              <tbody>
                <!--
=======
    <!-- Navigation-->

    <?php 
        include("include/Navigation.php");
    ?>

    <!--End Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-6"><i class="fa fa-table"></i> Orders</div>
                </div>
                <div class="offset-10 mt-1 position-absolute"><button class="btn btn-primary filter_inset filter" data-toggle="modal" data-target=".bd-addOrder-modal-lg"><i class="fas fa-plus"></i> Add New Orders</button></div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th>Blinds Image</th>
                                    <th>Blinds Name</th>
                                    <th>Blinds Type</th>
                                    <th>Customer's Name</th>
                                    <th>Date Ordered</th>
                                    <th>Order Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>

                                    <th>Blinds Image</th>
                                    <th>Blinds Name</th>
                                    <th>Blinds Type</th>
                                    <th>Customer's Name</th>
                                    <th>Date Ordered</th>
                                    <th>Order Status</th>
                                    <th>Actions</th>

                                </tr>
                            </tfoot>
                            <tbody>
>>>>>>> 9350d35b71bfa520600526c8c0715301d363229a:Nexus/admin/orders.php
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-info-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
-->




              </tbody>
            </table>

          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <!--            img modal-->
      <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <img src="" class="enlargeImageModalSource" style="width: 100%;">
            </div>
          </div>
        </div>
      </div>


      <!--            end table-->
      <!-- ADD NEW ORDER -->
      <!--                choose blinds-->
      <div class="modal bd-addOrder-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Choose Blinds (Walk-ins)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
              <div class="row">
                <div style="overflow-x:hidden">
                  <div class="row ml-4 mb-4">
                    <div class="input-group form-inline">
                      <div class="col-12">
                        <label for="Category" class="form-control">Choose Category:</label>
                        <select class="form-control bg-light" id="blindCategory">
                                                    
                                                   <?php
                                                        $dbq = new DatabaseQuery(new DatabaseInfo);    
                                                        $queryCateogry = "select * from blinds_category WHERE status = 'available'";
                                                        $resultCategory = $dbq->query($queryCateogry);
                                                     
                                                        while($row = mysqli_fetch_array($resultCategory)){
                                                            $cat_Id = $row['blinds_category_id'];

                                                            echo "<option value=" .$cat_Id. ">" . $row['blinds_type_name'] . "</option>";
                                                        }

                                                    ?>

                                                </select>
                      </div>

                    </div>
                  </div>
                  <div class="row ml-4 mr-4" id="BlindsDiv">



                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">


              <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderFabric" id="nextButton" disabled>Next <i class="fas fa-angle-right"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!--            choose fabric-->
      <div class="modal bd-addOrderFabric-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg <modal-dia></modal-dia>log-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Choose Fabric (Walk-ins)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
              <div class="row">
                <div style="overflow-x:hidden">

                  <div class="row ml-4 mr-4 mt-4" id="fabricDiv">
                    <?php
//                                            $dbq = new DatabaseQuery(new DatabaseInfo);    
                                            $query = "select * from fabric WHERE status = 'available'";
                                            $result = $dbq->query($query);
                                            $ctr = 0;
                                            while($row = mysqli_fetch_array($result)){
                                                $dbImg = $dbq->getBlob($row['fabric_image']);
                                                echo "<div class='col-4 mb-2'>";
                                                    
//                                                echo "<div class='card' style='width:10rem;'>";
                                                 echo " <img width = 200 height = 200 class='card-img-top img-order' id = 'fabricChoice_$ctr' src='" . $dbImg . "' alt='Card image cap' onclick = 'fabricChoice(this.id)' style = 'object-fit: cover'>";
//                                                  echo "<div class='card-body'>";
                                                    echo "<h6 class='card-title mt-3'>" . $row['fabric_name'] . "</h6>";
//                                                  echo "</div>";
//                                                echo "</div>";
                                                     
                                                echo "</div>";
                                                $ctr++;
//                                                echo "<option value=" .$cat_Id. ">" . $row['blinds_type_name'] . "</option>";
                                            }
                                        

                                        ?>


                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">

              <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrder-modal-lg" id="backButton"><i class="fas fa-angle-left"></i> Back</button>
              <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderCustomer-modal-lg" id="nextButton2">Next <i class="fas fa-angle-right"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!--            customer sign in-->
      <div class="modal bd-addOrderCustomer-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Customer's Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px">
              <div class="container" id="modal-fabric">
                <ul class="nav nav-pills">
                  <li class="nav-item nav-item-order">
                    <a href="#login" id="navLogin" class="nav-link active" data-toggle="pill">Use account</a>
                  </li>
                  <li class="nav-item nav-item-order">
                    <a href="#fill-up" id="navFillup" class="nav-link" data-toggle="pill">Fill-up</a>
                  </li>
                </ul>

                <!--                            //-->
                <div class="tab-content clearfix">
                  <div class="tab-pane active" id="login">
                    <div class="col-5 mt-3">



                      <label for="email">Enter email</label>
                      <div class="form-inline">
                        <input type="email" class="form-control" id="orderEmail" placeholder="Email">
                        <button class="btn btn-secondary" id="findAccount">Go</button>
                      </div>
                      <hr>
                      <div id="showInfo">

                      </div>




                    </div>
                  </div>

                  <div class="tab-pane mt-3 mb-3" id="fill-up">
                    <div class="col-6">
                      <label for="name">Full name: </label>
                      <input type="text" class="form-control" name="ordername" id="ordername" placeholder="Full name">
                    </div>
                    <div class="col-8 mt-2">
                      <label for="address">Full Address: </label>
                      <input type="text" class="form-control" name="orderaddress" id="orderaddress" placeholder="Full address">
                    </div>
                    <div class="col-12 mt-3">
                      <h6>Contact Information:
                        <hr> </h6>
                      <div class="col-5">
                        <label for="contact">Email address: </label>
                        <input type="email" class="form-control" name="orderemail" id="orderemail" placeholder="Email">
                      </div>
                      <div class="col-6">
                        <label for="contact">Phone Number: </label>
                        <input type="number" class="form-control" name="ordercontact" id="ordercontact" placeholder="Phone number">
                      </div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderFabric-modal-lg" id="backButton2"><i class="fas fa-angle-left"></i> Back</button>

              <button class="btn btn-secondary" id="sendOrder" class="close" data-dismiss="modal" aria-label="Close" disabled>Done <i class="fas fa-check"></i></button>
            </div>
          </div>
        </div>
      </div>

      <!--END ADD ORDER-->

      <!-- MODAL INFORMATION-->


      <div class="modal fade bd-info-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Order Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-xl-6">
                  <!-- Customer's info-->

                  <div class="row">
                    <div class="col-12">
                      <label class="lead">Customer's Information</label>

                    </div>

                    <div class="col-5">
                      <label>Name:</label>
                    </div>
                    <div class="col-7">
                      <label>Melchora Aquino</label>
                    </div>
                    <div class="col-5">
                      <label>Address:</label>
                    </div>
                    <div class="col-7">
                      <label>Cavite</label>
                    </div>
                    <div class="col-5">
                      <label>Phone Number:</label>
                    </div>
                    <div class="col-7">
                      <label>0912390122</label>
                    </div>
                    <div class="col-5">
                      <label>Email Address:</label>
                    </div>
                    <div class="col-7">
                      <label>melchora_kkk@gmail.com</label>
                    </div>
                  </div>
                  <hr>
                  <!--Blinds information-->
                  <div class="row">
                    <div class="col-12">
                      <label class="lead">Blind's Information</label>

                    </div>
                    <div class="col-5">
                      <label>Type of Blind:</label>

                    </div>
                    <div class="col-7">
                      <label>Roller Blinds</label>

                    </div>
                    <div class="col-5">
                      <label>Fabric Type:</label>

                    </div>
                    <div class="col-7">
                      <label>Pattern</label>

                    </div>
                    <div class="col-5">
                      <label>Size:</label>

                    </div>
                    <div class="col-7">
                      <label>Medium</label>

                    </div>
                    <div class="col-5">
                      <label>Color (Hex):</label>
                    </div>
                    <div class="col-7">
                      <div style="width:10px; height:10px; min-height: 100%; position: fixed"><i style="color:#5e6c86;" class="fa fa-square"></i></div><label style="margin-left:18px">#5e6c86</label>
                    </div>

                  </div>
                  <hr>
                  <!--Schedule information-->
                  <div class="row">
                    <div class="col-12">
                      <label class="lead">Visitation Information</label>
                    </div>
                    <div class="col-5">
                      <label>Visitation Date:</label>

                    </div>
                    <div class="col-7">

                      <input type="date" value="2011-08-19" id="changeDate" class="form-control" disabled>
                      <button class="btn btn-default" id="change">Change</button>
                    </div>
                    <div class="col-5">
                      <label>Visitation Address:</label>

                    </div>
                    <div class="col-7">
                      <label>Batangas City, Batangas</label>
                    </div>
                  </div>

                </div>
                <div class="col-xl-6 col-sm-12 col-12">
                  <div class="row">
                    <div class="col">
                      <image src="images/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg" class="img-thumbnail img-fluid float-left"></image>
                    </div>
                  </div>

                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary">Save Order</button>

              <button class="btn btn-warning">Cancel Order</button>
            </div>
          </div>
        </div>
      </div>
      <!--end view-->


      <!--           feed-->
      <div class="feedBtn">

        <a class="text-primary display-4 slide-toggle"><i class="fas fa-comment-alt"></i></a>
      </div>

      <!--            FEEDBACK-->
      <div class="container">
        <div class="row chat-window col-xs-1 col-md-3" id="chat_window_1" style="margin-left:10px;">
          <div class="col-10 col-md-12 ml-5" style="height:">
            <div class="panel panel-default">
              <div class="panel-heading top-bar ">
                <!---->
                <div class="col-md-8 col-xs-8">
                  <span class="">
                                        <p id="feed" class="h6">FEEDBACKS</p><a href="#" class="hide"></a>
                                        
                            
                            </span>

                </div>
                <div class="col-md-4 col-xs-4" style="text-align: right;">
                  <a href="#"><span id="minim_chat_window" class="float-right icon_minim"></span></a>
                </div>
              </div>
              <div class="panel-body msg_container_base">

                <div class="row <m></m>sg_container base_receive">
                  <div class="col-md-12 col-xs-11">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                </div>
                <hr>
                <!--                        -->
                <div class="row msg_container base_receive">
                  <div class="col-md-12 col-xs-11">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                </div>
                <hr>
                <!--                        -->
                <div class="row msg_container base_receive">
                  <div class="col-md-12 col-xs-11">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                </div>
                <hr>
                <!--                        -->
                <div class="row msg_container base_receive">
                  <div class="col-md-12 col-xs-11">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                </div>
                <hr>
                <!--                        -->



              </div>

            </div>
          </div>
        </div>


      </div>


      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Adam Arc Blinds And Decors 2018</small>
          </div>
        </div>
      </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <!--            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->
  <!-- Page level plugin JavaScript-->
  <!--            <script src="vendor/chart.js/Chart.min.js"></script>-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="js/sb-admin-datatables.min.js"></script>
  <!--            <script src="js/sb-admin-charts.min.js"></script>-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script type="text/javascript">
    //                var boxWidth = $("#chat_window_1").width();
    $(document).ready(function() {
      //                    $("#chat_window_1").animate({
      //                        width: 0
      //                    });
      $("#chat_window_1").animate({
        width: 0
      });
      $(".slide-toggle").click(function() {
        $("#chat_window_1").animate({
          width: "toggle"
        });
      });
      $(".hide").click(function() {
        $("#chat_window_1").animate({
          width: 0
        });
      });
      $v = 0;
      $v += 1;
      $("#checkAll").click(function() {
        $("input:checkbox").prop('checked', this.checked);
      });

      //                    add and edit blinds

      //            $('#blindFile').change(function() {
      //                AddImg(this, '#blindsImg');
      //                $('#default-img').addClass("d-none");
      //                $('#addBlind').removeClass("offset-2");
      //
      //
      //
      //            });
      //            
      //            $('#view-Thumbnail').on('click', function() {
      //                $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
      //                $('#enlargeImageModal').modal('show');
      //            });
      //
      //            //                    add new order
      //            $("#change").click(function() {
      //                $("#changeDate").removeAttr('disabled');
      //            });

      $('#nextButton').click(function() {
        $('.bd-addOrder-modal-lg').modal('hide');
        $('.bd-addOrderFabric-modal-lg').modal('show');
      });
      $('#backButton').click(function() {
        $('.bd-addOrderFabric-modal-lg').modal('hide');
        $('.bd-addOrder-modal-lg').modal('show');

      });
      $('#backButton2').click(function() {
        $('.bd-addOrderVisit-modal-lg').modal('hide');
        $('.bd-addOrderFabric-modal-lg').modal('show');

      });
      $('#nextButton2').click(function() {
        $('.bd-addOrderFabric-modal-lg').modal('hide');
        $('.bd-addOrderVisit-modal-lg').modal('show');
      });


      $("#addBlinds").click(function() {
        $a = $("#blindCategory").val();
        loadBlinds($a);
      });

      $("#blindCategory").change(function() {
        loadBlinds($(this).val());
      });
      //            $('#blindsChoice_1').on("click", function(e) {
      //                alert($(e.target).attr("class"));
      //            });

      $(".bd-addOrder-modal-lg").on('hidden.bs.modal', function(event) {
        $("#nextButton").attr('disabled', 'disabled');
        blindsChoices = [];
        $(".img-order").removeClass("border-selected");
        //                alert("AS");

      });
      $(".bd-addOrderCustomer-modal-lg").on('hidden.bs.modal', function(event) {
        $("#ordercontact").val("");
        $("#ordername").val("");
        $("#orderaddress").val("");
        $("#orderemail").val("");
        $("#orderEmail").val("");
        $("#showInfo").html("");


      });

      $("#findAccount").click(function() {
        $email = $("#orderEmail").val();
        if (isValidEmailAddress($email)) {
          $.ajax({
            type: "GET",
            url: "findAccount.php",
            dataType: "text",
            data: {
              "email": $email

            },
            success: function(data) {
              //                            alert(data);

              if (data != "No such account") {
                $("#sendOrder").removeAttr("disabled");
                $("#showInfo").html(data);
              } else {
                alert(data);
              }


            }

          });

        } else {
          $("#orderEmail").css({
            "border": "3px solid red",
            "border-radius": "5px"
          }).prop("placeholder", "Invalid email!");;

        }


      });
      $("#navLogin").click(function() {
        $("#sendOrder").attr("disabled", "disabled");
        //                $("#orderEmail").val("");

      });
      $("#navFillup").click(function() {
        $("#sendOrder").attr("disabled", "disabled");
        $("#orderEmail").val("");
        $("#showInfo").html("");
        $("#ordercontact").val("");
        $("#ordername").val("");
        $("#orderaddress").val("");
        $("#orderemail").val("");

      });
      $("#ordercontact, #ordercontact, #orderaddress, #orderemail ").change(function() {
        if ($("#ordercontact").val() != "" && $("#ordercontact").val() != "" && $("#orderaddress").val() != "" && $("#orderemail").val() != "") {
          $("#sendOrder").removeAttr("disabled");
        }


      });
      $("#ordercontact").change(function() {
        if (!$(this).val().match('[0-9]{10}')) {
          $(this).css("outline", "5px solid red");


        } else {
          $(this).css("outline", "none");
        }
      });
      $("#orderemail").change(function() {
        $email = $(this).val();
        if (!isValidEmailAddress($email)) {
          $(this).css("outline", "5px solid red");


        } else {
          $(this).css("outline", "none");
        }
      });



      $("#sendOrder").click(function() {
        $accountEmail = $("#orderEmail").val();
        $walkinEmail = $("#orderemail").val();

        alert("Order: " + blindsChoices);
        alert("Fabric: " + fabricChoicesPrev);
        //                alert($accountEmail);
        //
        //                blindsChoices;

        //                if ($accountEmail != "") {
        //                    if ($asEase) {
        //                        $.ajax({
        //                            type: "GET",
        //                            url: "insertOrder.php",
        //                            dataType: "text",
        //                            data: {
        //                                "email": $accountEmail
        ////                                "newAddress": "asease"
        //
        //                            },
        //                            success: function(data) {
        //                            
        //                                alert(data);
        //
        //                            }
        //
        //                        });
        //                    } else {
        //                        alert("Change!");
        //                    }
        //
        //
        //                } else {
        //                    alert("walkinEmail");
        //                }

      });

      var $asEase = true;
      var $newAddress
      $(document).on('change', '#inputChangeAddress', function() {
        $newAddress = $(this).val();
        if ($newAddress != "") {
          $asEase = false;
        } else {
          $asEase = true;
        }
      });



    });

    function orderLogin() {

    }

    function toggleClass() {

      //            alert("ASD");
      document.getElementById("inputChangeAddress").classList.toggle("d-none");
    }

    function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(emailAddress);
    }
    //
    //        function isValidPhoneNumber(number) {
    //            if (number.length >= 11) {
    //                var pattern = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    //                return pattern.test(number);
    //            } else {
    //                return false;
    //            }
    //        }
    //


    var blindsChoices = [];

    function blindsChoice(id) {

      var index = blindsChoices.indexOf(id);
      if (index >= 0) {
        blindsChoices.splice(index, 1);


      } else {

        blindsChoices.push(id);


      }

      if (blindsChoices.length > 0) {
        document.getElementById("nextButton").disabled = false;
      } else {
        document.getElementById("nextButton").disabled = true;
      }
      document.getElementById(id).classList.toggle("border-selected");


    }


    var fabricChoices = "";
    var fabricChoicesPrev = "";

    function fabricChoice(id) {

      var currid = (fabricChoicesPrev == id) ? "" : id;
      $("img").removeClass("border-selected"); //loop or method


      if (currid != "") {
        document.getElementById(currid).classList.add("border-selected");
        fabricChoicesPrev = id;
      }

    }

    function loadBlinds($id) {
      $.ajax({
        type: "GET",
        url: "displayModalBlindsByCategory.php",
        dataType: "text",
        data: {
          "id": $id

        },
        success: function(data) {

          $("#BlindsDiv").html(data);

        }

      });
      //                    alert($img);
      //                    var xhttp = new XMLHttpRequest();
      //                    xhttp.onreadystatechange = function() {
      //                        if (xhttp.readyState == 4 && xhttp.status == 200) {
      ////                            alert(xhttp.responseText);
      //                            $("#BlindsDiv").html(xhttp.responseText);
      //                        }
      //                    };
      //                    xhttp.open("GET", "displayModalBlindsByCategory.php?id =" + $id, true);
      //                    xhttp.send();
    }
    //
    //        function AddImg(input, imgs) {
    //
    //            for (var i = 0; i < input.files.length; i++) {
    //                if (input.files[i]) {
    //                    var reader = new FileReader();
    //
    //                    reader.onload = function(e) {
    //
    //                        $(imgs).attr('src', e.target.result);
    //
    //
    //                    }
    //                    reader.readAsDataURL(input.files[i]);
    //                }
    //            }
    //        }

  </script>

</body>

</html>
