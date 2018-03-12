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


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/admin.css">
    <script>
        $(document).ready(function() {
            $('.panel-body').slideUp(function() {
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
            });
            $('#feeds').addClass('fas fa-comment-alt');
            $('#feed').html("");

        });

        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();

            $("#notification").popover({
                html: true,
                //                content: '#popover_content_wrapper';
            });

            $('.popover-dismiss').popover({
                trigger: 'focus'
            });

            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;

            if (isMobile) {
                //                alert("AS");

            }
        });

    </script>


</head>

<body>


    <div class="container-fluid">

        <div class="row d-flex d-md-block  wrapper">




            <!--NAVBAR           -->

            <div class="row bg-light" style=" box-shadow: 1px 1px 10px grey;">
                <!--              -->
                <!--                <a href="#" data-target="#sidebar" data-toggle="collapse" style="color:#1b6168"><i class="fas fa-bars fa-3x py-2 p-1 ml-1"></i></a>-->
                <div class="col-xl-4 col-md-4 col-sm-8 ml-4">
                    <image src="../images/name.png" class="img-fluid w-50 m-2 ml-4 p-md-2" style="" alt="AdamArc"></image>

                </div>


                <div class="offset-6 mt-5">
                    <!--3-->
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
            <div class="col-md-2 float-left col-1 pl-0 pr-0 sticky-top width show" id="sidebar">
                <div class="list-group border-0 card text-center text-md-left show" style="background: linear-gradient(180deg, #202930 50%, #293a42 50%);">

                    <!--                    -->

                    <a href="#" class="active list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-film ml-2"></i> <span class="d-none d-md-inline ml-2">Dashboard</span></a>

                    <a href="order.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clipboard ml-2"></i> <span class="d-none d-md-inline ml-2">Orders</span> </a>

                    <a href="blinds.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-th-large ml-2"></i> <span class="d-none d-md-inline ml-2">Blinds</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-image ml-2"></i> <span class="d-none d-md-inline ml-2">Template</span></a>

                    <a href="gallery.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-images ml-2"></i> <span class="d-none d-md-inline ml-2">Gallery</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th ml-2"></i> <span class="d-none d-md-inline ml-2">Notifications</span></a>
                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-calendar-alt ml-2"></i> <span class="d-none d-md-inline ml-2">Visitations</span></a>

                    <a href="manageAccounts.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                           <span class="fa-layers fa-fw ml-1">
                            <i class="fas fa-users"></i>
                             <i class="fas fa-cog fa-lg" data-fa-transform="right-7 down-6" style="color: #293a42"></i>
                            <i class="fas fa-cog fa-xs" data-fa-transform="right-10 down-8"></i>
                           
                        </span> <span class="d-none d-md-inline ml-1">Manage Accounts</span></a>



                    <a href="feedback.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-comments ml-2"></i> <span class="d-none d-md-inline ml-2">Feedback</span></a>

                    <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-chart-line ml-2"></i> <span class="d-none d-md-inline ml-2">Reports</span></a>


                </div>
            </div>
            <!--END NAVBAR           -->

            <main class="col-md-12 col px-5 pl-md-2 pl-xl-5 pt-2 main ">


                <div class="page-header">
                    <h1>Dashboard</h1>
                </div>
                <!--                <p class="lead">A responsive, multi-level vertical accordion.</p>-->
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="bg-dark counter">
                            <div class="offset-1 col-11 fa-6x m-0">
                                <span class="fa-layers fa-fw">
                                <i class="fas fa-circle text-muted"></i>
                                <i class="fa-inverse fas fa-eye text-dark" data-fa-transform="shrink-6"></i>
                            </span>

                            </div>
                            <div class="offset-1 col-10 pt-2 text-warning">
                                <label class="h1">231,121</label>

                            </div>
                            <div class="offset-0 col-10 pt-2 text-light">
                                <label class="lead">Daily Visits</label>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="bg-dark counter">
                            <div class="offset-1 col-11 fa-6x m-0">
                                <span class="fa-layers fa-fw">
                                <i class="fas fa-circle text-muted"></i>
                                <span class="fa-layers fa-fw">
                                    <i class="fa-inverse fas fa-eye text-dark mb-5" data-fa-transform="shrink-11 rotate-15"></i>
                                    <i class="fa-inverse fas fa-eye text-dark mb-4" data-fa-transform="shrink-10 rotate--10"></i>
                                    <i class="fa-inverse fas fa-eye text-dark mb-0" data-fa-transform="shrink-11 rotate-15"></i>
                                    
                                </span>

                                </span>

                            </div>
                            <div class="offset-1 col-10 pt-2 text-warning">
                                <label class="h1">231,121</label>

                            </div>
                            <div class="offset-0 col-10 pt-2 text-light">
                                <label class="lead">Number of Visits</label>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="bg-dark counter">
                            <div class="offset-1 col-11 fa-6x m-0">
                                <span class="fa-layers fa-fw">
                                    <i class="fas fa-circle text-muted"></i>
                                    <i class="fa-inverse fas fa-users text-dark" data-fa-transform="shrink-6"></i>
                                </span>

                            </div>
                            <div class="offset-1 col-10 pt-2 text-warning">
                                <label class="h1">231,121</label>

                            </div>
                            <div class="offset-0 col-10 pt-2 text-light">
                                <label class="lead">Number of Users</label>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="bg-dark counter">
                            <div class="offset-1 col-11 fa-6x m-0">
                                <span class="fa-layers fa-fw">
                                    <i class="fas fa-circle text-muted"></i>
                                      <i class="fas fa-clipboard text-dark" data-fa-transform="shrink-6"></i>
                               
                                </span>

                            </div>
                            <div class="offset-1 col-10 pt-2 text-warning">
                                <label class="h1">231,121</label>

                            </div>
                            <div class="offset-0 col-10 pt-2 text-light">
                                <label class="lead">Orders</label>
                            </div>

                        </div>

                    </div>
                </div>
                <!--                -->
                <!-- feedback messages -->
                <div class="container">
                    <div class="row chat-window col-xs-1 col-md-3" id="chat_window_1" style="margin-left:10px;">
                        <div class="col-10 col-md-12 ml-5" style="height:">
                            <div class="panel panel-default">
                                <div class="panel-heading top-bar ">
                                    <!---->
                                    <div class="col-md-8 col-xs-8">
                                        <span><span id="feeds"></span>
                                        <h5 id="feed">FEEDBACKS</h5>
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
                <!--   -->
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    


</body>

</html>
