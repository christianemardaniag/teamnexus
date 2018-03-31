<html>

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


</head>


<body>

    <div class="container">
        <div style="position: relative; top: 200px; left: 30%;">
            <div style='width: 23rem;'>
                <div class="card">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <div class="col-12">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            <input type="password" class="form-control mt-2 mb-4" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="btn btn-primary float-right" id="btnLogin">Login</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
        $(document).ready(function() {
            $("#btnLogin").click(function() {
                
                $thisUsername = $("#username").val();
                $thisPassword = $("#password").val();
                
                $.ajax({
                    type: "GET",
                    url: "loginAdmin.php",
                    dataType: "text",
                    data: {
                        "username": $thisUsername,
                        "password": $thisPassword
                        

                    },
                    success: function(data) {
//                        alert(data);
                        if(data == "failed"){
                            $($thisUsername).addClass("is-invalid");
                            $($thisPassword).addClass("is-invalid");
                        }
                        else{
                            $($thisUsername).removeClass("is-invalid");
                            $($thisPassword).removeClass("is-invalid");
                        }


                    }

                });
            });
            
            
       
            
            
        });

    </script>

</body>

</html>
