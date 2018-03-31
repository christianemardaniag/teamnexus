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


  <style>
    table td:hover {
      background-color: aquamarine;
    }

  </style>

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
        <div class="col-12">
          <h2>View or Set Visitation</h2>

          <ul class="nav nav-pills">
            <li class="nav-item">
              <a data-toggle="pill" class="nav-link active" href="#menuView" onclick="nextMonth(0)">View</a>
            </li>
            <li class="nav-item">
              <a data-toggle="pill" class="nav-link" href="#menuSet" onclick="nextMonth(0)">Set</a>
            </li>

          </ul>

          <div class="tab-content">

            <div id="menuView" class="tab-pane active">
              <h3>Scheduled Visitation</h3>
              <div class="row">
                <div class="col-8">
                  <div class="calendarContainer">

                  </div>
                </div>
                <!--id="visitation-list"-->
                <div class="col-4 mt-5">
                  <ul class="list-group" id="inbox">
                    <li class="list-group-item" id="">
                      <span class="lead"><b>Appointment</b></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">
                      <span class="col">Visitation ID:</span>
                      <span class="col lead" id = 'spanvisitationid'></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">
                      <span class="col">Visitation Address:</span><br>
                      <span class="col lead" id = 'spanvisitationaddress'></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">
                      <span class="col">Visitation Date:</span><br>
                      <span class="col lead" id = 'spanvisitationdate'></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">
                      <span class="col">Visitation Time:</span>
                      <span class="col lead" id = 'spanvisitationtime'></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">
                      <span class="col">Customer Name:</span>
                      <span class="col lead" id = 'spanvisitationname'></span>
                    </li>
                    <li class="list-group-item" id="feedbackMessCont">

                      <span class="float-right"><button id="cancelVisit" class="btn btn-secondary" onclick = "cancelVisitation()">Cancel Appointment</button></span>
                    </li>


                  </ul>
                </div>
              </div>
            </div>
            <div id="menuSet" class="tab-pane fade">
              <h3>Set Visitation</h3>
              <div class="row">
                <div class="col-8">
                  <div class="calendarContainer">
                  </div>
                </div>

                <div class="col-4 mt-5">
                 <h5>Set Visitation</h5>
                 <hr>
                  <form>
                    <div class="form-group row">
                      <label for="email" class="col-3 col-form-label col-form-label-sm">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="custEmail">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="address" class="col-3 col-form-label col-form-label-sm">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="custAddress">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="input-group clockpicker">
                        <label for="custTime" class="col-3 col-form-label col-form-label-sm">Time</label>


                        <span class="input-group-append col-9">
                          <input type="text" class="form-control form-control-sm" value="" id="textTime">
                            <span class="input-group-text">

                          <span class="fas fa-clock"></span>
                        </span>
                        </span>
                      </div>
                    </div>


                    <button type="button" class="btn btn-info btn-block btn-sm" onclick="submitVisitation()">Reserved</button>
                  </form>
                </div>
              </div>

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
  <script type="text/javascript" src="clockpicker/src/clockpicker.js"></script>
  <link rel="stylesheet" href="clockpicker/src/clockpicker.css" />


  <script>
    $(document).ready(function() {
      var timeNow = new Date();
      var currentTime = timeNow.getHours() + ":" + timeNow.getMinutes();
      $("#textTime").val(currentTime);
      $("[data-toggle='tooltip']").tooltip();

      $('.clockpicker').clockpicker({
        placement: 'bottom',
        align: 'right',
        afterDone: function() {
          var selectedTime = $("#textTime").val();
          selectedTime = parseInt(selectedTime);
          if (selectedTime < 8 || selectedTime > 16) {
            alert("time must only be 8am to 5pm");
            return;
          }
        },
        donetext: 'Set'
      });


    });

  </script>

  <script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    var xhttp;
    var selectedTD;

    $(document).ready(function() {



      $('.calendarContainer').load("calendar/otherCalendar.php?year=" + yyyy + "&month=" + mm)



    });





    var scDate;
    var checkVal;

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    var xhttp;
    var selectedTD;



    function nextMonth(bn) {
      //            alert(bn);
      if (bn == 0) {
        mm = today.getMonth() + 1;
        yyyy = today.getFullYear();
      }

      mm += bn;
      if (mm >= 12 || mm <= 0) {
        yyyy += bn;
        mm = (mm >= 12) ? 1 : 12;


      }



      //            alert(mm);

      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {

          document.getElementsByClassName("calendarContainer")[0].innerHTML = xhttp.responseText;

          document.getElementsByClassName("calendarContainer")[1].innerHTML = xhttp.responseText;

        }
      };
      xhttp.open("GET", "calendar/otherCalendar.php?year=" + yyyy + "&month=" + mm, true);
      xhttp.send();
    }



    function alertMe(dt) {

      scDate = dt.getAttribute("data-tday");
      selectedTD = dt;
      var selectedDate = new Date(scDate);
      var today = new Date();
      var stringAV, stringAVColor, rbCheck;
      //check if selected date is yesterday

      rbCheck = (selectedDate < today) ? true : false;
      document.getElementById("textTime").disabled = rbCheck;
      document.getElementById("textTime").value = "";
      var custEmail = document.getElementById("custEmail");
      var custaddress = document.getElementById("custAddress");

      custEmail.value = "";
      custEmail.disabled = rbCheck;
      custaddress.value = "";
      custaddress.disabled = rbCheck;

    }


    function submitVisitation() {

      var custemail = document.getElementById("custEmail").value;
      var custaddress = document.getElementById("custAddress").value;
      var timeFrom;

      var selectedTime = $("#textTime").val();
      if (custemail.trim() == "" || custaddress.trim() == "" || parseInt(scDate) == 0) {
        alert("select date and fill up info!");
        return;
      }
      selectedTime = parseInt(selectedTime);
      if (selectedTime < 8 || selectedTime > 16) {
        alert("time must only be 8am to 5pm");
        return;
      }

      if (isNaN(parseInt(scDate))) {
        alert("select date!");
        return;
      }

      timeFrom = document.getElementById("textTime").value;
      //timeTo = document.getElementsByClassName("tdTo" + checkVal)[0].childNodes[0].nodeValue;

      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          alert(xhttp.responseText);
          alertMe(selectedTD);
          nextMonth(0);

        }
      };
      xhttp.open("GET", "calendar/dbCal.php?custemail=" + custemail + "&custaddress=" + custaddress + "&schedDate=" + scDate + "&fromTime=" + timeFrom, true);
      xhttp.send();



    }

    function getValCheck(thisVal) {
      checkVal = thisVal;
    }
    var currentVisitID = "";
    function schedClick(ito) {
      var tempID = ito.getAttribute("data-sched");
      currentVisitID = tempID;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          
          var arrInfo = xhttp.responseText.split("~");
         
          document.getElementById("spanvisitationid").innerHTML = arrInfo[0];
          document.getElementById("spanvisitationaddress").innerHTML = arrInfo[1];
          document.getElementById("spanvisitationdate").innerHTML = arrInfo[2];
          document.getElementById("spanvisitationtime").innerHTML = arrInfo[3];
          document.getElementById("spanvisitationname").innerHTML = arrInfo[4];
          

        }
      };
      xhttp.open("GET", "getSchedInfo.php?id=" + tempID, true);
      xhttp.send();

    }
    
        function cancelVisitation() {
      
        if (currentVisitID == "")
          {
         
            alert("Select schedule first!");
            return;
          }
         
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          
            
          alert(xhttp.responseText);
          currentVisitID = "";
//          
          
          if (xhttp.responseText == "Cancelled")
            {
              alert("low!");
               window.location.replace("feedback.php");
         
            }
          nextMonth(0);
        }
      };
      xhttp.open("GET", "cancelVisitation.php?id=" + currentVisitID, true);
      xhttp.send();

    }


  </script>

</body>

</html>
