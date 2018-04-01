<!DOCTYPE html>

<html>

<head>
  <title>Home - Adam Arc Blinds and Decor</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../images/templateImages/title-logo.png">
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
  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Handlee');

  </style>
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


    <div class="jumbotron bg-light" style="border-radius: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left">
            <h3 class="mt-md-5 display-4">Customization</h3>
            <p class="ml-2 lead">You want your blinds to have a touch of your own taste? Or have an an idea but don't know how to start? Say no more. Here in our Customization Section, you can browse hundreds and thousands of designs you can choose from. You can also put your own designs or whatever you find appropriate to your own taste.
</p>
            <div>
              <div class="text-muted">Select color</div>
              <?php 
              $title = ['Ultra Violet','Spring Crocus','Emperador','Meadowlark','Cherry Tomato','Little Boy Blue','Pink Lavender'];
              $color = ['#6B5B95','#EADEDB','#6C4F3D','#ECDB54','#E94B3C','#6F9FD8','#DBB1CD'];
              for($i = 0; $i < 7; $i++){
                  echo "<span class='cursor-pointer mr-2' data-toggle='tooltip' title='$title[$i]' onclick='changeColor(\"$color[$i]\")'><i class='fas fa-dot-circle fa-2x' style='color: $color[$i]'></i></span>";
              }
              ?>
            </div>
            <a class="btn btn-warning my-2" href='customization.php'>Try Customization</a>
          </div>
          <div class="col-md-6 text-center text-md-left">
            <div id="canvasSizer">
              <canvas id="customizationCanvas" class="customizationCanvas" width="600" height="525" style="border: 1px solid #6c757d; border-radius: 4px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron" style="border-radius: 0; background-color: white;">

      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left">
            <img class="img-fluid rounded" src="../images/catalogue2.jpg">
          </div>
          <div class="col-md-6 text-center text-md-left">
            <h3 class="mt-md-5 display-4">Catalogue</h3>
            <p class="ml-2 lead">Need to find or add another awesome design? Just browse through our Catalogue section and find more interesting designs and other amazing stuffs.</p>
            <a href="catalogue.php" class="btn btn-warning">View Catalogue</a>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron bg-light" style="border-radius: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left">
            <h3 class="mt-md-5 display-4">Gallery</h3>
            <p class="ml-2 lead">Having doubt on us or you have trust issues? We say forget it. In this Gallery section, you can find our past &amp; present clients that are 100% satisfied with our services. </p>
            <a class="btn btn-warning mb-2" href='gallery.php'>View Gallery</a>
          </div>
          <div class="col-md-6 text-center text-md-left">
            <div id="gallery-images" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                include("../classes/DatabaseQuery.php");
                  $dbQ = new DatabaseQuery(new DatabaseInfo);
                  $galleryImages = "SELECT post_image FROM tbl_postimage, post where post.post_status = 'available' ORDER BY RAND() limit 5";
                  $allImages = $dbQ->query($galleryImages);
                  $flag = true;
                  while ($row = mysqli_fetch_array($allImages)){
                    $image = $dbQ->getBlob($row["post_image"]);
                    if($flag){
                      echo "<div class='carousel-item active'><img class='' height='400' style='object-fit: cover' src='$image'></div>";
                      $flag = false;
                    }else {
                      echo "<div class='carousel-item'><img class='' height='400' style='object-fit: cover' src='$image'></div>";
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron" style="border-radius: 0; background-color: white;">

      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left">
            <img class="img-fluid rounded" src="../images/feedback.png">
          </div>
          <div class="col-md-6 text-center text-md-left">
            <h3 class="mt-md-5 display-4">Feedback</h3>
            <p class="ml-2 lead">Saw something that needs to be improved or you just need to comment on the satisfactory-guaranteed service that we are providing? Go to our Feedback section and tell us everything what you think about us. Comments, suggestions, feedbacks, ratings are welcome.</p>
            <a class="btn btn-warning" href='about.php#feedback-page'>Send Feedback</a>
          </div>
        </div>
      </div>
    </div>



    <?php include("../include/footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.22/fabric.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/allscript.js"></script>
    <script type="text/javascript" src="../js/fontawesome-all.min.js"></script>

    <script>
      $(window).on('load', function() {
        $(".loading").fadeOut("slow");
      });
      var canvas = new fabric.Canvas("customizationCanvas", {
        width: 600,
        height: 525,
        containerClassName: 'customizationCanvas',
        renderOnAddRemove: false,
        preserveObjectStacking: true
      });
      var roller = new fabric.Rect({
        id: "cloth",
        width: 350,
        height: 280,
        top: 40,
        left: 80,
        lockMovementX: true,
        lockMovementY: true,
        hasControls: false,
        selectable: false,
        selection: true,
        objectCaching: false,
      });
      var text = new fabric.Textbox("Life comes full circle", {
        id: "textbox",
        fontFamily: "Handlee",
        width: 200,
        top: 100,
        left: 180,
        textAlign: 'center',
        objectCaching: false,
      });

      $(document).ready(function() {
        function resizeCanvas() {
          var canvasSizer = $("#canvasSizer"),
            width = canvasSizer.width(),
            height = canvasSizer.height(),
            ratio = canvas.getWidth() / canvas.getHeight();
          if ((width / height) > ratio) {
            width = height * ratio;
          } else {
            height = width / ratio;
          }
          var scale = width / canvas.getWidth(),
            zoom = canvas.getZoom();
          zoom *= scale;
          canvas.setDimensions({
            width: width,
            height: height
          });
          canvas.setViewportTransform([zoom, 0, 0, zoom, 0, 0]);
        }
        window.addEventListener('resize', resizeCanvas, false);
        window.addEventListener('load', resizeCanvas, false);
        canvas.setZoom(1.1);

        canvas.setOverlayImage("../images/window.png",
          canvas.renderAll.bind(canvas), {
            scaleX: 1,
            scaleY: 1,
          });
        canvas.setBackgroundImage("../images/background3.jpg", canvas.renderAll.bind(canvas));

        canvas.on('object:selected', function(e) {
          e.target.set({
            cornerStyle: 'circle',
            borderColor: '#17a2b8',
            cornerStrokeColor: 'white',
            padding: 5,
            transparentCorners: false,
            selectionBackgroundColor: '#ffffff59',
            rotatingPointOffset: 20
          });
        });
        canvas.add(roller);
        var radius = [40, 70, 20, 30, 10];
        var top = [100, 50, 247, 200, 210];
        var left = [230, 90, 200, 300, 245];
        var fill = ['#ECDB54', '#E94B3C', '#6F9FD8', '#00A591', '#6C4F3D'];
        for (i = 0; i < 5; i++) {
          var circle = new fabric.Circle({
            radius: radius[i],
            top: top[i],
            left: left[i],
            fill: fill[i],
            perPixelTargetFind: true,
            objectCaching: false,
            lockScalingFlip: true,
          });
          canvas.add(circle)
        }
        canvas.add(text).setActiveObject(text);
        loadPattern(window.roller, "white");
      });

      function loadPattern(object, color) {
        url = "../images/fabric-1.jpg";
        fabric.Image.fromURL(url, function(img) {
          img.scaleToWidth(100);
          var patternSourceCanvas = new fabric.StaticCanvas();
          var pattern = patternSourceCanvas.getElement();
          object.set({
            'fill': new fabric.Pattern({
              source: function() {
                patternSourceCanvas.setDimensions({
                  width: 50,
                  height: 50
                });
                patternSourceCanvas.renderAll();
                return patternSourceCanvas.getElement();
              },
              repeat: 'repeat',
            })
          });
          setFilterColor(img, color);
          patternSourceCanvas.add(img);
          patternSourceCanvas.renderAll();
          canvas.renderAll();
        });
      }

      function setFilterColor(object, color) {
        var filter = new fabric.Image.filters.Blend({
          color: color,
          mode: 'multiply',
          alpha: 1
        });
        object.filters.push(filter);
        object.applyFilters(canvas.renderAll.bind(canvas));
      }

      function changeColor(color) {
        var object = canvas.getActiveObject();
        var group = canvas.getActiveGroup();
        if (object) {
          loadPattern(object, color);
        } else if (group) {
          group.forEachObject(function(obj) {
            loadPattern(obj, color);
          });
        } else {
          loadPattern(window.roller, color);
        }
      }

    </script>


</body>


</html>
