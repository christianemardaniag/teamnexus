<!DOCTYPE html>
<html lang="en">

<head>
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
  <link type="text/css" href="../css/ihover.css" rel="stylesheet">

  <link rel="stylesheet" href="../ihover-gh-pages/src/hover.css" />
  <link rel="stylesheet" href="../ihover-gh-pages/src/hover.min.css" />


  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>


  <!--  <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <link type="text/css" href="../css/style.css" rel="stylesheet">




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
    <!--
    <div class="jumbotron">

      <h2 class="display-2 text-center">Select a Category</h2>
    </div>

    <?php
      include("../classes/DatabaseQuery.php");
      $dbQ = new DatabaseQuery(new DatabaseInfo);
     
        $query = "SELECT *, (select count(*) from blinds where blinds.blinds_category_id = blinds_category.blinds_category_id and blinds_category.status='available') as 'ctr' FROM `blinds_category` WHERE blinds_category.status='available'";
  
        $res = $dbQ->query($query);
        echo "<div class='container'><div class='row'>";
        while ($row = mysqli_fetch_array($res))
        {
          $img = $dbQ->getBlob($row["image"]);
                  
       //   <!-- Left to right -->
    echo "
    <form action='catalogueBlinds.php' method='POST'>"; echo "
      <div class='col-sm-6 col-lg-4 col-xl-4'>"; //
<<<<<<< HEAD
//        <!-- normal -->
=======
        <!-- normal -->
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee
        echo "
        <div class='ih-item circle effect3 left_to_right m-3'>
          <a href='catalogueBlinds.php?catID=".$row[' blinds_category_id ']."'>
            <div class='img'><img src='$img' alt='".$row[' blinds_type_name ']."'></div>
            <input type='hidden' value='".$row[' blinds_category_id ']."' name='catID' />
            <div class='info'>
              <h3>".$row['blinds_type_name']."(".$row['ctr'].")"."</h3>
              <p class='text-truncate'>".$row['description']."</p>
            </div>
          </a>
        </div>"; //
<<<<<<< HEAD
//        <!-- end normal -->
=======
        <!-- end normal -->
>>>>>>> dc5e28cec6896b9f09726c9535a6fa939f57b9ee

        echo "</div>"; echo "</form>"; } echo "</div>
    </div>"; ?> -->


    <div class="jumbotron text-center" style="border: 0">
      <h1 class="display-5">Catalogue</h1>
    </div>

    <div class="jumbotron" style="background: none">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>

    <?php include("../include/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <!--  <script type="text/javascript" src="../js/mdb.min.js"></script>-->
    <script type="text/javascript" src="../js/allscript.js"></script>
    <script>
      $(window).on('load', function() {
        $(".loading").fadeOut("slow");
      });

    </script>

</body>

</html>
