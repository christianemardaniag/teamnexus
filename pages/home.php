<!DOCTYPE html>

<html>

<head>
  <title>Home - Adam Arc Blinds and Decor</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!--
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link type="text/css" href="../css/style.css" rel="stylesheet">
  <link type="text/css" href="../css/ihover.css" rel="stylesheet">

  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>



  <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <script>
    $(window).on('load', function() {
      $(".loading").fadeOut("slow");
    });

  </script>

</head>

<body>

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
    <div class="loading position-fixed"></div>

    <iframe class="w-100" style="height: 100vh;" src="home_video.php" frameborder="0" encrypted-media></iframe>


    <div class="jumbotron" style="border-radius:0">
      <div class="d-flex justify-content-between mb-3">
        <h3>Different type of Blinds</h3>
        <a href="catalogue.php" class="btn btn-warning">View more..</a>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="ih-item square effect6 from_top_and_bottom">
              <a href="catalogue.php">
                <div class="img"><img src="../images/CombiBlinds/combi%20khaki.jpg" alt="Combi Shades"></div>
                <div class="info">
                  <h3>Combi Blinds</h3>
                  <p class="text-truncate">The Combi Blinds is combining the advantages of blinds and roller shades. It produces a variety of mood by the control of view and natural light. The two pieces of fabric with blockages and visible part are repeated at regular intervals controlling the view and light by a roller system. Combi shades are much more practical and softer nuances compared to regular blinds. It is a roll system product to block the light and protecting your privacy and also a better fit for any décor creating the ultimate effect to produce a soft atmosphere.</p>
                </div>
              </a>
            </div>

          </div>
          <div class="col-sm-6 col-md-3">
            <div class="ih-item square effect6 from_top_and_bottom">
              <a href="catalogue.php">
                <div class="img"><img src="../images/RollerBlinds/Benefits-of-Roller-Blinds-480x480.jpg" alt="Roller Shades"></div>
                <div class="info">
                  <h3>Roller Shades</h3>
                  <p class="text-truncate">Intense heat and glare environments can be totally controlled without blocking light and view.</p>
                </div>
              </a>
            </div>

          </div>
          <div class="col-sm-6 col-md-3">
            <div class="ih-item square effect6 from_top_and_bottom">
              <a href="catalogue.php">
                <div class="img"><img src="../images/VerticalBlinds/vertical_blind_sarra_icecap_main.jpg_1.jpg" alt="Vertical Blinds"></div>
                <div class="info">
                  <h3>Vertical Blinds</h3>
                  <p class="text-truncate">Intense heat and glare environments can be totally controlled without blocking light and view.</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="ih-item square effect6 from_top_and_bottom">
              <a href="catalogue.php">
                <div class="img"><img src="../images/RollerBlinds/Benefits-of-Roller-Blinds-480x480.jpg" alt="Sun Screen"></div>
                <div class="info">
                  <h3>Sun Screen</h3>
                  <p class="text-truncate">Intense heat and glare environments can be totally controlled without blocking light and view.</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


    </div>

    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/allscript.js"></script>

</body>


</html>
