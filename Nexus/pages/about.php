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
    <div>


    </div>

    <div>
      <div class="mx-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <iframe class="w-100" height="600" src="adamarc.php" frameborder="0"></iframe>
              <div class="carousel-caption d-none d-md-block">
                <a id="move-down" href="#move-here" class="btn btn-outline-secondary">Down</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <section id="move-here"></section>
    <div class="container">
      <div class="row">

        <div class="col-12 col-sm">
          <h3 class="mt-5">Adam <i class="text-danger">A</i><i class="text-warning">r</i><i class="text-primary">c</i> Blinds &amp; Décor</h3>
          <p class="text-left lead pl-3">
            <br/> The <b>Adam <i class="text-danger">A</i><i class="text-warning">r</i><i class="text-primary">c</i> Blinds &amp; Décor</b> firm is primarily located at <b><a href="https://www.google.com.ph/maps/place/14%C2%B050'34.4%22N+120%C2%B050'35.4%22E/@14.8429113,120.8344052,2938m/data=!3m2!1e3!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d14.8428913!4d120.8431601?hl=en" target="_blank">Unit 3 VCA Commercial Bldg. McArthur Hi-way, San Pablo, Malolos, Bulacan</a></b>, nearby the road which makes it noticeable. Almost every vehicles passing the road can easily recognize the firm, which is an advantage to every business and can come up in an increase in number of customers. It conforms to every business ideals which is a location that accessible to everyone. The firms also provides a parking lot for all of its customers or inquirers so that customers will not be bother about their vehicle’s condition while they are still having conversation inside the firm. In the year (2015) AdamArc opens to public and start to offer their imported and high quality products.<br/><br/>
          </p>
        </div>
        <div class="col-12 col-xl-5 col-lg-5 col-sm-12">
          <img class="img-fluid rounded h-0 w-35 rounded" src="../images/showroom.jpg" alt="AdamArc Showroom">

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
              <div class="card-body star-rating" id="divRating">
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
    <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <script type="text/javascript" src="../js/allscript.js"></script>

</body>

</html>