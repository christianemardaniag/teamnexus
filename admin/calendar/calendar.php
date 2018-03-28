<html>

<head>


    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

        $(document).ready(function() {
            $("[data-toggle='tooltip']").tooltip();
        });

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
            var rbtn = document.getElementsByName("visitation-hours");
            var selectedDate = new Date(scDate);
            var today = new Date();
            var stringAV, stringAVColor, rbCheck;
            //check if selected date is yesterday

            rbCheck = (selectedDate < today) ? true : false;


            for (var i = 0; i < rbtn.length; i++) {
                document.getElementById("custID").disabled = rbCheck;
                document.getElementById("custID").value = "";

                document.getElementById("custAddress").disabled = rbCheck;
                document.getElementById("custAddress").value = "";
                rbtn[i].disabled = rbCheck;
                rbtn[i].checked = false;

            }

            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var av;
                    var defaultCheck = ["08", "10", "12", "02"];

                    if (xhttp.responseText != "") {
                        av = xhttp.responseText.split(",");
                        for (var i = 0; i < av.length; i++) {

                            document.getElementById("tr" + av[i]).disabled = true;

                            var index = defaultCheck.indexOf(av[i]);
                            defaultCheck.splice(index, 1);

                        }


                    }
                    if (defaultCheck.length > 0) {
                        document.getElementById("tr" + defaultCheck[0]).checked = true;
                        getValCheck(defaultCheck[0]);

                    }




                }
            };

            xhttp.open("GET", "checkAvailable.php?datePicked=" + scDate, true);
            xhttp.send();
        }


        function submitVisitation() {

            var custid = document.getElementById("custID").value;
            var custaddress = document.getElementById("custAddress").value;
            var timeFrom, timeTo;

            timeFrom = document.getElementsByClassName("tdFrom" + checkVal)[0].childNodes[0].nodeValue;
            timeTo = document.getElementsByClassName("tdTo" + checkVal)[0].childNodes[0].nodeValue;

            xhttp = new XMLHttpRequest("tdFrom" + checkVal);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert(xhttp.responseText);
                    alertMe(selectedTD);
                    nextMonth(0);

                }
            };
            xhttp.open("GET", "dbCal.php?custid=" + custid + "&custaddress=" + custaddress + "&schedDate=" + scDate + "&fromTime=" + timeFrom + "&toTime=" + timeTo, true);
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


    <h2>Month Today</h2>

    <div class="container">
        <div class="row">


            <div class="col-8">
                <div id="calHolder"></div>
            </div>
<!--
            <div class="col-4">
                <h4>Select Visitation Hours</h4>
                <form>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visitation-hours" id="tr08" value="08" onclick=getValCheck( "08") checked>
                        <label class="form-check-label" for="tr08"><span class = "tdFrom08">08:00</span> am - <span class = "tdTo08">10:00</span> am</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visitation-hours" id="tr10" value="10" onclick=getValCheck( "10")>
                        <label class="form-check-label" for="tr10">
    <span class = "tdFrom10">10:00</span> am - <span class = "tdTo10">12:00</span> pm
  </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visitation-hours" id="tr12" value="12" onclick=getValCheck( "12")>
                        <label class="form-check-label" for="tr12">  <span class = "tdFrom12">12:00</span> pm - <span class = "tdTo12">02:00</span> pm
  </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="visitation-hours" id="tr02" value="02" onclick=getValCheck( "02")>
                        <label class="form-check-label" for="tr02">  <span class = "tdFrom02">02:00</span> pm - <span class = "tdTo02">04:00</span> pm
  </label>
                    </div>

                </form>
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
                    <button type="button" class="btn btn-info btn-block btn-sm" onclick="submitVisitation()">Reserved</button>
                </form>

            </div>
-->
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>




</body>

</html>
