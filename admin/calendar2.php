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




  <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../clockpicker/src/clockpicker.js"></script>
  <link rel="stylesheet" href="../clockpicker/src/clockpicker.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <style>
    table td:hover {
      background-color: aquamarine;
    }

  </style>
  <script>
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


      mm += bn;
      if (mm >= 12 || mm <= 0) {
        yyyy += bn;
        mm = (mm >= 12) ? 1 : 12;


      }



      //            alert(mm);

      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          document.getElementById("calHolder").innerHTML = xhttp.responseText;


        }
      };
      xhttp.open("GET", "otherCalendar.php?year=" + yyyy + "&month=" + mm, true);
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
      var custid = document.getElementById("custID");
      var custaddress = document.getElementById("custAddress");

      custid.value = "";
      custid.disabled = rbCheck;
      custaddress.value = "";
      custaddress.disabled = rbCheck;

    }


    function submitVisitation() {

      var custid = document.getElementById("custID").value;
      var custaddress = document.getElementById("custAddress").value;
      var timeFrom;

      var selectedTime = $("#textTime").val();
      if (custid.trim() == "" || custaddress.trim() == "" || parseInt(scDate) == 0) {
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
      xhttp.open("GET", "dbCal.php?custid=" + custid + "&custaddress=" + custaddress + "&schedDate=" + scDate + "&fromTime=" + timeFrom, true);
      xhttp.send();



    }

    function getValCheck(thisVal) {
      checkVal = thisVal;
    }

    function schedClick(ito) {
      var tempID = ito.getAttribute("data-sched");
      alert(tempID);
    }

  </script>


</head>

<body onload="nextMonth(0)">


  <?php
  
  if (isset($_SESSION["current_user"]))
  {
    $current_user = $_SESSION["current_user"];
    
  }
  else
  {
    $current_user = "Login";
  }
      
  include("../pages/header.php");  
  ?>



    <div class="container">
      <div class="row">


        <div class="col-8">
          <div id="calHolder"></div>
        </div>

        <div class="col-4">

          <h4>Select Visitation Hours</h4>

          <form>
            <div class="form-group row">
              <label for="custID" class="col-3 col-form-label col-form-label-sm">Customer ID</label>
              <div class="col-sm-9">
                <input type="text" class="form-control form-control-sm" id="custID">
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
                <label for="custID" class="col-3 col-form-label col-form-label-sm">Time</label>


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


    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <script type="text/javascript" src="../js/allscript.js"></script>

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


</body>


</html>
