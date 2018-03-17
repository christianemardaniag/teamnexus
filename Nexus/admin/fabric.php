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

    <!--End Navigation-->

    <div class="content-wrapper">
        <div class="container-fluid mt-3">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-6"><i class="fa fa-table"></i> Fabric</div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-addFabric-modal"><i class="fas fa-plus"></i> Add Fabric</button>
                    </div>
                    <div class="row">


                        <?php
                         $dbq = new DatabaseQuery(new DatabaseInfo);    
                        
                        $query = "select * from fabric";
                        
                        $result = $dbq->query($query);
                        $c=0;
                        
                        while($row = mysqli_fetch_array($result)){
//			             if remove blinds category
//                            categoryStatus = $row["status"];
//                            $row["userpass"];
                            
                          
                            echo "<div class='col-3 mt-2'>";

                            echo "<div class='card card-category'>";
                                echo "<img class='card-img-top img-fluid imgCategory card-imgFabric' src='" . $dbq->getBlob($row['fabric_image']) . "' alt='Card image cap'>";
                                echo "<div class='card-body'>";
                                        echo "<input type='hidden' class='fabric_id' name='fabricId' id = 'fabricId_" . $c . "' value = " . $row['fabric_id'] . ">";
                                   echo "<h5 class='card-title card-fabric-name'>" . $row['fabric_name'] . "</h5>";
                                    echo " <p class='small card-date'>" . $row['date_added'] . "</p>";
                                echo "</div>";

                                echo "<div class='card-footer'>";
                                   echo " <a href='#' id='btn-edit_" . $c . "' class='btn btn-warning btn_edit' data-toggle='modal' data-target='.bd-editFabric-modal'>Edit</a>";
                                   echo " <a href='#' id = 'btn-remove_" . $c . "' class='btn btn-warning float-right btn_remove'  data-toggle="popover" data-container="body" data-placement="top" type='button' data-html='true' >Remove</a>";
                                 
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        $c++;

                        }
                        
                          
                        ?>

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

    <!--add fabric modal-->
    <div class="modal fade bd-addFabric-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" enctype="multipart/form-data" action="insertBlinds.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Fabric</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-5">
                                <label for="FabricName">Name: </label>
                                <input type="text" name="fabricName" id="fabricName" class="form-control">

                                <?php
                                     
                                    date_default_timezone_set("Asia/Manila");
                                    $dateTime = date("Y/m/d h:i:sa");
                                    echo "<input type='hidden' name = 'date' id = 'date' value = '" . $dateTime . "'>";
                                ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-3" id="addfabric">
                                <image src="" class="img-fluid p-4 w-75" id="fabricImg"></image>
                                <!--                                    <image src="" id="blindFileTemp"></image>-->
                                <span class="uploadBtn" id="default-imgfabric">
                                                   <i class="far fa-image fa-10x text-info"></i>
                                               </span>

                            </div>

                            <div class="col-6 ml-5 align-center">
                                <hr>
                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" id="fabricFile" multiple name="fabricFile">
                                    <input type="hidden" name="action" value="insertFabric">


                                    <label class="add custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button id="savefabric" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Fabric</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end fabric-->



    <!--edit fabric modal-->
    <div class="modal fade bd-editFabric-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" enctype="multipart/form-data" action="editBlinds.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Fabric</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-7">
                                <label for="FabricName">Name: </label>
                                <input type="text" name="dbfabricName" id="dbfabricName" class="form-control">
                                <input type="hidden" name="dbfabricNameTemp" id="dbfabricNameTemp" class="form-control">
                                <input type="hidden" name="dbfabricId" id="dbfabricId" class="form-control">

                                <?php
                                     
                                    date_default_timezone_set("Asia/Manila");
                                    $dateTime = date("Y/m/d h:i:sa");
                                    echo "<input type='hidden' name = 'dbdate' id = 'dbdate' value = '" . $dateTime . "'>";
                                ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="ml-4" id="editfabric">
                                <image src="" class="img-fluid pt-4 pl-4 pr-4 pb-0 w-100" id="dbfabricImg" name="dbfabricImg"></image>

                            </div>

                            <div class="col-6 offset-3 align-center">

                                <div class="custom-file">

                                    <!--                                    <input type="file" class="custom-file-input" id="dbfabricFile" multiple name="dbfabricFile">-->


                                    <!--                                    <label class="add custom-file-label" for="customFile">Choose file</label>-->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="action" value="updateFabric">
                        <button id="dbeditfabric" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Fabric</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end edit fabric-->

    <form action="deleteBlinds.php" name="deleteForm" method="post">
        <input type="hidden" name="deleteFabric" id="deleteFabric">
        <input type="hidden" name="action" value="deleteFabric">
    </form>



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
                        <!---->
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
                        <!--                        -->
                        <div class="row msg_container base_receive">
                            <div class="col-md-12 col-xs-11">
                                <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--                        -->
                        <div class="row msg_container base_receive">
                            <div class="col-md-12 col-xs-11">
                                <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--                        -->
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
                $('#addfabric').removeClass("offset-3").addClass("text-center");

            });
            $('#dbfabricFile').change(function() {
                AddImg(this, '#dbfabricImg');


            });



            $("#editBlinds").click(function() {
                $(":disabled").removeAttr("disabled");
                $('#default-imgCat').addClass("d-none");
                $('#addCategoryBlind').removeClass("offset-2");
            });
            $(function() {
                $('.imgCategory').on('click', function() {
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


            $("a.btn_edit").click(function(event) {
                $parent = $("#" + event.target.id).parents('.card-category');

                $fabric_name = $parent.find(".card-fabric-name").html();
                //                $date_added = $parent.find(".card-date").html();
                $fabricImg = $parent.find(".card-imgFabric").attr('src');
                $fabricId = $parent.find("input.fabric_id").val();



                $("#dbfabricId").val($fabricId);

                $("#dbfabricName").val($fabric_name);
                $("#dbfabricNameTemp").val($fabric_name);
                $("#dbfabricImg").attr("src", $fabricImg);

            });
            $("a.btn_remove").click(function(event) {
                $parent = $("#" + event.target.id).parents('.card-category');


                $fabricId = $parent.find("input.fabric_id").val();
                alert($fabricId);
                $("#deleteFabric").val($fabricId);
                

                var form = document.forms.deleteForm;
                form.submit();

                //                //                $date_added = $parent.find(".card-date").html();
                //                $fabricImg = $parent.find(".card-imgFabric").attr('src')
                //
                //                $("#dbfabricName").val($fabric_name);
                //                $("#dbfabricNameTemp").val($fabric_name);
                //                $("#dbfabricImg").attr("src", $fabricImg);

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

    </script>
</body>

</html>
