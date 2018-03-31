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
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-8">
                    <div id="calendarContainer">
                    </div>
                </div>
                <div class="col-4" id="visitation-list">
                    <ul class="list-group" id="inbox">
                        <li class="list-group-item" id="">
                            <span class="lead"><b>Appointment</b></span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            <span class="col">Visitation ID:</span>
                            <span class="col lead">0029201</span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            <span class="col">Visitation Address:</span><br>
                            <span class="col lead">Marilao, Bulacan</span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            <span class="col">Visitation Date:</span><br>
                            <span class="col lead">Tuesday, AUG 23, 2018</span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            <span class="col">Visitation Time:</span>
                            <span class="col lead">2:00pm - 4:00pm</span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            <span class="col">Customer Name:</span>
                            <span class="col lead">Nolasco, Efren</span>
                        </li>
                        <li class="list-group-item" id="feedbackMessCont">
                            
                            <span class="float-right"><button id="cancelVisit" class="btn btn-secondary">Cancel Appointment</button></span>
                        </li>
                        
                        
                    </ul>
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

    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        var xhttp;
        var selectedTD;

        $(document).ready(function() {



            $('#calendarContainer').load("calendar/otherCalendar.php?year=" + yyyy + "&month=" + mm)
          
               
        });



        function nextMonth(bn) {


            mm += bn;
            if (mm >= 12 || mm <= 0) {
                yyyy += bn;
                mm = (mm >= 12) ? 1 : 12;


            }

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("calendarContainer").innerHTML = xhttp.responseText;


                }
            };
            xhttp.open("GET", "calendar/otherCalendar.php?year=" + yyyy + "&month=" + mm, true);
            xhttp.send();
        }

        function schedClick(ito) {
            var tempID = ito.getAttribute("data-sched");
            alert(tempID);
        }

    </script>

</body>

</html>
