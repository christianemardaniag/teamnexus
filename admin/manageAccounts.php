<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->

<script src=../js/jquery-3.2.1.min.js></script>


    <link rel="stylesheet" href="../css/admin.css">
    <script>
        $(document).on('click', '.panel-heading', function(e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $('#feeds').addClass('fas fa-comment-alt');
                $('#feed').html("");

            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $('#feeds').removeClass('fas fa-comment-alt');
                $('#feed').html("FEEDBACKS");

            }
        });

        $(document).ready(function() {
            $('.dropdown-item').click(function() {
                $this = $(this).html();
                $('#dropdownMenuButton').html($this);
            });
            /*a*/

            $('[data-toggle="popover"]').popover();

            $("#notification").popover({
                html: true,
                //                content: '#popover_content_wrapper';
            });

            $('.popover-dismiss').popover({
                trigger: 'focus'
            });


            //fabricDiv
            //            <div class="col-3 mb-2">
            //               <image src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg"></image>
            //            </div>
            //            





            $('#blindFile').change(function() {
                readURL(this, '#blindsImg');
            });
            $('#viewblindFile').change(function() {
                readURL(this, '#viewblindsImg');
            });
            $('#fabricFile').change(function() {
                readURL(this, '#fabricImg');
            });


            /*Blinds add image*/
            //            $("#upfile1").click(function() {
            //                $("#file1").trigger('click');
            //            });
            //            $("#upfile1").hover(function() {
            //                $(this).css("color", "gray");
            //            });

            $("#editBlinds").click(function() {
                $(":disabled").removeAttr("disabled");
            });






        });
        $(document).ready(function(e) {
            $(".showonhover").click(function() {
                $("#uploadFabric").trigger('click');
            });
            $("#uploadFabric").change(function() {
                addFabric(this);
            });
            $('.your-checkbox').prop('indeterminate', true)
        });

        //        functions
        function readURL(input, img) {
            for (var i = 0; i < input.files.length; i++) {
                if (input.files[i]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {

                        $(img).attr('src', e.target.result);

                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }

        //        <div class="col-3 mb-2">
        //                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
        //                                        </div>

        function addFabric(input) {

            for (var i = 0; i < input.files.length; i++) {
                if (input.files[i]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {

                        $img = e.target.result


                        var newDiv = document.createElement("div");
                        newDiv.setAttribute('class', 'col-3 mb-2');

                        var img = document.createElement('image');
                        img.setAttribute('src', e.target.result);


                        img.setAttribute('class', 'img-fluid modalView float-left');
                        img.setAttribute('id', 'fabricImg');



                        newDiv.appendChild(img);
                        document.getElementById('fabricDiv').appendChild(newDiv);



                    }
                    reader.readAsDataURL(input.files[i]);

                }
            }
        }

    </script>


</head>

<body>


    <div class="container-fluid">

        <div class="row d-flex d-md-block flex-nowrap wrapper">

            <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show sticky-top" id="sidebar">
                <div class="list-group border-0 card text-center text-md-left show" style="background: linear-gradient(180deg, #202930 50%, #293a42 50%);">

                    <image src="../images/lettering.png" class="img-fluid w-50 ml-4 p-md-2" style="z-index:5;" alt="AdamArc"></image>

                    <a href="dashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-film ml-2"></i> <span class="d-none d-md-inline ml-2">Dashboard</span></a>

                    <a href="order.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clipboard ml-2"></i> <span class="d-none d-md-inline ml-2">Orders</span> </a>

                    <a href="blinds.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-th-large ml-2"></i> <span class="d-none d-md-inline ml-2">Blinds</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-image ml-2"></i> <span class="d-none d-md-inline ml-2">Template</span></a>

                    <a href="gallery.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-images ml-2"></i> <span class="d-none d-md-inline ml-2">Gallery</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th ml-2"></i> <span class="d-none d-md-inline ml-2">Notifications</span></a>
                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-calendar-alt ml-2"></i> <span class="d-none d-md-inline ml-2">Visitations</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                           <span class="fa-layers fa-fw ml-1">
                            <i class="fas fa-users"></i>
                             <i class="fas fa-cog fa-lg" data-fa-transform="right-7 down-6" style="color: #293a42"></i>
                            <i class="fas fa-cog fa-xs" data-fa-transform="right-10 down-8"></i>
                           
                        </span> <span class="d-none d-md-inline ml-1">Manage Accounts</span></a>



                    <a href="feedback.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-comments ml-2"></i> <span class="d-none d-md-inline ml-2">Feedback</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-chart-line ml-2"></i> <span class="d-none d-md-inline ml-2">Reports</span></a>


                </div>
            </div>
            <!--NAVBAR           -->

            <div class="bg-light p-2" style=" box-shadow: 1px 1px 10px grey;">
                <!--              -->
                <a href="#" data-target="#sidebar" data-toggle="collapse" style="color:#1b6168"><i class="fas fa-bars fa-3x py-2 p-1 ml-1"></i></a>


                <div class="float-right mt-3 mr-4">

                    <span class="fa-layers fa-fw h4 ml-3 a" tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="bottom" id="notification" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.
Etiam nisi turpis, eleifend nec tellus id, efficitur pellentesque dolor. Proin vitae massa a augue sagittis vulputate. Duis vel fringilla magna, sit amet vestibulum enim. Fusce laoreet accumsan nisl eu sagittis. Morbi hendrerit sapien eget efficitur imperdiet. Aenean vitae nisl id est placerat congue a et nisi. Suspendisse vitae quam ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eu risus lacus. Ut tristique libero eget est dictum, commodo malesuada orci elementum. Proin molestie eu mi in tempus.
In hac habitasse platea dictumst. Cras augue nisl, cursus mattis mattis id, lacinia nec augue. Integer nec augue non metus interdum rhoncus. Proin non imperdiet ante. Sed mollis, justo ac dapibus auctor, tellus mi congue nisl, nec commodo ex justo ut eros. Etiam fringilla porta dolor vitae gravida. Nulla facilisi. Nam dui eros, mattis ut turpis at, eleifend accumsan odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed id ultrices erat, vehicula viverra ante. Etiam sit amet dignissim tellus, ac laoreet ligula. Aenean fringilla sodales lorem, ac maximus est hendrerit in.
Cras aliquet sit amet ante non blandit. Nunc eu efficitur lacus, id blandit tortor. Aenean nulla odio, consectetur ac tellus vitae, lacinia hendrerit dolor. Ut ligula leo, lobortis sed nibh eget, accumsan bibendum tellus. In eros diam, venenatis tempus venenatis ac, elementum nec mi. Nulla tristique tellus et lacus pellentesque, a feugiat sapien scelerisque. Integer et sollicitudin mauris, non varius velit. Integer ut auctor nulla. Sed eget neque faucibus, egestas neque et, aliquam lectus. Aenean id rutrum tellus, sed elementum justo. Nunc ac erat ut eros congue rhoncus. Vestibulum lectus lacus, consectetur vitae nisi sed, rutrum rutrum tellus.">
                       
                          <i class="far fa-envelope text-dark"></i>
                        <span class="fa-layers-counter text-danger"></span>


                    </span>
                    <span class="fa-layers fa-fw h2 h4 ml-4 a" tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="bottom" id="notification" data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. Cras nec dolor fringilla justo ullamcorper auctor. Aliquam eget pretium velit. Morbi urna justo, pulvinar id lobortis in, aliquet placerat orci.
Etiam nisi turpis, eleifend nec tellus id, efficitur pellentesque dolor. Proin vitae massa a augue sagittis vulputate. Duis vel fringilla magna, sit amet vestibulum enim. Fusce laoreet accumsan nisl eu sagittis. Morbi hendrerit sapien eget efficitur imperdiet. Aenean vitae nisl id est placerat congue a et nisi. Suspendisse vitae quam ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eu risus lacus. Ut tristique libero eget est dictum, commodo malesuada orci elementum. Proin molestie eu mi in tempus.
In hac habitasse platea dictumst. Cras augue nisl, cursus mattis mattis id, lacinia nec augue. Integer nec augue non metus interdum rhoncus. Proin non imperdiet ante. Sed mollis, justo ac dapibus auctor, tellus mi congue nisl, nec commodo ex justo ut eros. Etiam fringilla porta dolor vitae gravida. Nulla facilisi. Nam dui eros, mattis ut turpis at, eleifend accumsan odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed id ultrices erat, vehicula viverra ante. Etiam sit amet dignissim tellus, ac laoreet ligula. Aenean fringilla sodales lorem, ac maximus est hendrerit in.
Cras aliquet sit amet ante non blandit. Nunc eu efficitur lacus, id blandit tortor. Aenean nulla odio, consectetur ac tellus vitae, lacinia hendrerit dolor. Ut ligula leo, lobortis sed nibh eget, accumsan bibendum tellus. In eros diam, venenatis tempus venenatis ac, elementum nec mi. Nulla tristique tellus et lacus pellentesque, a feugiat sapien scelerisque. Integer et sollicitudin mauris, non varius velit. Integer ut auctor nulla. Sed eget neque faucibus, egestas neque et, aliquam lectus. Aenean id rutrum tellus, sed elementum justo. Nunc ac erat ut eros congue rhoncus. Vestibulum lectus lacus, consectetur vitae nisi sed, rutrum rutrum tellus.">
                          
                           <i class="far fa-bell text-dark"></i>
                        <span class="fa-layers-counter text-danger"></span>
                    </span>
                    <span class="fa-layers fa-fw h4 ml-4 a" rel="popover" tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="bottom" id="notification" data-content="">
                        <i class="fas fa-user text-dark"></i>
                    </span>




                </div>

            </div>
            <!--END NAVBAR           -->


            <main class="col-md-12 col px-5 pl-md-2 pl-xl-5 pt-2 main ">



                <div class="page-header">
                    <h2>USER ACCOUNTS</h2>
                </div>
                <p class="lead">View, Block, Unblock User accounts</p>
                <hr>


                <div class="row text-center">
                    <div class="col-2 modalView">
                        <div class="bg-light p-1">
                            <p class="lead">Total Accounts</p>
                            <label for="total_users" class="bg-dark rounded-circle pt-1 pb-1 pl-3 pr-3" style="color:white; font-weight: bold">200</label>
                        </div>


                    </div>
                    <div class="col-3 modalView">
                        <div class="bg-light p-1">
                            <p class="lead">New Accounts (Week)</p>
                            <label for="total_users" class="bg-dark rounded-circle pt-1 pb-1 pl-3 pr-3" style="color:white; font-weight: bold">20</label>
                        </div>


                    </div>
                    <div class="offset-9 col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><span class="fas fa-search"></span></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" title="Search" placeholder="Email">
                        </div>

                    </div>

                </div>

                <!--                    -->
                <div class="row">


                    <div class="col offset-md-0 offset-lg-0 offset-sm-2 offset-0 table-responsive" id="accountsTable" style="overflow-y: scroll; overflow-x: hidden; max-height: 350px">
                        <!--                          <responsive></responsive> -->
                        <table class="table table-hover table-striped table-bordered text-center">
                            <thead style="background-color: #6178a5">
                                <tr>

                                    <th scope="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">

                                        </div>
                                    </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Contact No.</th>
                                    <th scope="col">Address</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>
                                <tr>

                                    <td><input type="checkbox" class="form-control" name="selectItem" id="selectItem1"></td>
                                    <td>sample@gmail.com</td>
                                    <td>Melchora </td>
                                    <td>Aquino</td>
                                    <td>0912389182</td>
                                    <td>Cavite City, Cavite</td>
                                    <td><span style=" cursor: pointer;"><i class="fas fa-minus-square text-danger"></i></span></td>

                                </tr>





                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="row">
<!--
                                       sort
                    <div class="col-lg-6 col-4">
                            <div class="form-inline row ml-4 mt-3">
                                <label for="exampleFormControlSelect1">Sort by:</label>
                                <div class="form-group ml-3">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                </div>
                            </div>
                      
                    </div>
-->
                    <!--                    button-->
                    <div class="col offset-5 mt-3">
                        <button class="btn btn-warning mr-4">Block</button>
                        <button class="btn btn-primary">Unblock</button>
                    </div>


                </div>
            </main>

            <!--noti-->


            <!-- MODAL add blinds INFORMATION-->

            <!---->

            <!--        <div class="container">-->
            <div class="modal fade bd-addBlinds-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Order Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">

                                    <!--Blinds information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
                                        <div class="col-5 mt-3">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <select class="form-control">
                                                <option>Roller Shade</option>
                                                <option>Combi Shade</option>
                                                <option>Triple Shade</option>
                                                <option>Vertical / Sheer Blind</option>
                                                <option>Sunscreen</option>
                                               
                                            </select>
                                            <span class="fas fa-plus"><input type="text" class="form-control" ></span>

                                        </div>

                                        <div class="col-3 mt-3">
                                            <label>Size:</label>
                                        </div>

                                        <div class="col-9 mt-3">

                                            <div class="input-group">
                                                <span class="input-group-addon">Width&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;">

                                                <select class="form-control" style="width:10px;">
                                                    <option>inches</option>
                                                    <option>yards</option>
                                                    <option>meters</option>
                                                    <option>feet</option>

                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">Height</span>
                                                <input type="number" min="0" style="width:60px;">

                                                <select class="form-control" style="width:10px;">
                                                    <option>inches</option>
                                                    <option>yards</option>
                                                    <option>meters</option>
                                                    <option>feet</option>

                                                </select>

                                            </div>


                                        </div>
                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col">
                                            <image src="images/fabric-1.png" class="img-thumbnail float-left" id="blindsImg"></image>
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-10 m-2">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="blindFile">
                                                <label class="add custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>

                                        <div class="col-6 m-2 float-right">
                                            <button class="btn btn-info">Save Blinds</button>
                                        </div>



                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADD FABRIC -->
            <div class="modal fade bd-addFabric-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Set Fabric Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                <div style="overflow-x:hidden">
                                    <div class="row ml-4 mr-4" id="fabricDiv">
                                        <image src="images/fabric-1.png" class="d-none" id="fabricImgTemp"></image>
                                        <!--                                       <sad></sad>-->
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>
                                        <div class="col-3 mb-2">
                                            <image src="images/fabric-1.png" class="img-fluid modalView float-left" id="fabricImg"></image>
                                        </div>


                                    </div>


                                </div>
                                <!--                                <div class="col-xl-12 col-sm-12 col-12">-->

                                <!--                                </div>-->
                            </div>
                        </div>
                        <div class="modal-footer">

                            <span class="showonhover">Add</span>
                            <input type="file" id="uploadFabric" style="display:none">
                        </div>
                    </div>
                </div>
            </div>


            <!--END ADD FABRIC-->


            <!-- MODAL view Blinds INFORMATION -->

            <!---->

            <!--        <div class="container">-->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Blinds Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">

                                    <!--Blinds information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
                                        <div class="col-5 mt-3">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <select class="form-control" disabled>
                                                <option>Roller Shade</option>
                                                <option>Combi Shade</option>
                                                <option>Triple Shade</option>
                                                <option>Vertical / Sheer Blind</option>
                                                <option>Sunscreen</option>
                                               
                                            </select>
                                            <span class="fas fa-plus"><input type="text" class="form-control" ></span>

                                        </div>

                                        <div class="col-3 mt-3">
                                            <label>Size:</label>
                                        </div>

                                        <div class="col-9 mt-3">

                                            <div class="input-group">
                                                <span class="input-group-addon">Width&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" disabled>

                                                <select class="form-control" style="width:10px;" disabled>
                                                    <option>inches</option>
                                                    <option>yards</option>
                                                    <option>meters</option>
                                                    <option>feet</option>

                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">Height</span>
                                                <input type="number" min="0" style="width:60px;" disabled>

                                                <select class="form-control" style="width:10px;" disabled>
                                                    <option>inches</option>
                                                    <option>yards</option>
                                                    <option>meters</option>
                                                    <option>feet</option>

                                                </select>

                                            </div>


                                        </div>
                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" disabled>asdasdasdadsada</textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col">
                                            <image src="images/fabric-1.png" class="img-thumbnail float-left" id="viewblindsImg"></image>
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-10 m-2">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="viewblindFile">
                                                <label class="view custom-file-label" for="customFile">Choose file</label>

                                            </div>
                                        </div>

                                        <div class="col-12 m-2 float-right">
                                            <button class="btn btn-primary" id="saveBlinds">Save</button>
                                            <button class="btn btn-info" id="editBlinds">Edit</button>
                                            <button class="btn btn-warning" id="deleteBlinds">Delete</button>
                                        </div>



                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
