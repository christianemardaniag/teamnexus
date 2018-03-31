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
                    <div class="col-6"><i class="fa fa-table"></i> Add Blinds Category</div>
                </div>

                <!-- Tab panes -->
                <div class="card-body">
                    <div class="row">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-addBlindsCategory-modal"><i class="fas fa-plus"></i> Add Blinds Category</button>
                    </div>

                    <div class="row">

                        <!--                       echo-->
                        <?php
                         $dbq = new DatabaseQuery(new DatabaseInfo);    
                        
                        $query = "select * from blinds_category WHERE status = 'available'";
                        
                        $result = $dbq->query($query);
                        
                        $c=0;
                        while($row = mysqli_fetch_array($result)){
//			             if remove blinds category
//                            categoryStatus = $row["status"];
//                            $row["userpass"];
                            
                          
                            echo "<div class='col-3 mt-2'>";

                            echo "<div class='card card-category'>";
                               echo "<img class='card-img-top imgCategory ' src='" . $dbq->getBlob($row['image']) . "' alt='Card image cap' style='object-fit: cover;' height='150' width='100'  id = 'blindsImg' name = 'blindsImg'  />";
                                echo "<div class='card-body editCard' id= 'editCard'>";
                                    
                                   echo " <h5 class='card-title title ' id = 'blindsName' name = 'blindsName' >" . $row['blinds_type_name'] . "</h5>";
                                    echo "<input type='hidden' class='categoryId' name='categoryId' id ='categoryId' value =". $row['blinds_category_id'] .">";
                                    echo "<hr>";
                                    echo "<p class='card-text card-text-body description' id = 'blindsDesc' name = 'blindsDesc' >" . $row['description'] . "</p>";
                                    echo "<p class='card-text card-text-body dimensionw' name= 'min-width' id= 'min-width'>min-Width: " . $row['minwidth'] . "</p>";
                                    echo "<p class='card-text card-text-body dimensionh' name= 'min-height' id= 'min-height'>min-Height: " . $row['minheight'] . "</p>";
                                    echo "</div>";

                                echo "<div class='card-footer'>";
                                   echo " <button id='btn-edit_" . $c . "' class='btn btn-primary btn_edit' data-toggle='modal' data-target='.bd-editBlindsCategory-modal'>Edit</button>";
                                   echo " <button id = 'btn-remove_" . $c . "' class='btn btn-warning btn_remove' data-toggle='popover' data-container='body'  data-trigger='focus' data-placement='top' data-html='true' >Remove</button>";
                            
                                 
                                echo "</div>";
                                
                            echo "</div>";
                        echo "</div>";
                        $c++;

                        }
                        
                          
                        ?>


                            <!--                    end echo-->
                    </div>


                </div>

            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!--delete-->
        <div id="popover-content" class="d-none">
            <p>Are you sure?</p>
            <a id="removeYes" onclick="remove('Yes')" class="btn btn-primary">Yes</a>
            <a id="removeNo" onclick="remove('No')" class="btn btn-danger">No</a>

        </div>




        <!--            img modal-->
        <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Image Preview</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <img src="" class="enlargeImageModalSource" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>


        <!--add catefory blinds-->
        <div class="modal fade bd-addBlindsCategory-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <form method="post" enctype="multipart/form-data" action="insertBlinds.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Blinds Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">

                                    <!--Blinds information-->
                                    <div class="row">
                                        <!--
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
    -->
                                        <div class="col-12">
                                            <label for="blind">New Category Name:</label>
                                            <input type="text" name="blindsCategoryName" id="blindsCategoryName" class="form-control">
                                        </div>


                                        <div class="col-5 mt-3">
                                            <label>Set minimum-size:</label>
                                        </div>

                                        <div class="col-7 mt-3">

                                            <div class="input-group">
                                                <span class="input-group-addon">Width&nbsp;&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" id="blindsCategoryWidth" name="blindsCategoryWidth">

                                                <select class="form-control" style="width:10px;" id="blindsCategoryUnitWidth" name="blindsCategoryUnitWidth">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>
                                                        <option seleted>cm</option>

                                                    </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">Height&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" id="blindsCategoryHeight" name="blindsCategoryHeight">

                                                <select class="form-control" style="width:10px;" id="blindsCategoryUnitHeight" name="blindsCategoryUnitHeight">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>
                                                        <option selected>cm</option>

                                                    </select>

                                            </div>


                                        </div>
                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="blindsCategoryDescription" name="blindsCategoryDescription" rows="9"></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="offset-2" id="addCategoryBlind">
                                            <image src="" class="img-fluid p-4" id="blindsCategoryImg" name="blindsCategoryImg"></image>
                                            <!--                                        <input type="hidden" id="tempFile">-->
                                            <!--                                    <image src="" id="blindFileTemp"></image>-->
                                            <span class="uploadBtn" id="default-imgCat">
                                                       <i class="far fa-image fa-10x text-info"></i>
                                                   </span>
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-10 m-2">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="blindsCategoryFile" name="     blindsCategoryFile">
                                                <input type="hidden" value="addcategory" name="action">

                                                <label class="add custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button id="saveBlindsCategory" type="submit" class="btn btn-primary" disabled><i class="fas fa-save"></i> Save Category</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
        <!--end add catefory blinds-->

        <!--edit catefory blinds-->
        <div class="modal fade bd-editBlindsCategory-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <form method="post" enctype="multipart/form-data" action="editBlinds.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Blinds Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">

                                    <!--Blinds information-->
                                    <div class="row">
                                        <!--
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
    -->
                                        <div class="col-12">
                                            <label for="blind">Category Name:</label>
                                            <input type="text" name="dbblindsCategoryName" id="dbblindsCategoryName" class="form-control">
                                        </div>


                                        <div class="col-5 mt-3">
                                            <label>Minimum-size:</label>
                                        </div>

                                        <div class="col-7 mt-3">

                                            <div class="input-group">
                                                <span class="input-group-addon">Width&nbsp;&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" id="dbblindsCategoryWidth" name="dbblindsCategoryWidth">

                                                <select class="form-control" style="width:10px;" id="dbblindsCategoryUnitWidth" name="blindsCategoryUnitWidth">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>
                                                        <option selected>cm</option>

                                                    </select>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">Height&nbsp;</span>
                                                <input type="number" min="0" style="width:60px;" id="dbblindsCategoryHeight" name="dbblindsCategoryHeight">

                                                <select class="form-control" style="width:10px;" id="dbblindsCategoryUnitHeight" name="dbblindsCategoryUnitHeight">
                                                        <option>inches</option>
                                                        <option>yards</option>
                                                        <option>meters</option>
                                                        <option>feet</option>
                                                        <option selected>cm</option>

                                                    </select>

                                            </div>


                                        </div>
                                        <div class="col-3 mt-3">
                                            <label>Description:</label>
                                        </div>
                                        <div class="col-9 mt-3">
                                            <textarea class="form-control" id="dbblindsCategoryDescription" name="dbblindsCategoryDescription" rows="9"></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="offset-1" id="editCategoryBlind">
                                            <image src="" class="img-fluid p-4" id="dbblindsCategoryImg" name="dbblindsCategoryImg"></image>

                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-11 m-4">
                                            <hr>
                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="dbblindsCategoryFile" name="dbblindsCategoryFile">
                                                <input type="hidden" value="editcategory" name="action">
                                                <input type="hidden" id="dbcategoryId" name="dbcategoryId">

                                                <label class="add custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" id="editCategory" disabled><i class="fas fa-save"></i> Save Category</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
        <!--end edit catefory blinds-->

        <!--deleteBlinds.php-->
        <form action="deleteBlinds.php" name="deleteForm" method="post">
            <input type="hidden" name="deleteCategory" id="deleteCategory">
            <input type="hidden" name="action" value="deleteCategory">
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
            $('#blindsCategoryFile').change(function() {
                AddImg(this, '#blindsCategoryImg');

                $('#default-imgCat').addClass("d-none");
                $('#addCategoryBlind').removeClass("offset-2");

            });
            $('#dbblindsCategoryFile').change(function() {
                AddImg(this, '#dbblindsCategoryImg');


            });


            $(function() {
                $('.imgCategory').on('click', function() {
                    $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                    $('#enlargeImageModal').modal('show');
                });
            });
            $parent = "";
            $fabricId = "";

            $("button.btn_edit").click(function(event) {
                $parent = $("#" + event.target.id).parents('.card-category');

                $title = $parent.find(".title").html();
                $description = $parent.find(".description").html();
                $dimensionw = $parent.find(".dimensionw").html();
                $dimensionh = $parent.find(".dimensionh").html();
                $imgCategory = $parent.find(".imgCategory").attr('src');
                $categoryId = $parent.find(".categoryId").val();



                $dimensionw = $dimensionw.substr(11);
                $dimensionh = $dimensionh.substr(12);



                $("#dbcategoryId").val($categoryId);
                $("#dbblindsCategoryName").val($title);
                $("#dbblindsCategoryWidth").val($dimensionw);
                $("#dbblindsCategoryHeight").val($dimensionh);
                $("#dbblindsCategoryImg").attr('src', $imgCategory);
                $("#dbblindsCategoryDescription").text($description);


            });


            $("button.btn_remove").click(function(event) {

                $parent = $("#" + event.target.id).parents('.card-category');
                $categoryId = $parent.find("input.categoryId").val();

                $("#deleteCategory").val($categoryId);

            });
            $("[data-toggle=popover]").each(function(i, obj) {


                $(this).popover({
                    html: true,
                    content: function() {
                        var id = $(this).attr('id');
                        //                        alert($fabricId);

                        return $('#popover-content').html();
                    }
                });


            });
            $('.popover-dismiss').popover({
                trigger: 'focus'
            });
            $(".bd-addBlindsCategory-modal").on('hide.bs.modal', function(event) {
                $('#blindsCategoryName').val('');
                $('#blindsCategoryWidth').val('');
                $('#blindsCategoryHeight').val('');
                $('#blindsCategoryDescription').val('');
                $('#saveBlindsCategory').attr("disabled", "disabled");

            });
            $(".bd-editBlindsCategory-modal").on('hide.bs.modal', function(event) {
                $('#editCategory').attr("disabled", "disabled");
            });
            

            $("#dbblindsCategoryDescription, #dbblindsCategoryHeight, #dbblindsCategoryWidth, #dbblindsCategoryName, #dbblindsCategoryFile").change(function() {
                $('#editCategory').removeAttr("disabled");
            });
//            #blindsCategoryDescription, #blindsCategoryHeight, #blindsCategoryWidth, #blindsCategoryName, 
            $("#blindsCategoryFile").change(function() {
                $('#saveBlindsCategory').removeAttr("disabled");
            });
           


          



        });

        function isset(element) {
            return element.length > 0;
        }

        function remove(action) {

            if (action == "Yes") {
                //                alert("ASD");
                var form = document.forms.deleteForm;
                form.submit();
            } else {

            }

        }

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

    </script>
</body>

</html>
