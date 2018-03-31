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

    <?php 
        include("include/Navigation.php");
    ?>

    <!--End Navigation-->

    <!--    <span><a href="#" class="text-primary"><i class="far fa-edit"></i></a></span>-->
    <div class="content-wrapper">
        <div class="row fixed-position">
            <div class="col-3" id="inboxContainer">
                <ul class="list-group" id="inbox">
                    <li class="list-group-item" id="">
                        <span class="float-right"><a href="#" class="text-primary" id="compose"><i class="far fa-edit fa-lg"></i></a></span>
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
                    <li class="list-group-item" id="feedbackMessCont">
                        <a class="dropdown-item" href="#">
                              <strong>John Doe</strong>
                              <span class="small float-right text-muted">11:21 AM</span>
                              <div class="dropdown-message small text-truncate">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                    </li>
                </ul>
            </div>
            <!--            editorrr-->
            <div class="col-9 d-none" data="0" id="messageContainer">
                <!--                               users' messages-->

                <button class="btn btn-primary float-right">Reply</button>
                <span class="lead "><b>Message from: Mr. John Foe</b></span><br>
                <span class="small text-primary">January 20, 2018 11:01 am</span>
                <hr>
                <p id="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci. Etiam nisi turpis, eleifend nec tellus id, efficitur pellentesque dolor. Proin vitae massa a augue sagittis vulputate. Duis vel fringilla magna, sit amet vestibulum enim. Fusce laoreet accumsan nisl eu sagittis. Morbi hendrerit sapien eget efficitur imperdiet. Aenean vitae nisl id est placerat congue a et nisi. Suspendisse vitae quam ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eu risus lacus. Ut tristique libero eget est dictum, commodo malesuada orci elementum. Proin molestie eu mi in tempus.</p>
                <hr>

            </div>
            <div class="col-9 d-none" data="0" id="messageCreate">
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
                <div class="col-12">
                    <div id="froala-editor">
                    </div>
                    
                    <br>
                    <br>
                    <hr>
                    <div class="float-right">
                        <button class="btn btn-primary" id="Send"><i class="fas fa-envelope"></i> Send</button>
                        <button class="btn btn-info"><i class="fas fa-trash"></i> Discard</button>
                    </div>
                </div>
            </div>





        </div>
        <!--                        reply-->
        <!--
                    <div class="row">
                      
                        <div class="col-12 card p-3">
                            
                        </div>
                    </div>
-->


    </div>

    <!--
    <div class="row">
        <div class="col-10">

            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
-->



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
            
            
            
            $('#compose').click(function(){
                $stat = $('#messageCreate').attr("data");
                if($stat>0){
                    $("#messageCreate").addClass('d-none');
                   
                    $('#messageCreate').attr("data","0");
                }
                else{
                    $("#messageCreate").removeClass('d-none');
                    $("#messageContainer").addClass('d-none');
                    $('#messageCreate').attr("data","1");
                }
            });
            
            $("ul#inbox li div").click(function(){
                
                $stat1 = $('#messageContainer').attr("data");
                if($stat1>0){
                    
                    $("#messageContainer").addClass('d-none');
                 
                    $('#messageContainer').attr("data","0");
                }
                else{
                    $("#messageContainer").removeClass('d-none');
                     $("#messageCreate").addClass('d-none');
                    $('#messageContainer').attr("data","1");
                }
               
            });

        });

    </script>

</body>

</html>
