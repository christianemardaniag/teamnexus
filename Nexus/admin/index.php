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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#"><image src="images/thumnail-logo.png" class="img-fluid" alt="Adam Arc"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blinds">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-th-large"></i>
            <span class="nav-link-text">Blinds</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text">Orders</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-images"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customization">
                    <a class="nav-link" href="#">
            <i class="fas fa-fw fa-expand"></i>
            <span class="nav-link-text">Customization</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Visitations">
                    <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Visitations</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Feedbacks">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Feedbacks</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users Accounts">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users Accounts</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-chart-line"></i>
            <span class="nav-link-text">Reports</span>
          </a>
                </li>

            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">Orders Notifications:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <!--        -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Visitations Alerts:
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all alerts</a>
                    </div>
                </li>
                <!--        user accounts-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user"></i>
           
          </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">Admin Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <i class="fas fa-edit mr-1"></i>Edit Profile
            </a>


                        <div class="dropdown-divider"></div>
                        <div class="dropdown-footer float-right"><a class="dropdown-item text-danger" href="#">Logout</a></div>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 New Messages!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 New Tasks!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">123 New Orders!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">13 New Tickets!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                    </div>
                </div>
            </div>

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
            <!--            <script src="vendor/datatables/jquery.dataTables.js"></script>-->
            <!--            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>-->
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <!--            <script src="js/sb-admin-datatables.min.js"></script>-->
            <!--            <script src="js/sb-admin-charts.min.js"></script>-->
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

            <script type="text/javascript">
                //                var boxWidth = $("#chat_window_1").width();
                $(document).ready(function() {
                    //                    $("#chat_window_1").animate({
                    //                        width: 0
                    //                    });
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

                });

            </script>
        </div>
    </div>
</body>

</html>
