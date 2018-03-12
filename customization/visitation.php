<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link href="css/visitation.css" type="text/css" rel="stylesheet" />
    <script>
        function getSize() {
            divCalHeight = $("#calendar").height();
            divCalLeft = $("#calendar").position();
            $("#scheds").height(divCalHeight);
            $("#scheds").position(divCalLeft.left);


        }

        function datesHover(id, stat) {
            if (stat == 1 && id != "li-") {
                document.getElementById(id).style.backgroundColor = "red";
            } else {
                document.getElementById(id).style.backgroundColor = "#DDD";
            }

        }

        function datesClicked(id) {
            date = document.getElementById(id).childNodes.item(0).nodeValue;
            document.getElementById("dDate").innerHTML = date;
        }

    </script>


</head>

<body onload="getSize()">

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <div class="d-flex w-100">
            <a class="navbar-brand" href="#">Adam Arc</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#">Customize</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#">Catalogue</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item pr-4 active">
                    <a class="nav-link" href="#">About <span class="sr-only">About</span></a>
                </li>
                <li class="nav-item pr-4">
                    <button class="btn btn-warning" type="submit">Login</button>
                </li>
            </ul>
        </div>
    </nav>



    <?php
			include 'calendar.php';
			 
			$calendar = new Calendar();
			 
			echo $calendar->show();
			?>

        <?php include("include/footer.php"); ?>

</body>

</html>
