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
  <!-- Navigation-->

  <?php 
        include("include/Navigation.php");
    ?>

  <!--End Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid mt-2">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
            <div class="mr-5"><span class="lead">1300</span> Total Accounts</div>
          </div>

        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <div class="col-6"><i class="fa fa-users"></i> Users Accounts</div>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><input type="checkbox" class="form-control" name="checkAll" id="checkAll" /></th>
                  <th>Email Address</th>
                  <th>Full Name</th>
                  <th>Contact Number</th>
                  <th>Address</th>
                  <th>User Status</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php
                                include("classes/DatabaseQuery.php");
                                $dbQ = new DatabaseQuery(new DatabaseInfo);
                                
                                $query = "select * from customer";
                                $res = $dbQ->query($query);
                                while($row = mysqli_fetch_array($res))
                                {
                                  $reverseBlock = ($row['user_status'] == "block") ? "unblock" : "block";
                                  echo "<tr>
                                    <td><input type='checkbox' name='check1' id='check1'></td>

                                    <td>".$row['email']."</td>
                                    <td>".$row['firstname']." ".$row['lastname']."</td>
                                    <td>".$row['contact']."</td>
                                    <td>".$row['address']."</td>
                                    <td id = 'tdcust".$row['customer_id']."'>".$row['user_status']."</td>
                                    <td class='text-center'><a href='#'id='dropdownMenuButton1'' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>&nbsp;<i class='fas fa-ellipsis-h'></i></a>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                            <a class='dropdown-item text-danger filter_inset btnBlock' data-toggle='modal' data-target='.bd-example-modal-lg' href='#' data-custid = '".$row['customer_id']."'><i class='fas fa-ban'></i><span id = 'acust".$row['customer_id']."'>$reverseBlock</span></a>
<!--                                            <a class='dropdown-item text-danger' href='#'><i class='fas fa-trash-alt'></i> Delete</a>-->

                                        </div>
                                    </td>
                                </tr>";
                                }
                              ?>



              </tbody>

              <tfoot>
                <tr>
                  <th></th>

                  <th>Email Address</th>
                  <th>Full Name</th>
                  <th>Contact Number</th>
                  <th>Address</th>
                  <th>User Status</th>
                  <th>Actions</th>


                </tr>
              </tfoot>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <!--            end table-->



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

          $('#blindFile').change(function() {
            AddImg(this, '#blindsImg');
            $('#default-img').addClass("d-none");
            $('#addBlind').removeClass("offset-2");



          });
          $("#editBlinds").click(function() {
            $(":disabled").removeAttr("disabled");
          });

          $(".btnBlock").click(function() {
          
            var id = $(this).data("custid");
            var tdBlock = $("#tdcust" + id).html();
            var isBlock = (tdBlock == "unblock") ? "block" : "unblock";
            

            $.ajax({
              type: "GET",
              url: "BlockOrUnblockUser.php",
              dataType: "text",
              data: {
                "id": id,
                "isBlock": isBlock
                

              },
              success: function(data) {
                  $("#tdcust" + id).html(isBlock);
                  $("#acust"+id).html(data);
                 
            
              }

            });

          });
          $(function() {
            $('#view-Thumbnail').on('click', function() {
              $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
              $('#enlargeImageModal').modal('show');
            });
          });
        });

        function AddImg(input, img) {

          for (var i = 0; i < input.files.length; i++) {
            if (input.files[i]) {
              var reader = new FileReader();

              reader.onload = function(e) {

                $(img).attr('src', e.target.result);


              }
              reader.readAsDataURL(input.files[i]);
            }
          }
        }

      </script>
    </div>
  </div>
</body>

</html>
