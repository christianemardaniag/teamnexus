<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
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
                    <div class="col-6"><i class="fa fa-images"></i> Gallery</div>
                </div>

                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col">
                            <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addPhptoGallery-modal">
                           <span class="fa-layers fa-fw mr-4">
                            <i class="fas fa-image fa-2x"></i>
                            <i class="fas fa-circle fa-lg" data-fa-transform="right-16 down-6" style="color: #6c757d"></i>
                            <i class="fas fa-plus fa-sm" data-fa-transform="right-22 down-9" style="color: white"></i>
                        </span>Add Post</button>

                        </div>
                        <div class="col-2">
                            <select name="sortDate" id="sortDate" class="form-control sort">
                                <option value="latest">Latest</option>
                                <option value="oldest">Oldest</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img style="height:280px;" class="img-responsive img-gallery"  src="images/CombiBlinds.jpg" /></a></div>


                    </div>



                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <!--            gallery modal-->
            <div tabindex="-1" class="modal fade" id="myModal-gallery" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" id="close" type="button" data-dismiss="modal">×</button>
                            <h3 class="modal-title"></h3>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-7">
                                        <img src="" alt="img1" class="img-fluid" id="modal-Gallery">
                                    </div>
                                    <!--
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-5">
                                        <h3>Roller Blinds</h3>
                                        <div class="dropdown-divider"></div>
                                    </div>
-->
                                    


                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--            end gallery modal-->

            <!--            add post-->
            <div class="modal fade bd-addPhptoGallery-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <form method="post" enctype="multipart/form-data" action="uploadGallery.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--                           -->
                                <!--                           -->
                                <h5 class="modal-title">
                                    <span class="fa-layers fa-fw">
                                   
                                    <i class="fas fa-home fa-lg"></i>
                                    <i class="fas fa-pencil-alt fa-lg" data-fa-transform="right-10 up-4" style="color:white"></i>
                                     <i class="fas fa-pencil-alt" data-fa-transform="right-13 up-3"></i>
                                     
                                    
                                </span> &nbsp; Add a post

                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="lead">Post Information</label>

                                    </div>
                                    <div class="col-12">
                                        <div id="imgs" class="imgs">

                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="row p-3 uploadBtn">
                                            <div class="col-12">
                                                <?php
                                                         date_default_timezone_set("Asia/Manila");
                                                        $dateTime = date("Y/m/d h:i:sa");
                                                        echo "<input type='hidden' name = 'date' id = 'date' value = '" . $dateTime . "'>";
                                                    ?>

                                                    <a class="btn btn-primary" id="uploadPhoto" class="uploadPhoto"><i class="fas fa-camera"></i>  Upload Photo</a>
                                                    <input type="file" class="btn btn-primary d-none" id="uploadPhoto_browse" name="uploadPhoto_browse[]" multiple>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">

                                <div class="col-10 ml-3">
                                    <label>Caption:</label>
                                    <textarea class="form-control domFile" id="txtAreaDescription" name="txtAreaDescription" rows="6" style="width: 700px"></textarea>
                                </div>

                                <div class="col-2 ml-2">
                                    <button class="btn btn-Success" id="post_Photo">Post</button>
                                    <button type="submit" class="btn btn-Success d-none" id="Upload_Post" name="Upload_Post">Post</button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!--            end add post-->




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
                                <!--                        -->



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
                $(document).ready(function() {

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


                    //modal gallery

                    $(function() {
                        $('.img-gallery').on('click', function() {
                            $('#modal-Gallery').attr('src', $(this).attr('src'));
                            $('#myModal-gallery').modal('show');

                        });
                    });

                    $("#uploadPhoto").click(function() {
                        $("#uploadPhoto_browse").trigger('click');
                    });
                    $('#post_Photo').click(function() {
                        uploadPost();
                        $('.bd-addPhptoGallery-modal').modal('hide');

                    });

                    //                    $("#uploadPhoto_browse").change(function() {
                    //                       
                    //                        changeImage(this);
                    //
                    //                    });

                    $(".bd-addPhptoGallery-modal").on('hide.bs.modal', function(event) {
                        $('#imgs').empty();

                    });

                    document.getElementById('uploadPhoto_browse').addEventListener('change', handleFileSelect, false);

                    window.galleryImage = [];
                    window.galleryImageName = [];

                    function handleFileSelect(evt) {
                        var files = evt.target.files; // FileList object
                        var ctrid = 0;
                        // Loop through the FileList and render image files as thumbnails.
                        for (var i = 0, f; f = files[i]; i++) {

                            //                            alert(i);


                            // Only process image files.
                            if (!f.type.match('image.*')) {
                                continue;
                            }

                            var reader = new FileReader();

                            // Closure to capture the file information.
                            reader.onload = (function(theFile) {
                                return function(e) {

                                    //                                    

                                    // Render thumbnail.
                                    galleryImage[ctrid] = ctrid;
                                    galleryImageName[ctrid] = files[ctrid].name;
                                    //                                    alert(galleryImageName[ctrid]);

                                    var span = document.createElement('span');
                                    span.innerHTML = ['<img onclick = "deleteImg(this.id,\'' + galleryImageName[ctrid] + '\')" class="ml-3" id = "  ' + ctrid + '" style="object-fit: cover;" height="100" width="100" class="m-2 rounded" src="', e.target.result,
                                        '" title="', escape(theFile.name), '"/>'
                                    ].join('');
                                    ctrid++;

                                    document.getElementById('imgs').insertBefore(span, null);
                                };
                            })(f);


                            // Read in the image file as a data URL.
                            reader.readAsDataURL(f);
                        }
                        //                         
                    }




                });

                function deleteImg(id, imgSrc) {

                    var a = confirm("Delete images?");

                    if (a) {
                        document.getElementById(id).remove();
                        var index = galleryImage.indexOf(parseInt(id));
                        var index2 = galleryImageName.indexOf(imgSrc);

                        galleryImage.splice(index, 1);
                        galleryImageName.splice(index2, 1);
                        //                         alert(galleryImageName.toString());

                        document.getElementById("arrayImgs").value = galleryImageName;


                    }

                }

                //                function changeImage(input) {
                //                    for (var i = 0; i < input.files.length; i++) {
                //                        if (input.files[i]) {
                //                            var reader = new FileReader();
                //
                //                            reader.onload = function(e) {
                //
                //                                $('#default-img').addClass('d-none');
                //                                $('#photoGallery').attr('src', e.target.result);
                //
                //                            }
                //                            reader.readAsDataURL(input.files[i]);
                //                        }
                //                    }
                //                }

            </script>
        </div>
    </div>
</body>

</html>
