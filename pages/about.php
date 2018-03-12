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


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/aboutpage.css">
    <script>
        function feedbackNav() {
            var element = document.getElementById("feedBckNav").childNodes;

            //alert(element);
        }

        $(document).ready(function() {
            var $star_rating = $('.star-rating .fa');

            var SetRatingStar = function() {
                return $star_rating.each(function() {
                    if (parseInt($star_rating.siblings('input.rating-value').val()) > parseInt($(this).data('rating')) - 1) {
                        return $(this).removeClass('text-secondary').addClass('text-warning');
                    } else {
                        return $(this).removeClass('text-warning').addClass('text-secondary');
                    }
                });
            };

            $star_rating.hover(function() {
                $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStar();
            });

            SetRatingStar();


        });
        
        function changeActive(id){
            $("#ideas").removeClass("active");
            $("#questions").removeClass("active");
            $("#problem").removeClass("active");
            $("#praise").removeClass("active");
            

            $("#"+id).addClass("active");
            
            $("#Divideas").removeClass("d-block").addClass("d-none");
            $("#Divquestions").removeClass("d-block").addClass("d-none");
            $("#Divproblem").removeClass("d-block").addClass("d-none");
            $("#Divpraise").removeClass("d-block").addClass("d-none");
            
            $("#Div"+id).addClass("d-block");
        }


    </script>

</head>

<body onload="feedbackNav()">
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark position-ralative">
    <div class="d-flex w-100">
      <a class="navbar-brand" href="#">
      <img src="../images/AdamArc Logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Adam Arc</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item pr-4">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="customization.php">Customize</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="catalogue.php">Catalogue</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item pr-4 active">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item pr-4">
          <div class="dropdown">
            <button id="login" class="btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">Login</button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="login">
                <form class="px-4 py-3">
                  <div class="form-group">
                    <label for="loginEmailAddress">Email address</label>
                    <input type="email" class="form-control" id="loginEmailAddress" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New around here? <span class="text-info">Sign up</span></a>
                <a class="dropdown-item" href="#">Forgot password?</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
    <div>
        <div class="mx-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 a" src="../images/about.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-1 b"><span class="fa fa-"></span>ABOUT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!--    <div class="jumbotron"></div>-->

    <div class="contains">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-xl-5 col-lg-5 col-sm-12">
                    <img class="img-fluid rounded h-0 w-35 rounded" src="../images/showroom.jpg" alt="AdamArc Showroom">

                </div>
                <div class="col-12 col-sm">
                    <p class="text-left lead">
                        <br/> The <b>AdamArc Blinds and Decor Firm</b> is primarily located at <b>Unit 3 VCA Commercial Bldg. McArthur Hi-way, San Pablo, Malolos, Bulacan</b>, nearby the road which makes it noticeable. Almost every vehicles passing the road can easily recognize the firm, which is an advantage to every business and can come up in an increase in number of customers. It conforms to every business ideals which is a location that accessible to everyone. The firms also provides a parking lot for all of its customers or inquirers so that customers will not be bother about their vehicle’s condition while they are still having conversation inside the firm. In the year (2015) AdamArc opens to public and start to offer their imported and high quality products.<br/><br/> The owner of the firm, <b>Mr. Noel Manio</b> started this business primarily because of demand in interior designs such as window blinds coupled with his fashion and knowledge in marketing and working experience. AdamArc firm has its color theme of green and brown that makes it more nature like that looks charming and pleasant in appearance for most of the customers.
                    </p>
                </div>

            </div>
        </div>


    </div>

    <div class="container">
        <div>
            <h1>Feedback</h1>
            <h6>Please tell us what do you think, any kind of feedback is highly appreciated.</h6>
            
            
            
<!--            -->
            <nav class="nav nav-pills flex-column flex-sm-row" id="feedBckNav">
                <button class="btn btn-link flex-sm-fill text-sm-center nav-link active" href="#" id="ideas" onclick="changeActive(this.id)"><span class="fa fa-lightbulb"></span> Ideas</button>
                <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="questions" onclick="changeActive(this.id)"><span class="fa fa-question-circle"></span> Questions</button>
                <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="problem" onclick="changeActive(this.id)"><span class="fa fa-exclamation"></span> Problem</button>
                <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="praise" onclick="changeActive(this.id)"><span class="fa fa-heart"></span> Praise</button>
            </nav>
        </div>
        <div class="form-group">
            <div class="col-5" id="feedback">
                <!--IDEAS-->
                <div id="Divideas" class="d-block">
                    <br/>
                    <textarea id="feed" name="feed" class="form-control" rows="6" placeholder="Your feedback"></textarea><br/>
                    <input type="text" name="summary" id="summary" class="form-control" placeholder="Short summary"><br/>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your email address"><br/>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name"><br/>
                    <button id="send" class="btn btn-primary">Submit feedback</button><br/>
                </div>
                <!--QUESTIONS-->
                <div id="Divquestions" class="d-none">
                    <br/>
                    <textarea id="feed" name="feed" class="form-control" rows="6" placeholder="Your question"></textarea><br/>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your email address"><br/>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name"><br/>
                    <button id="send" class="btn btn-primary">Submit question</button><br/>
                </div>
                <!--PROBLEM-->
                <div id="Divproblem" class=" d-none">
                    <br/>
                    <textarea id="feed" name="feed" class="form-control" rows="6" placeholder="What's the problem?"></textarea><br/>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your email address"><br/>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name"><br/>
                    <button id="send" class="btn btn-primary">Submit problem</button><br/>
                </div>
                <!--PRAISE-->
                <div id="Divpraise" class=" d-none">
                    <br/>
                    <!--5 STARS RATINGS-->
                    <div class="card-body star-rating">
                        <span class="rating fa fa-star" id="rate_1" data-rating="1"></span>
                        <span class="rating fa fa-star" id="rate_2" data-rating="2"></span>
                        <span class="rating fa fa-star" id="rate_3" data-rating="3"></span>
                        <span class="rating fa fa-star" id="rate_4" data-rating="4"></span>
                        <span class="rating fa fa-star" id="rate_5" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" value="0">
                    </div>

                    <textarea id="feed" name="feed" class="form-control" rows="6" placeholder="Your feedback"></textarea><br/>
                    <input type="text" name="summary" id="summary" class="form-control" placeholder="Short summary"><br/>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your email address"><br/>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name"><br/>
                    <button id="send" class="btn btn-primary">Submit feedback</button><br/>
                </div>
            </div>
        </div>

    </div>


    <?php include("../include/footer.php"); ?>
</body>

</html>
