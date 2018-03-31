<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <!-- Required meta tags -->
  <title>Gallery - Adam Arc Blinds and Decor</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <link type="text/css" href="../css/style.css" rel="stylesheet">
=======
    <!-- Required meta tags -->
    <title>Gallery - Adam Arc Blinds and Decor</title>
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


    <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../js/fabric.js"></script>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>



    <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

    <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="../css/style.css" rel="stylesheet">
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee

</head>

<body>

<<<<<<< HEAD
  <?php
=======
    <?php
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee
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
<<<<<<< HEAD


    <div class="jumbotron">
      <h1 class="display-5 text-center">Gallery</h1>
      
    </div>
    
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fadamarc.bd%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>


    <div class="loading position-fixed"></div>
    <div class="mt-4">
      <div class="container">
        <div class="row">
<!--
          <?php
=======
        

        <div class="jumbotron">

            <h1 class="display-2 text-center">Gallery</h1>
        </div>

      
       <div class="loading position-fixed"></div>
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <?php
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee
                     include("../classes/DatabaseQuery.php");
                             $dbq = new DatabaseQuery(new DatabaseInfo);    

                            $query = "select post_id, post_image from tbl_postimage group by post_id";
                        
                             $result = $dbq->query($query);
                             $ctr = 0;
                        
                             while($row = mysqli_fetch_array($result)){
                                 
                                  $dbImg = $dbq->getBlob($row['post_image']);
                                 $post_id = $row['post_id'];
                                 
                                
                                echo "<div class='col-4'>";
                                    echo "<img src='" . $dbImg . "' class='mb-3 img-gallery' alt='' width='360' height='300' style='object-fit: cover' data-toggle='modal' data-target='#modalGallery'>";
                                echo "</div>";
                             }
                         
                        ?>



<<<<<<< HEAD
-->

        </div>
      </div>
    </div>
    <!--        modal-->
    <div class="modal fade" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="modalGalleryLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="modalGalleryLabel">Gallery</h4>
          </div>
          <!-- /.modal-header -->

          <div class="modal-body">
            <div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">
              </div>
              <!-- /.carousel-inner -->
            </div>
            <!-- /.carousel -->
          </div>
          <!-- /.modal-body -->

          <!--
=======

                </div>
            </div>
        </div>
        <!--        modal-->
        <div class="modal fade" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="modalGalleryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="modalGalleryLabel">Gallery</h4>
                    </div>
                    <!-- /.modal-header -->

                    <div class="modal-body">
                        <div id="carouselGallery" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                            </div>
                            <!-- /.carousel-inner -->
                        </div>
                        <!-- /.carousel -->
                    </div>
                    <!-- /.modal-body -->

<!--
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee
                    <div class="modal-footer">
                        <ul class="pagination">
                        </ul>
                    </div>
-->
<<<<<<< HEAD
          <!-- /.modal-footer -->
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <?php include("../include/footer.php"); ?>



    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <script type="text/javascript" src="../js/allscript.js"></script>
    <script>
      $(window).on('load', function() {
        $(".loading").fadeOut("slow");
      });
      $(document).ready(function() {
        $('.img-gallery').click(function() {
          var galleryId = $(this).attr('data-target');
          var currentLinkIndex = $(this).index('a[data-target="' + galleryId + '"]');

          createGallery(galleryId, currentLinkIndex);
          createPagination(galleryId, currentLinkIndex);

          $(galleryId).on('hidden.bs.modal', function() {
            destroyGallry(galleryId);
            destroyPagination(galleryId);
          });

          $(galleryId + ' .carousel').on('slid.bs.carousel', function() {
            var currentSlide = $(galleryId + ' .carousel .item.active');
            var currentSlideIndex = currentSlide.index(galleryId + ' .carousel .item');

            setTitle(galleryId, currentSlideIndex);
            setPagination(++currentSlideIndex, true);
          })
        });

        function createGallery(galleryId, currentSlideIndex) {
          var galleryBox = $(galleryId + ' .carousel-inner');

          $('a[data-target="' + galleryId + '"]').each(function() {
            var img = $(this).html();
            var galleryItem = $('<div class="item">' + img + '</div>');

            galleryItem.appendTo(galleryBox);
          });

          galleryBox.children('.item').eq(currentSlideIndex).addClass('active');
          setTitle(galleryId, currentSlideIndex);
        }

        function destroyGallry(galleryId) {
          $(galleryId + ' .carousel-inner').html("");
        }

        function createPagination(galleryId, currentSlideIndex) {
          var pagination = $(galleryId + ' .pagination');
          var carouselId = $(galleryId).find('.carousel').attr('id');
          var prevLink = $('<li><a href="#' + carouselId + '" data-slide="prev">«</a></li>');
          var nextLink = $('<li><a href="#' + carouselId + '" data-slide="next">»</a></li>');

          prevLink.appendTo(pagination);
          nextLink.appendTo(pagination);

          $('a[data-target="' + galleryId + '"]').each(function() {
            var linkIndex = $(this).index('a[data-target="' + galleryId + '"]');
            var paginationLink = $('<li><a data-target="#carouselGallery" data-slide-to="' + linkIndex + '">' + (linkIndex + 1) + '</a></li>');

            paginationLink.insertBefore('.pagination li:last-child');
          });

          setPagination(++currentSlideIndex);
        }

        function setPagination(currentSlideIndex, reset = false) {
          if (reset) {
            $('.pagination li').removeClass('active');
          }

          $('.pagination li').eq(currentSlideIndex).addClass('active');
        }

        function destroyPagination(galleryId) {
          $(galleryId + ' .pagination').html("");
        }

        function setTitle(galleryId, currentSlideIndex) {
          var imgAlt = $(galleryId + ' .item').eq(currentSlideIndex).find('img').attr('alt');

          $('.modal-title').text(imgAlt);
        }
      });

    </script>
=======
                    <!-- /.modal-footer -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <?php include("../include/footer.php"); ?>



        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
        <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
        <script type="text/javascript" src="../js/allscript.js"></script>
        <script>
   $(window).on('load', function () {
   $(".loading").fadeOut("slow");
 });
            $(document).ready(function() {
                $('.img-gallery').click(function() {
                    var galleryId = $(this).attr('data-target');
                    var currentLinkIndex = $(this).index('a[data-target="' + galleryId + '"]');

                    createGallery(galleryId, currentLinkIndex);
                    createPagination(galleryId, currentLinkIndex);

                    $(galleryId).on('hidden.bs.modal', function() {
                        destroyGallry(galleryId);
                        destroyPagination(galleryId);
                    });

                    $(galleryId + ' .carousel').on('slid.bs.carousel', function() {
                        var currentSlide = $(galleryId + ' .carousel .item.active');
                        var currentSlideIndex = currentSlide.index(galleryId + ' .carousel .item');

                        setTitle(galleryId, currentSlideIndex);
                        setPagination(++currentSlideIndex, true);
                    })
                });

                function createGallery(galleryId, currentSlideIndex) {
                    var galleryBox = $(galleryId + ' .carousel-inner');

                    $('a[data-target="' + galleryId + '"]').each(function() {
                        var img = $(this).html();
                        var galleryItem = $('<div class="item">' + img + '</div>');

                        galleryItem.appendTo(galleryBox);
                    });

                    galleryBox.children('.item').eq(currentSlideIndex).addClass('active');
                    setTitle(galleryId, currentSlideIndex);
                }

                function destroyGallry(galleryId) {
                    $(galleryId + ' .carousel-inner').html("");
                }

                function createPagination(galleryId, currentSlideIndex) {
                    var pagination = $(galleryId + ' .pagination');
                    var carouselId = $(galleryId).find('.carousel').attr('id');
                    var prevLink = $('<li><a href="#' + carouselId + '" data-slide="prev">«</a></li>');
                    var nextLink = $('<li><a href="#' + carouselId + '" data-slide="next">»</a></li>');

                    prevLink.appendTo(pagination);
                    nextLink.appendTo(pagination);

                    $('a[data-target="' + galleryId + '"]').each(function() {
                        var linkIndex = $(this).index('a[data-target="' + galleryId + '"]');
                        var paginationLink = $('<li><a data-target="#carouselGallery" data-slide-to="' + linkIndex + '">' + (linkIndex + 1) + '</a></li>');

                        paginationLink.insertBefore('.pagination li:last-child');
                    });

                    setPagination(++currentSlideIndex);
                }

                function setPagination(currentSlideIndex, reset = false) {
                    if (reset) {
                        $('.pagination li').removeClass('active');
                    }

                    $('.pagination li').eq(currentSlideIndex).addClass('active');
                }

                function destroyPagination(galleryId) {
                    $(galleryId + ' .pagination').html("");
                }

                function setTitle(galleryId, currentSlideIndex) {
                    var imgAlt = $(galleryId + ' .item').eq(currentSlideIndex).find('img').attr('alt');

                    $('.modal-title').text(imgAlt);
                }
            });

        </script>
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee


</body>

</html>
