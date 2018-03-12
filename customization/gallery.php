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


            //fabricDiv
            //            <div class="col-3 mb-2">
            //               <image src="images/fabric-1.png" class="img-thumbnail float-left" id="fabricImg"></image>
            //            </div>
            //            




            $("#uploadPhoto_browse").change(function() {
                readURL(this);
            });



        });
        $(document).ready(function(e) {
            $("#uploadPhoto").click(function() {
                $("#uploadPhoto_browse").trigger('click');
            });
            $('#post_Photo').click(function() {
                uploadPost();
                $('.bd-addPhptoGallery-modal').modal('hide');

            });
            $('.gallery').click(function() {

                $src = $(this).attr('src');
                $thisId = $(this).attr('id');
                $thisId = '#' + $thisId;


                $('#modalView').attr('src', $src);
                $data = "ASDSASAD";
                $('#modalCaption').html($data);
            });
            $('#blindImageType').on('hidden.bs.modal', function(e) {
                $('#modalCaption').html("");
            })
        });

        //        functions
        function readURL(input) {
            for (var i = 0; i < input.files.length; i++) {
                if (input.files[i]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {

                        $('#default-img').addClass('d-none');
                        $('#photoGallery').attr('src', e.target.result);

                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }

        function uploadPost() {

            var tImg = document.getElementById('photoGallery').src;
            var div = document.createElement("div");
            div.className = "card";

            var oImg = document.createElement("img");
            oImg.setAttribute('src', tImg);
            oImg.setAttribute('alt', 'Blind');
            oImg.setAttribute('class', 'img-fluid gallery');
            oImg.setAttribute('style', 'max-width: 100%; height: auto;');
            oImg.setAttribute('id', 'fabricImg0');
            oImg.setAttribute('data-toggle', 'modal');
            oImg.setAttribute('data-target', '.blindImageType');

            //            data-toggle="modal" data-target=".blindImageType" 

            div.appendChild(oImg);
            document.getElementById('fabricDiv').appendChild(div);

            document.getElementById('photoGallery').src = "";
            $('#default-img').removeClass('d-none');

        }

    </script>


</head>

<body>


    <div class="container-fluid">

        <div class="row d-flex d-md-block flex-nowrap wrapper">

            <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width show sticky-top" id="sidebar">
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

            <div class="bg-light p-2 " style=" box-shadow: 1px 1px 10px grey;">
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


            <main class="col-md-12 col px-5 pl-md-2 pl-xl-5 pt-2 main">



                <div class="page-header">
                    <h2>Bootstrap 4 Sidebar Menu</h2>
                </div>
                <p class="lead">A responsive, multi-level vertical accordion.</p>
                <hr>


             
                <!--        style="overflow: scroll"     gallery-->
                <div class="row mb-5">
                    <div class="col">
                        <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addPhptoGallery-modal">
                           <span class="fa-layers fa-fw mr-4">
                            <i class="fas fa-image fa-2x"></i>
                            <i class="fas fa-circle fa-lg" data-fa-transform="right-16 down-6" style="color: #6c757d"></i>
                            <i class="fas fa-plus fa-sm" data-fa-transform="right-22 down-9" style="color: white"></i>
                        </span>Add</button>

                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="card-columns ml-5 mr-5" id="fabricDiv">
                            <div class="card" title="Roller Blinds">

                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg1"></image>

                            </div>
                            <div class="card">

                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_LL_Roller_Coral_White_main1_open_MAIL.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg2"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/43b732b7cd0a2c5b8888ff13232a260e.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg3"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_LL_Roller_Coral_White_main1_open_MAIL.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg4"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg5"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/showroom.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg6"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg7"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_Roller-Chenille-Olive.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg8"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_Splash-1.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg9"></image>
                            </div>
                            <div class="card">
                                <image data-toggle="modal" data-target=".blindImageType" src="images/resize_LL_Roller_Coral_White_main1_open_MAIL.jpg" class="img-fluid gallery" style="max-width: 100%; height: auto;" id="fabricImg10"></image>
                            </div>



                        </div>


                    </div>
                    <!--                                <div class="col-xl-12 col-sm-12 col-12">-->

                    <!--                                </div>-->
                </div>




            </main>

            <!--        modal add photo-->
            <div class="modal fade bd-addPhptoGallery-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
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

                                <div class="col-6">
                                    <div class="col-5 mt-2">
                                        <label>Type of Blind:</label>

                                    </div>
                                    <div class="col-10 mt-2">
                                        <select class="form-control">
                                                <option>Roller Shade</option>
                                                <option>Combi Shade</option>
                                                <option>Triple Shade</option>
                                                <option>Vertical / Sheer Blind</option>
                                                <option>Sunscreen</option>
                                               
                                        </select>
                                    </div>

                                    <div class="col-2 mt-3">
                                        <label>Caption:</label>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <span class="uploadBtn" id="default-img">
                                                   <i class="far fa-image fa-10x text-info"></i>
                                               </span>
                                                <image src="" class="img-fluid" id="photoGallery"></image>
                                            </div>
                                        </div>

                                        <div class="row p-3 uploadBtn">
                                            <div class="col-12">

                                                <button class="btn btn-primary" id="uploadPhoto" class="uploadPhoto"><i class="fas fa-camera"></i>  Upload Photo</button>
                                                <input type="file" class="d-none" id="uploadPhoto_browse">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button class="btn btn-Success" id="post_Photo">Post</button>

                        </div>
                    </div>
                </div>
            </div>
            <!--            modal view photo-->


            <div class="modal fade blindImageType" id="blindImageType" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <img src="" class="img-fluid" id="modalView" class="modalView">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <span data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal" aria-label="Close" aria-hidden="true" class="close fas fa-circle fa-xs text-danger small"></span>
                                        <i></i>
                                        <h3>Roller Blinds</h3>
                                        <p class="" id="modalCaption"></p>
                                        <p class="small text-secondary">February 29, 2018</p>
                                        <i class="fas fa-star text-warning lead"></i>
                                        <i class="fas fa-star text-warning lead"></i>
                                        <i class="fas fa-star text-warning lead"></i>
                                        <i class="fas fa-star text-warning lead"></i>
                                        <i class="fas fa-star text-warning lead"></i>
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
