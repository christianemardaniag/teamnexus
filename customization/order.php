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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->


    <link rel="stylesheet" href="css/admin.css">
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

            $("#change").click(function() {
                $("#changeDate").removeAttr('disabled');
            });

            $('#nextButton').click(function() {
                $('.bd-addOrder-modal-lg').modal('hide');
                $('.bd-addOrderFabric-modal-lg').modal('show');
            });
            $('#nextButton2').click(function() {
                $('.bd-addOrderFabric-modal-lg').modal('hide');
                $('.bd-addOrderVisit-modal-lg').modal('show');
            });
           


        });

    </script>
    <!--    <script src="js/calendar_Admin.js"></script>-->



</head>

<body>


    <div class="container-fluid">

        <div class="row d-flex d-md-block flex-nowrap wrapper">

            <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
                <div class="list-group border-0 card text-center text-md-left show" style="background: linear-gradient(180deg, #202930 50%, #293a42 50%);">

                    <image src="images/lettering.png" class="img-fluid w-50 ml-4 p-md-2" style="z-index:5;" alt="AdamArc"></image>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-film ml-2"></i> <span class="d-none d-md-inline ml-2">Dashboard</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clipboard ml-2"></i> <span class="d-none d-md-inline ml-2">Orders</span> </a>

                    <a href="#menu3" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-th-large ml-2"></i> <span class="d-none d-md-inline ml-2">Blinds</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-image ml-2"></i> <span class="d-none d-md-inline ml-2">Template</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-images ml-2"></i> <span class="d-none d-md-inline ml-2">Gallery</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th ml-2"></i> <span class="d-none d-md-inline ml-2">Notifications</span></a>
                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-calendar-alt ml-2"></i> <span class="d-none d-md-inline ml-2">Visitations</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                           <span class="fa-layers fa-fw ml-1">
                            <i class="fas fa-users"></i>
                             <i class="fas fa-cog fa-lg" data-fa-transform="right-7 down-6" style="color: #293a42"></i>
                            <i class="fas fa-cog fa-xs" data-fa-transform="right-10 down-8"></i>
                           
                        </span> <span class="d-none d-md-inline ml-1">Manage Accounts</span></a>



                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-comments ml-2"></i> <span class="d-none d-md-inline ml-2">Feedback</span></a>

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
                        
<!--
                        <div id="popover_content_wrapper" style="display: none">
                            <div><button class="btn btn-primary">Manage Account</button></div>
                            <hr>
                            <div>
                                <button class="btn btn-default">Signout</button>

                            </div>
                        </div>
-->

                    </span>




                </div>

            </div>
            <!--END NAVBAR           -->


            <main class="col-md-12 col px-5 pl-md-2 pl-xl-5 pt-2 main ">



                <div class="page-header">
                    <h3>Orders</h3>
                </div>

                <hr>
                <div class="row">
                    <div class="col-2 offset-10">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><span class="fas fa-search"></span></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" title="Search" placeholder="Order #">
                        </div>
                    </div>
                </div>



                <!--CONTAINER-->
                <!--                <div class="container-fluid ">-->
                <div class="row">
                    <div class="col-lg-4 mb-2">
                        <label>Blinds Name</label>
                        <div class="input-group">
                            <select class="form-control">
                                <option>Roller Shade</option>
                                <option>Combi Shade</option>
                                <option>Triple Shade</option>
                                <option>Vertical / Sheer Blind</option>
                                <option>Sunscreen</option>
                               
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-2">
                        <label>Blinds Type</label>
                        <div class="input-group">
                            <input type="text" class="form-control filter" placeholder="Blinds Type">

                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label>Customer's Id</label>
                        <div class="input-group">
                            <input type="text" class="form-control filter" placeholder="Customers Name">

                        </div>
                    </div>

                    <div class="col-lg-4 mb-2">

                        <div>
                            <label>Date</label>
                            <input class="form-control filter" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label>Status</label>
                        <div class="input-group">
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle filter_inset_green" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order Status</button>
                                <div class="dropdown-menu filter" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">Ready for Visitations</a>
                                    <a class="dropdown-item" href="#">Ready for Delivery</a>
                                    <a class="dropdown-item" href="#">Delivered</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class=" offset-8 offset-sm-10 mt-3">
                            <button class="btn btn-primary filter_inset"><span class="fas fa-search"></span> Filter</button>
                        </div>
                    </div>


                </div>

                <hr>
                <br>
                <!--
<input class="form-control m-2 w-25" type="text" placeholder="Blind Name">
<input class="form-control m-2 w-25" type="text" placeholder="Blind Type">
<input class="form-control m-2 w-25" type="text" placeholder="Customer Name">
<input class="form-control m-2 w-25" type="text" placeholder="Date">
<input class="form-control m-2 w-25" type="text" placeholder="Status">
<button class="btn btn-success"><i class="fas fa-search"></i>Filter</button>
-->
                <div class=" float-right">
                    <!--addOrder-->

                    <button class="btn btn-primary filter_inset filter" data-toggle="modal" data-target=".bd-addOrder-modal-lg">
                       <span class="fa-layers fa-fw fa-lg">
                        <i class="fas fa-clipboard" style="color:#919191"></i>
                        <i class="fas fa-plus" data-fa-transform="shrink-6"></i>
                    </span>Add New Order
                    </button>
                </div>


                <!--                    -->
                <div class="row">


                    <div class="col offset-md-0 offset-lg-0 offset-sm-2 offset-0 table-responsive">
                        <!--                          <responsive></responsive> -->
                        <table class="table table-hover table-striped table-bordered text-center">
                            <thead style="background-color: #6178a5">
                                <tr>

                                    <th scope="col">Blinds Name</th>
                                    <th scope="col">Blinds Type</th>
                                    <th scope="col">Customer's Name</th>
                                    <th scope="col">Date Ordered</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>kitchen's blinds</td>
                                    <td>Roller Blinds</td>
                                    <td>#12382</td>
                                    <td>January 24, 2017</td>
                                    <td>Ready For Visitation</td>
                                    <td><button type="button" class="btn btn-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg">View</button></td>
                                </tr>
                                <tr>

                                    <td>kitchen's blinds</td>
                                    <td>Roller Blinds</td>
                                    <td>#21121</td>
                                    <td>January 24, 2017</td>
                                    <td>Ready For Visitation</td>
                                    <td><button type="button" class="btn btn-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg">View</button></td>
                                </tr>




                            </tbody>
                        </table>
                    </div>




                </div>
                <!--                </div>-->
            </main>

            <!--noti-->


            <!-- MODAL INFORMATION-->

            <!---->
            <!--        <div class="container">-->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Order Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">
                                    <!-- Customer's info-->

                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Customer's Information</label>

                                        </div>

                                        <div class="col-5">
                                            <label>Name:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>Melchora Aquino</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Address:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>Cavite</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Phone Number:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>0912390122</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Email Address:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>melchora_kkk@gmail.com</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--Blinds information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Roller Blinds</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Fabric Type:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Pattern</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Size:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Medium</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Color (Hex):</label>
                                        </div>
                                        <div class="col-7">
                                            <div style="width:10px; height:10px; min-height: 100%; position: fixed"><i style="color:#5e6c86;" class="fa fa-square"></i></div><label style="margin-left:18px">#5e6c86</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <!--Schedule information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Visitation Information</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Visitation Date:</label>

                                        </div>
                                        <div class="col-7">

                                            <input type="date" value="2011-08-19" id="changeDate" class="form-control" disabled>
                                            <button class="btn btn-default" id="change">Change</button>
                                        </div>
                                        <div class="col-5">
                                            <label>Visitation Address:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Batangas City, Batangas</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col">
                                            <image src="images/fabric-1.png" class="img-thumbnail img-fluid float-left"></image>
                                        </div>
                                    </div>
                                    <div class="row p-3">
                                        <div class="col m-2">
                                            <button class="btn btn-primary">Save Order</button>
                                        </div>
                                        <div class="col m-2">
                                            <button class="btn btn-warning">Cancel Order</button>
                                        </div>



                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ADD NEW ORDER -->
            <!--                choose blinds-->
            <div class="modal slide bd-addOrder-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choose Blinds (Walk-ins)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                <div style="overflow-x:hidden">
                                    <div class="row ml-4 mb-4">
                                        <div class="col-7">
                                           
                                            <div class="input-group form-inline">
                                                <label for="" class="form-control modalViewNear">Choose Blinds Category:</label>
                                                <select class="form-control bg-light modalViewNear" id ="blindCategory">
                                                    
                                                    <option>Roller Shade</option>
                                                    <option>Combi Shade</option>
                                                    <option>Triple Shade</option>
                                                    <option>Vertical / Sheer Blind</option>
                                                    <option>Sunscreen</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row ml-4 mr-4" id="fabricDiv">

                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox1" />
                                            <label for="myCheckbox1">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg1">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox2" />
                                            <label for="myCheckbox2">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg2">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox3" />
                                            <label for="myCheckbox3">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderFabric" id="nextButton">Next <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--            choose fabric-->
            <div class="modal fade bd-addOrderFabric-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choose Fabric (Walk-ins)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                <div style="overflow-x:hidden">
                                  
                                    <div class="row ml-4 mr-4" id="fabricDiv">

                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox1" />
                                            <label for="myCheckbox1">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg1">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox2" />
                                            <label for="myCheckbox2">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg2">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox3" />
                                            <label for="myCheckbox3">
                                              <img src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderVisit-modal-lg" id="nextButton2">Next <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--            visitation-->
            <div class="modal fade bd-addOrderVisit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Schedule a Visitation Date</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                CALENDAR
                            </div>
                            <div class="row mt-6 ml-4">
                                <div class="col-6">
                                    <label for="name">Name: </label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-8">
                                    <label for="address">Full Address: </label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="col-5">
                                    <label for="contact">Phone Number: </label>
                                    <input type="text" class="form-control" name="contact">

                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary">Done <i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!--END ADD ORDER-->




        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
