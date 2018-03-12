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
            $('#insertVideo').click(function(){
                $('#browseVideo').trigger('click');
            });
            $('#insertImage').click(function(){
                $('#browseImage').trigger('click');
            });
            $('#attachFile').click(function(){
                $('#browseFile').trigger('click');
            });
            
        });

        //get text 
        $(document).ready(function() {

            //            remove d-none in email cc and bcc
            $('#cc,#bcc').click(function() {
                $('#' + this.id + "Div").removeClass('d-none');
            });
        });

    </script>


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
                    </span>




                </div>

            </div>
            <!--END NAVBAR           -->


            <main class="col-md-12 col px-5 pl-md-2 pl-xl-5 pt-2 main ">



                <div class="page-header">
                    <h2>Bootstrap 4 Sidebar Menu</h2>
                </div>
                <p class="lead">A responsive, multi-level vertical accordion.</p>
                <hr>

                <div class="row">

                    <div class="col-9 mb-3 ml-3">
                        <div class="">
                            <!--                            editor-->
                            <div class="">
                                <button class="btn btn-primary"><i class="fas fa-envelope"></i> Send</button>
                                <button class="btn btn-info"id="attachFile"><i class="fas fa-paperclip"></i> Attach</button>
                                <input type="file" id="browseFile" class="d-none">
                                <button class="btn btn-info"><i class="fas fa-paperclip"></i> Discard</button>
                                <div class="float-right">
                                    <button class="btn btn-info"><i class="fas fa-times-circle fa-lg"></i></button>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-7 ml-4">
                        <div class="row">
                            <div class="col-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><a href="#" class="text-dark">To</a></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recepients" aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="cc"><a href="#" class="text-dark">Cc</a></span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="bcc"><a href="#" class="text-dark">Bcc</a></span>
                                    </div>
                                </div>
                                <!--                        hide-->
                                <div class="input-group d-none" id="ccDiv">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><a href="#" class="text-dark">Cc</a></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recepients" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group d-none" id="bccDiv">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><a href="#" class="text-dark">Bcc</a></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Recepients" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <!--                       end hide-->

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-10">
                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-10">
                        <div class="col-12">

                            <!--                               -->
                            <button class="btn btn-default dropdown-toggle" type="button" id="style" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-magic"></i>
                                  </button>
                            <div class="dropdown-menu" aria-labelledby="style">
                                <a class="dropdown-item" href="#">
                                    <p>Normal</p>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <blockquote>blockqoute</blockquote>
                                </a>
                                <a class="dropdown-item" href="#"><pre>code</pre></a>
                                <a class="dropdown-item" href="#">
                                    <h1>Header 1</h1>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <h2>Header 2</h2>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <h3>Header 3</h3>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <h4>Header 4</h4>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <h5>Header 5</h5>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <h6>Header 6</h6>
                                </a>
                            </div>
                            <!--                               -->
                            <button type="button" class="note-btn btn btn-default btn-sm note-btn-bold" tabindex="-1" title="" data-original-title="Bold (CTRL+B)"><i class="fas fa-bold"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm note-btn-underline" tabindex="-1" title="" data-original-title="Underline (CTRL+U)"><i class="fas fa-underline"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Font Style (CTRL+\)"><i class="fas fa-eraser"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Font Family"><span class="note-current-fontname">Segoe UI</span> <span class="note-icon-caret"></span></button>
                            <button type="button" class="note-btn btn btn-default btn-sm note-current-color-button" tabindex="-1" title="" data-original-title="Recent Color" data-backcolor="#FFFF00"><i class="fas fa-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="fas fa-list-ul"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="fas fa-list-ol"></i></button>
                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Link (CTRL+K)"><i class="fas fa-link"></i></button>
                            <button type="button" id= "insertImage" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Picture"><i class="fas fa-image"></i></button>
                            <input type="file" id="browseImage" class="d-none">
                            
                            <button type="button" id="insertVideo" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Video"><i class="fas fa-video"></i></button>
                            <input type="file" id="browseVideo" class="d-none">

                            <button type="button" class="note-btn btn btn-default btn-sm btn-codeview" tabindex="-1" title="" data-original-title="Code View"><i class="fas fa-code"></i></button>

                            <div class="note-editing-area mt-3">
                                <div class="note-handle">
                                    <div class="note-control-selection" style="display: none;">
                                        <div class="note-control-selection-bg"></div>
                                        <div class="note-control-holder note-control-nw"></div>
                                        <div class="note-control-holder note-control-ne"></div>
                                        <div class="note-control-holder note-control-sw"></div>
                                        <div class="note-control-sizing note-control-se"></div>
                                        <div class="note-control-selection-info"></div>
                                    </div>
                                </div><textarea class="note-codable"  style="height: 436.4px; width: 900px;"></textarea>
                                <div class="note-editable panel-body" contenteditable="true" style="height: 436.4px;">
                                    <blockquote>
                                        <p><br></p>
                                    </blockquote>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>


                <!--                </div>-->
            </main>




        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
