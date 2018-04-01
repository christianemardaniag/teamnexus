<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="../images/templateImages/title-logo.png">
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
  <link type="text/css" href="../css/style.css" rel="stylesheet">

  <script>
    $(window).on('load', function() {
      $(".loading").fadeOut("slow");
    });

    function feedbackNav() {
      var element = document.getElementById("feedBckNav").childNodes;

      //alert(element);
    }

    $(document).ready(function() {
      $("#divRating").css("display", "none");
      var $star_rating = $('.star-rating .fa');

      var SetRatingStar = function() {
        return $star_rating.each(function() {
          if (parseInt($star_rating.siblings('input.rating-value').val()) > parseInt($(this).data('rating')) - 1) {
            $("#hiddenRating").val(parseInt($(this).data('rating')));

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

      $("#submitForm").submit(function() {
        alert("Feedback sended!");
      });


    });

    var feedbackType = "ideas";

    function changeActive(id, isVisible) {

      $("#selectedFeedbackType").val(id);
      $("#" + feedbackType).removeClass("active");
      feedbackType = id;
      $("#" + feedbackType).addClass("active");

      $("#divRating").css("display", isVisible);
      $("#hiddenRating").val(0);

    }

    $(document).ready(function() {
      $("#move-down").click(function(event) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              return false;
            } else {
              $target.attr('tabindex', '-1');
              $target.focus();
            };
          });
        }
      });
      
      $("[data-toggle='tooltip']").tooltip("show");
    });

  </script>


</head>

<body onload="feedbackNav()">
  <?php
  session_start();
  if (isset($_SESSION["current_user"]))
  {
    $current_user = $_SESSION["current_user"];
    
  }
  else
  {
    $current_user = "Login";
  }
      
  include("header.php");  
  ?>
<!--    <div class="loading position-fixed"></div>-->
    <div>
      <div class="mx-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <iframe class="w-100" style="height: 90vh;" src="adamarc.php" frameborder="0"></iframe>
              <div class="carousel-caption d-none d-md-block">
                <a id="move-down" href="#move-here" class="btn btn-outline-secondary">Down</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      

    </div>
    <section id="move-here"></section>
    <div class="jumbotron" style="background-color: white">
      <div class="container">
        <div class="row">

          <div class="col-12 col-sm">
            <h3 class="mt-5">Adam <i class="text-danger">A</i><i class="text-warning">r</i><i class="text-primary">c</i> Blinds &amp; Décor</h3>
            <p class="text-left lead pl-3">
              <br/> The <b>Adam <i class="text-danger">A</i><i class="text-warning">r</i><i class="text-primary">c</i> Blinds &amp; Décor</b> firm is primarily located at <b><a href="https://goo.gl/maps/bdGtEpwCA7t" target="_blank" data-toggle="tooltip" title="View on Google Maps" data-placement="left">Unit 3 VCA Commercial Bldg. McArthur Hi-way, San Pablo, Malolos, Bulacan</a></b>, nearby the road which makes it noticeable. Almost every vehicles passing the road can easily recognize the firm, which is an advantage to every business and can come up in an increase in number of customers. It conforms to every business ideals which is a location that accessible to everyone. The firms also provides a parking lot for all of its customers or inquirers so that customers will not be bother about their vehicle’s condition while they are still having conversation inside the firm. In the year (2015) AdamArc opens to public and start to offer their imported and high quality products.<br/><br/>
              
            </p>
            
          </div>
         
          <div class="col-12 col-xl-5 col-lg-5 col-sm-12">
                      <img class="img-fluid rounded h-0 rounded" src="../images/showroom.jpg" alt="AdamArc Showroom">
<!--            <div id="map" class="h-100 w-100" style="background:url('../images/showroom.jpg') no-repeat"></div>-->
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.1710430713202!2d120.84262909987868!3d14.842973216212599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f29937361d918db!2sAdam+Arc!5e0!3m2!1sen!2sph!4v1522389358030" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>-->
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron my-5" style="border-radius:0">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="../images/ted.png" class="d-block mx-auto rounded-circle" style="object-fit:cover;" alt="" height="200px" width="200px">

          </div>
          <div class="col-sm-6">
            <h5 class="mt-2">Mr. Noel Manio</h5>
            The owner of the firm, <b>Mr. Noel Manio</b> started this business primarily because of demand in interior designs such as window blinds coupled with his fashion and knowledge in marketing and working experience.
          </div>
        </div>

      </div>
    </div>
    <section id="feedback-page" class="m-5">&nbsp;</section>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div>
            <h1>Feedback</h1>
            <p class="text-muted">Please tell us what do you think, any kind of feedback is highly appreciated.</p>



            <!--            -->
            <nav class="nav nav-pills flex-column flex-sm-row" id="feedBckNav">
              <button class="btn btn-link flex-sm-fill text-sm-center nav-link active" href="#" id="ideas" onclick="changeActive(this.id, 'none')"><span class="fa fa-lightbulb"></span> Ideas</button>
              <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="questions" onclick="changeActive(this.id, 'none')"><span class="fa fa-question-circle"></span> Questions</button>
              <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="problem" onclick="changeActive(this.id, 'none')"><span class="fa fa-exclamation"></span> Problem</button>
              <button class="btn btn-link flex-sm-fill text-sm-center nav-link" href="#" id="praise" onclick="changeActive(this.id, 'block')"><span class="fa fa-heart"></span> Praise</button>
            </nav>
          </div>
          <form action="submitFeedback.php" method="POST" id="submitForm">
            <input type="hidden" id="selectedFeedbackType" name="selectedType" />
            <input type="hidden" id="hiddenRating" name="hiddenRating" value="0" />

            <div class="form-group">

              <div class="" id="feedback">
                <!--PRAISE-->
                <div>
                  <br/>
                  <!--5 STARS RATINGS-->
<!--
                  <div class="card-body star-rating" id="divRating">
                    <span class="rating fa fa-star" id="rate_1" data-rating="1"></span>
                    <span class="rating fa fa-star" id="rate_2" data-rating="2"></span>
                    <span class="rating fa fa-star" id="rate_3" data-rating="3"></span>
                    <span class="rating fa fa-star" id="rate_4" data-rating="4"></span>
                    <span class="rating fa fa-star" id="rate_5" data-rating="5"></span>
                    <input type="hidden" name="whatever1" class="rating-value" value="0">

                  </div>
-->

                  <textarea id="feed" name="feed" class="form-control" rows="6" placeholder="Your feedback"></textarea><br/>
                  <input type="text" name="summary" id="summary" class="form-control" placeholder="Short summary"><br/>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Your email address"><br/>
                  <button type="submit" id="send" class="btn btn-primary">Submit feedback</button><br/>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-6">
          <img src="../images/feedback.png" class="img-fluid">
        </div>
      </div>

    </div>


    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/allscript.js"></script>
    <script>
      function myMap() {
        var myCenter = new google.maps.LatLng(14.842891, 120.843160);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
          center: myCenter,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoom: 11
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
          position: myCenter,
          animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
    content: "<div class='container'><div class='row'><div class='col-8 text-center mt-3'><strong>Adam <i class='text-danger'>A</i><i class='text-warning'>r</i><i class='text-primary'>c</i></strong><br>Blinds & Décor</div><div class='col-4'><img class='img-fluid'width='50' height='50' src='../images/showroom.jpg' alt='AdamArc Showroom'></div></div></div>"
  });
  infowindow.open(map,marker);
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrEPqVX5l9VGkb8ZP96wWjKTwWLRsRREs&callback=myMap"></script>
</body>

</html>
