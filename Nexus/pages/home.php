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
<<<<<<< HEAD:pages/home.php
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
=======
  

  <div class="jumbotron bg-dark" style="border-radius: 0;">
    <h1 class="display-1 text-center text-light">Blinds and Decor</h1>
    <!--    <p class="lead text-center text-muted font-italic">We supply, customize and install premium quality of window blinds from Korea.</p>-->
    <blockquote class="blockquote text-center font-italic text-light">
      “Luxury must be comfortable, otherwise it is not luxury.” 

      <footer class="blockquote-footer">Coco Chanel</footer>

    </blockquote>
    <button type="button" class="btn btn-outline-warning d-block mx-auto" onclick="window.open('catalogue.php', '_self')">Catalogue <span class="fa fa-angle-double-right"></span></button>
  </div>

  <div class="container">
    <div class="card-columns">
      <div class="card">
        <img class="card-img-top" style="object-fit: cover;" src="../images/43b732b7cd0a2c5b8888ff13232a260e.jpg">
        <div class="card-body">
          <h4 class="card-title">Roller Blinds</h4>
          <p class="card-text">The blind can be rolled up or down to achieve the required level of shading.</p>
          <button type="button" class="btn btn-warning btn-block">View</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="../images/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg">
        <div class="card-body">
          <h4 class="card-title">Roller Blinds</h4>
          <p class="card-text text-justify">The blind can be rolled up or down to achieve the required level of shading.</p>
          <button type="button" class="btn btn-warning btn-block">View</button>
        </div>
      </div>
>>>>>>> 9350d35b71bfa520600526c8c0715301d363229a:Nexus/pages/home.php

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

<<<<<<< HEAD:pages/home.php
    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/allscript.js"></script>

=======
  <?php include("../include/footer.php"); ?>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
  <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
  <script type="text/javascript" src="../js/allscript.js"></script>
  
>>>>>>> 9350d35b71bfa520600526c8c0715301d363229a:Nexus/pages/home.php
</body>


</html>
