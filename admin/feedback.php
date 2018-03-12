<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Adam Arc Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <!--    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!--    froala-->
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">
            <image src="images/thumnail-logo.png" class="img-fluid" alt="Adam Arc" />
        </a>
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
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-6"><i class="fa fa-images"></i> Gallery</div>
                </div>

                <div class="card-body">
                    <div class="row fixed-position">
                        <div class="col-4" id="inboxContainer">
                            <ul class="list-group" id="inbox">
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>
                                <li class="list-group-item" id="feedbackMessCont">
                                    <a class="dropdown-item" href="#">
                                      <strong>John Doe</strong>
                                      <span class="small float-right text-muted">11:21 AM</span>
                                      <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                                    </a>
                                </li>


                            </ul>

                        </div>
                        <div class="col-8">

                            <div class="col-8">
                                <!--                               users' messages-->
                                <div id="messageContainer">
                                    <span class="lead "><b>Message from: Mr. John Foe</b></span><br>
                                    <span class="small text-primary">January 20, 2018 11:01 am</span>
                                    <hr>
                                    <p id="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci. Etiam nisi turpis, eleifend nec tellus id, efficitur pellentesque dolor. Proin vitae massa a augue sagittis vulputate. Duis vel fringilla magna, sit amet vestibulum enim. Fusce laoreet accumsan nisl eu sagittis. Morbi hendrerit sapien eget efficitur imperdiet. Aenean vitae nisl id est placerat congue a et nisi. Suspendisse vitae quam ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eu risus lacus. Ut tristique libero eget est dictum, commodo malesuada orci elementum. Proin molestie eu mi in tempus.</p>
                                    <hr>
                                    <button class="btn btn-primary float-right">Reply</button>

                                </div>



                                <!--                       end hide-->

                            </div>

                        </div>




                    </div>
                    <!--                        reply-->
<!--
                    <div class="row">
                      
                        <div class="col-12 card p-3">
                            <div class="messageContainer">
                                Reply to Mr: John Doe
                                <hr>
                            </div>
                            <div class="card-body">
                                <div class="col-6">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><a href="#" class="text-dark">To</a></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Recepients" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" placeholder="Subject" aria-label="Subject" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div id="froala-editor">
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary" id="Send"><i class="fas fa-envelope"></i> Send</button>
                                        <button class="btn btn-info"><i class="fas fa-trash"></i> Discard</button>
                                 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
-->




                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-10">

                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>



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


    <!--    froala-->
    <!-- Include external JS libs. -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->


    <script type="text/javascript">
        $(document).ready(function() {

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
            $('div#froala-editor').froalaEditor({
                toolbarBottom: true,
                heightMin: 250,
                heightMax: 100000,

            });
            $('#cc,#bcc').click(function() {
                $('#' + this.id + "Div").removeClass('d-none');
            });

        });

    </script>

</body>

</html>
