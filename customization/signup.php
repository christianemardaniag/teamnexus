<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/signup.css">


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


    <script>
        //functions
        var proceed = 0;
        var passlenVerify = false;
        var passVerify = false;

        function pass_verify() {
            $("#verify_pass").blur(function() {
                var pass = $("#password").val();
                var verify = $("#verify_pass").val();


                if (pass == verify) {
                    $(this).css("background-color", "white");
                    passVerify = true;

                } else if (pass != verify) {
                    $(this).css("background-color", "#ff7676");
                    passVerify = false;
                }
            });
        }

        function pass_len() {
            $("#password").blur(function() {
                if ($(this).val().length < 6) {
                    $(this).css("background-color", "#ff7676");
                    passlenVerify = false;

                } else if ($(this).val().length >= 6) {
                    $(this).css("background-color", "white");
                    passlenVerify = true;
                }

            });

        }

        function validate(dis) {
            if ($(dis).val() == "") {
                $(dis).css("border", "1.2px solid red");
            } else {
                $(dis).css({
                    "border-color": "blue",
                    "border-weight": "10px"
                });
            }
        }

        function check() {

            $("input").each(function() {
                var element = $(this);
                if (element.val() == "") {
                    //isValid = false;
                    var dis = element.attr('id');
                    //                    alert(dis);
                    $('#' + dis).css("border", "1.2px solid red").attr('placeholder', 'Please fill the field');
                } else if (element.val() != "") {
                    proceed += 1;

                }

            });
            if (proceed >= 7 && passlenVerify && passVerify) {
                insert_Data();

            }
        }

        function insert_Data() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                }
            };
            xhttp.open("GET", "save_signup.php?fname=" + fname + "&lname=" + lname + "&address=" + address + "&contact=" + contact + "&email=" + email + "&password=" + password, true);
            xhttp.send();

        }


        $(document).ready(function() {
            $("#fname").blur(function() {
                validate(this);
            });
            $("#lname").blur(function() {
                validate(this);
            });
            $("#address").blur(function() {
                validate(this);
            });
            $("#contact").blur(function() {
                validate(this);
            });
            $("#email").blur(function() {
                validate(this);
            });
            $("#password").blur(function() {
                validate(this);
            });

        });




        //verify password
        $(document).ready(function() {
            pass_verify();
            pass_len();

            //check password length (atleast 6 char)


        });

    </script>

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
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

    <image src="images/sign%20up.jpg" class="position-absolute img-fluid d-sm-block d-none"></image>
    <div class="container-fluid">

        <div class="row">
            <div class="col">
            </div>

            <div class="container col-sm-4">
                <div class="col-md-auto pt-5 pb-4">
                    <label class="label-create">CREATE YOUR <b class="text-success"t>CUSTOMER ACCOUNT</b></label><br/>

                    <form class="pt-3" style="color: white" method="POST" name="signup">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="First" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="Last" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Barangay, City/Municipality, Province">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Contact Number</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputCity">Password</label>
                            <input type="password" name="password" placeholder="Minimum of 8 characters" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputCity">Verify Password</label>
                            <input type="password" name="verify_pass" placeholder="" id="verify_pass" class="form-control">
                        </div>


                        <button type="button" id="register" class="btn btn-primary form-control" onclick="check()">Register</button>

                    </form>
                    <br/>
                </div>


            </div>

            <div class="col col-lg-1">


            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <div class="mx-0 ">
        <!--        <image class="img-fluid" src ="images/cc4463e72fd77fa986db196cc753e9aa--night-blinds-rolo.jpg"></image> -->
    </div>



    <?php include("include/footer.php"); ?>
</body>

</html>
