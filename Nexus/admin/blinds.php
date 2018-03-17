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


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->

    <?php 
            include("include/Navigation.php");
            include("classes/DatabaseQuery.php");
        ?>

    <!--        php select, and display value to table-->




    <!--End Navigation-->

    <div class="content-wrapper">
        <div class="container-fluid mt-3">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-6"><i class="fa fa-table"></i> Blinds</div>
                </div>


                <!-- Tab panes -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-2 mt-1">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bd-addBlinds-modal"><i class="fas fa-plus"></i> Add Blinds</button>
                        </div>
                        <div class="col-2 mt-1"><button class="btn btn-danger" id="deleteAll"><i class="fas fa-trash-alt"></i> Delete</button></div>
                    </div>

                    <!--                            table-->
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="checkAll" id="checkAll" /></th>
                                        <th>Blinds Image</th>
                                        <th>Blinds ID</th>
                                        <th>Blinds Name</th>
                                        <th>Blinds Type</th>
                                        <th>Date Added</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Action</th>
                                        <th>Blinds Image</th>
                                        <th>Blinds ID</th>
                                        <th>Blinds Name</th>
                                        <th>Blinds Type</th>
                                        <th>Date Added</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Actions</th>


                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $dbq = new DatabaseQuery(new DatabaseInfo);    
                                        $queryCateogry = "select * from blinds";
                                        $resultCategory = $dbq->query($queryCateogry);
                                        $ctr = 0;
                                        while($row = mysqli_fetch_array($resultCategory)){
                                            $ctr+=1;

                                        echo "<tr>";
                                            echo "<td><input type='checkbox' name='check".$ctr."' id='check".$ctr."'></td>";
                                            echo "<td>";
                                            $dbImg = $dbq->getBlob($row['image']);
                                            echo "<image src='" . $dbImg . "' class='img-thumbnail img-thumbnail-table' id='view-Thumbnail".$ctr."' />";
                                            echo "</td>";
                                            echo "<td class='blinds_id'>" . $row['blinds_id'] . "</td>";
                                            echo "<td class= 'dbName'>" . $row['name'] . "</td>";
                                            echo "<td class= 'category_id'>" . $row['blinds_category_id'] . "</td>";
                                           
                                            
                                            echo "<td>" . $row['date_added'] . "</td>";
                                            //walng status sa db
                                            echo "<td>walang blinds status</td>";
                                            $desc = $row['description'];
                                            echo "<td class='dbDesc'> " . $desc . " </td>";
                                            
//                                            echo "<td>" . $desc . "</td>";
                                           
                                            
                                            echo "<td class='text-center'><a href='#' id='dropdownMenuButton1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>&nbsp;<i class='fas fa-ellipsis-h'></i></a>
                                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                                    <a class='dropdown-item text-primary filter_inset' data-toggle='modal' data-target='.view-Blinds-modal' href='#'><i class='fas fa-eye'></i> Edit</a>
                                                    <a class='dropdown-item text-danger' href='#'><i class='fas fa-trash-alt'></i> Delete</a>

                                                </div>
                                            </td>";
                                            
                                           
                                              
                                        }
                                              
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!--            img modal-->
        <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <img src="" class="enlargeImageModalSource" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <!--        view blinds info modal-->
        <div class="modal fade view-Blinds-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <form method="post" enctype="multipart/form-data" action="editBlinds.php">
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
                                           <input type="hidden" name = "dbblinds_id" id ="dbblinds_id" >
                                            <label for="blinds name">Name:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <input type="text" name="dbblindsName" id="dbblindsName" class="form-control" >
                                        </div>
                                        <div class="col-5 mt-3">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <select class="form-control" id="dbaddBlindsCategory" name="dbaddBlindsCategory" >
                                            <?php
                                                 
                                                $queryCateogry = "SELECT * FROM blinds_category WHERE blinds_category_id = '" . $blinds_Cat_id . "'";
                                                $resultCategory = $dbq->query($queryCateogry);
                                                
                                                while($row = mysqli_fetch_array($resultCategory)){
                                                 
                                                    echo "<option value=" .$row['blinds_category_id']. ">" . $row['blinds_type_name'] . "</option>";
                                                    
                                                }
                                                
                                            ?>
                                                
                                        </select>

                                        </div>


                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="dbDescription" name ="dbDescription" rows="4" ></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col">
                                            <image src="" class="img-thumbnail float-left" id="viewblindsImg"></image>
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-10 m-2">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="viewblindFile" name = "viewblindFile">
                                                <label class="view custom-file-label" for="customFile">Choose file</label>
<!--                                                <input type="hidden" name="action" value="editcategory">-->

                                            </div>
                                        </div>





                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <!--                            <button class="btn btn-primary" id="saveBlinds"><i class="fas fa-save"></i> Save</button>-->
                                <button class="btn btn-warning" id="editBlinds" disabled><i class="fas fa-edit"></i> Save</button>
                                <!--                            <button class="btn btn-warning" id="deleteBlinds"><i class="fas fa-trash text-danger"></i> Delete</button>-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--        end view blinds info modal-->


        <!--            end table-->
        <!--add blinds-->
        <div class="modal fade bd-addBlinds-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <form method="post" enctype="multipart/form-data" action="insertBlinds.php">
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
                                            <label for="blinds name">Name:</label>
                                            

                                        </div>
                                        <div class="col-7 mt-3">
                                            <input type="text" name="blindsName" id="blindsName" class="form-control">
                                        </div>
                                        <div class="col-5 mt-3">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <select class="form-control" id="addBlindsCategory" name="addBlindsCategory">
                                            <?php
                                                 
                                                $queryCateogry = "select * from blinds_category";
                                                $resultCategory = $dbq->query($queryCateogry);
                                                
                                                while($row = mysqli_fetch_array($resultCategory)){
                                                 
                                                    echo "<option value=" .$row['blinds_category_id']. ">" . $row['blinds_type_name'] . "</option>";
                                                }
                                                
                                                date_default_timezone_set("Asia/Manila");
                                                $dateTime = date("Y/m/d h:i:sa");
                                                echo "<input type='hidden' name = 'date' id = 'date' value = '" . $dateTime . "'>";
                                            ?>
                                                
                                                </select>

                                        </div>
                                        <div class="col-5 mt-3">
                                            <label>Choose fabric:</label>

                                        </div>
                                        <div class="col-7 mt-3">
                                            <select class="form-control" id="addBlindsFabric" name="addBlindsFabric">
                                               <?php
                                                      
                                                     $queryFabric = "select * from fabric";
                                                     $resultFabric = $dbq->query($queryFabric);

                                                     while($row = mysqli_fetch_array($resultFabric)){

                                                         echo "<option value=" .$row['fabric_name']. ">" . $row['fabric_name'] . "</option>";
                                                     }

                                               ?>
                                             </select>

                                        </div>
                                        <!--

                                        <div class="col-3 mt-3">
                                            <label>Size:</label>
                                        </div>

                                        <div class="col-9 mt-3">

                                            <div class="input-group">
                                                <span class="input-group-addon">Width&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" id ="minwidth" name ="minwidth">

                                                <select class="form-control" style="width:10px;">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>

                                                    </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">Height</span>
                                                <input type="number" min="0" style="width:60px;" id ="minheight" name ="minheight">

                                                <select class="form-control" style="width:10px;">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>

                                                    </select>

                                            </div>


                                        </div>
-->
                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="addBlindsDescription" name="addBlindsDescription" rows="9"></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="offset-2" id="addBlind">
                                            <image src="" class="img-fluid p-4" id="blindsImg"></image>
                                            <!--                                    <image src="" id="blindFileTemp"></image>-->
                                            <span class="uploadBtn" id="default-img">
                                                       <i class="far fa-image fa-10x text-info"></i>
                                                   </span>
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-10 m-2">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="blindFile" multiple name="blindFile">
                                                <input type="hidden" name="action" value="insertBlinds">

                                                <label class="add custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button id="saveBlinds" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Blinds</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end blinds-->



        <!--           feed-->
        <div class="feedBtn">

            <a class="text-primary display-4 slide-toggle"><i class="fas fa-comment-alt"></i></a>
        </div>

        <!--            FEEDBACK-->

        <div class="container">
            <div class="row chat-window col-xs-1 col-md-3" id="chat_window_1" style="margin-left:10px;">
                <div class="col-10 col-md-12 ml-5" style="height:">
                    <div class="panel panel-default">
                        <div class="panel-heading top-bar ">

                            <div class="col-md-8 col-xs-8">
                                <span class="">
                                            <p id="feed" class="h6">FEEDBACKS</p><a href="#" class="hide"></a>
                                         </span>

                            </div>
                            <div class="col-md-4 col-xs-4" style="text-align: right;">
                                <a href="#"><span id="minim_chat_window" class="float-right icon_minim"></span></a>
                            </div>
                        </div>
                        <div class="panel-body msg_container_base">

                            <div class="row <m></m>sg_container base_receive">
                                <div class="col-md-12 col-xs-11">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row msg_container base_receive">
                                <div class="col-md-12 col-xs-11">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row msg_container base_receive">
                                <div class="col-md-12 col-xs-11">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row msg_container base_receive">
                                <div class="col-md-12 col-xs-11">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>
                            <hr>
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

    <script type="text/javascript">
        //                var boxWidth = $("#chat_window_1").width();
        $(document).ready(function() {
            //                    $("#chat_window_1").animate({
            //                        width: 0
            //                    });
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
            $v = 0;
            $v += 1;
            $("#checkAll").click(function() {
                $("input:checkbox").prop('checked', this.checked);
            });

            //                    add and edit blinds

            $('#blindFile').change(function() {

                AddImg(this, '#blindsImg');
                $('#default-img').addClass("d-none");
                $('#addBlind').removeClass("offset-2");



            });
            $('#blindsCategoryFile').change(function() {
                $('#tempFile').val($(this).val());
                AddImg(this, '#blindsCategoryImg');

                $('#default-imgCat').addClass("d-none");
                $('#addCategoryBlind').removeClass("offset-2");

            });
            $('#fabricFile').change(function() {
                AddImg(this, '#fabricImg');
                $('#default-imgfabric').addClass("d-none");
                $('#addfabric').removeClass("offset-2");

            });

//            $(".view-Blinds-modal").on('show.bs.modal', function(event) {
//
//                $('#editBlinds').addClass('btn-warning');
//                $('#editBlinds').html('<i class="fas fa-edit"></i> Edit');
//
//            });
//            $(".view-Blinds-modal").on('hidden.bs.modal', function(event) {
//                $(":input").prop("disabled", true);
//                //                alert("AS");
//
//            });
            $("#viewblindFile, #dbDescription, #dbaddBlindsCategory, #dbblindsName").change(function(){
                $('#editBlinds').removeAttr("disabled");
            });

            $("#editBlinds").click(function() {
                $(":disabled").removeAttr("disabled");
                $('#default-imgCat').addClass("d-none");
                $('#addCategoryBlind').removeClass("offset-2");
                $(this).removeClass('btn-warning').addClass('btn-info');
                $(this).html('<i class="fas fa-save"></i> Save');
            });
            $(function() {
                $('.img-thumbnail-table').on('click', function() {
                    $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                    $('#enlargeImageModal').modal('show');
                });
            });

            $("#saveBlindsCategory").click(function() {
                $minHeight = $("#blindsCategoryHeight").val();
                $minWidth = $("#blindsCategoryWidth").val();
                $desc = $("#blindsCategoryDescription").val();
                //                $img = $("#blindsCategoryImg").src();
                $blindsCategoryName = $("#blindsCategoryName").val();
                //                alert($img);
                //no validation
                //                insertBlindsCategory($minHeight,$minWidth,$desc,$blindsCategoryName);

            });
            $('.filter_inset').click(function() {
                
                $id = $(this).closest("tr").find(".blinds_id").val();
                $item = $(this).closest("tr").find(".img-thumbnail-table").attr('src');
                $name = $(this).closest("tr").find(".dbName").html();
                $desc = $(this).closest("tr").find(".dbDesc").html();
           
                $('#dbDescription').text($desc);
                $('#dbblindsName').val($name);
                $('#dbblinds_id').val($id);
                $('#viewblindsImg').attr('src', $item);

            });

        });

        function AddImg(input, img) {

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


        //        hindi ginamit
        function insertBlindsCategory($minHeight, $minWidth, $desc, $blindsCategoryName) {

            $img = $('#tempFile').val();

            alert($img);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    alert(xhttp.responseText);
                }
            };
            xhttp.open("GET", "insertBlinds.php?minheight=" + $minHeight + "&minWidth=" + $minWidth + "&blindsCategoryName=" + $blindsCategoryName + "&desc=" + $desc + "&img=" + $img + "&action='blindsCategory'", true);
            xhttp.send();

        }

        function display(id) {
            //            alert(id);
        }
        //        function displayViewImage(input, img) {
        //
        //            for (var i = 0; i < input.files.length; i++) {
        //                if (input.files[i]) {
        //                    var reader = new FileReader();
        //
        //                    reader.onload = function(e) {
        //
        //                        $(img).attr('src', e.target.result);
        //
        //
        //                    }
        //                    reader.readAsDataURL(input.files[i]);
        //                }
        //            }
        //        }

    </script>
</body>

</html>
