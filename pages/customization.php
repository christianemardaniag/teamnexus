<!DOCTYPE html>
<html lang="en">

<head>
  <!-- FUTURE ADD WATERMARK ON EVERY IMAGE UPLOAD BY ADMIN -->
  <!-- Required meta tags -->
  <title>Customization - Adam Arc Blinds and Decor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="icon" type="image/png" href="../images/templateImages/title-logo.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">

  <link type="text/css" href="../css/style.css" rel="stylesheet">
  <link type="text/css" href="../css/spectrum.css" rel="stylesheet">
  <link type="text/css" href="../dropify-master/dist/css/dropify.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Alegreya+Sans+SC|Alex+Brush|Allura|Amatic+SC|Anton|Architects+Daughter|Archivo+Black|Bad+Script|Bangers|Barlow+Semi+Condensed|BenchNine|Berkshire+Swash|Bevan|Boogaloo|Bree+Serif|Cabin+Sketch|Cairo|Calligraffitti|Caveat|Caveat+Brush|Cinzel+Decorative|Coiny|Comfortaa|Cookie|Cormorant+Garamond|Courgette|Covered+By+Your+Grace|Damion|Dancing+Script|Didact+Gothic|Economica|Forum|Francois+One|Fredoka+One|Gloria+Hallelujah|Gochi+Hand|Great+Vibes|Handlee|Hind+Madurai|Homemade+Apple|Inconsolata|Indie+Flower|Julius+Sans+One|Kalam|Karla|Kaushan+Script|Kristi|Lobster|Marck+Script|Merienda|Monda|Monoton|Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script|Neuton|Niconne|Nothing+You+Could+Do|Oleo+Script|Open+Sans|Oswald|Pacifico|Passion+One|Patrick+Hand|Patua+One|Permanent+Marker|Plaster|Play|Playball|Poiret+One|Pompiere|Pontano+Sans|Prata|Raleway|Reenie+Beanie|Righteous|Roboto|Rochester|Rock+Salt|Sacramento|Satisfy|Shadows+Into+Light|Shadows+Into+Light+Two|Shrikhand|Signika|Six+Caps|Sorts+Mill+Goudy|Source+Code+Pro|Source+Serif+Pro|Tangerine|Teko|Ubuntu+Condensed|VT323|Yellowtail');

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



    <div class="jumbotron text-center">
      <h1 class="display-5">Design your Own</h1>
      <blockquote class="blockquote">
        “Real Luxury is Customization”
        <span class="blockquote-footer">Lapo Elkann</span>
      </blockquote>
      <button class="btn btn-warning" data-toggle="modal" data-target="#customization-tutorial" onclick="document.getElementById('video').play(); ">Watch Tutorial</button>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-xl-6 col-lg-6 col-12">

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="btn-link nav-item nav-link active" id="nav-blinds-tab" data-toggle="tab" href="#nav-blinds" role="tab" aria-controls="nav-blinds" aria-selected="true" onclick="step1()">Step 1</button>
              <button class="btn-link nav-item nav-link" id="nav-fabric-tab" data-toggle="tab" href="#nav-fabric" role="tab" aria-controls="nav-fabric" aria-selected="false" onclick="step2()">Step 2</button>
              <button class="btn-link nav-item nav-link" id="nav-properties-tab" data-toggle="tab" href="#nav-properties" role="tab" aria-controls="nav-properties" aria-selected="false" onclick="step3()">Step 3</button>
              <button class="btn-link nav-item nav-link" id="nav-myContent-tab" data-toggle="tab" href="#nav-myContent" role="tab" onclick="step4()">Step 4</button>
            </div>
          </nav>

          <!--        NOTE STEP 1-->
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-blinds" role="tabpanel" aria-labelledby="nav-blinds-tab">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-8 pt-2">
                    <div class="lead">Select Window Blinds</div>
                  </div>
                  <button class="col-sm-4 btn btn-link btn-sm" data-toggle="modal" data-target="#changeBackgroundModal"><i class="fas fa-image"></i> Change Backround</button>
                </div>
              </div>

              <div class="container mt-4 overflow-y-lg">
                <div class="card-columns card-columns-2">
                  <?php
                  include("../classes/DatabaseQuery.php");
                  $dbQ = new DatabaseQuery(new DatabaseInfo);
                  $getBlindsCat = "SELECT blinds_category_id, blinds_type_name, description, image, minwidth, minheight FROM `blinds_category` where status = 'available' and canCustomize = 'yes'";
                  $allBlindsCat = $dbQ->query($getBlindsCat);
                  while ($blindsRow = mysqli_fetch_array($allBlindsCat)){
                    $flag = true;
                    $id = $blindsRow["blinds_category_id"];
                    $blindsType = $blindsRow["blinds_type_name"];
                    $description = $blindsRow["description"];
                    $image = $dbQ->getBlob($blindsRow["image"]);
                    $minWidth = $blindsRow["minwidth"];
                    $minHeight = $blindsRow["minheight"];
                    echo "<div class='card border'><div class='carousel slide' data-ride='carousel'><div class='carousel-inner'>";    
                    $getFabric = "SELECT fabric.fabric_name as 'fabName', fabric.fabric_image as 'fabImg', blinds.fabric_codeNo as 'fabCode', blinds.image as 'blindsImg' from fabric, blinds where blinds.blinds_category_id = $id and fabric.fabric_id = blinds.fabric_codeNo and blinds.status = 'available' limit 5";
                    $allFabric = $dbQ->query($getFabric);
                    while ($fabricRow = mysqli_fetch_array($allFabric)){
                      $fabricImage = $dbQ->getBlob($fabricRow["fabImg"]);
                      $fabricName = $fabricRow["fabName"];
                      $fabricCode = $fabricRow["fabCode"];
                      $blindsImg = $dbQ->getBlob($fabricRow["blindsImg"]);
                      if($flag){
                        echo "<div class='carousel-item active'>
                              <img class='d-block w-100 cursor-pointer' src='$image' alt='$blindsType' style='object-fit: cover;' height='300px' onclick='changeShades(\"$blindsType\", $id, \"$fabricName\", \"$fabricImage\", \"$fabricCode\")'>
                            </div>";
                          $flag = false;
                      } else {
                        echo "<div class='carousel-item'>
                              <img class='d-block w-100 cursor-pointer' src='$blindsImg' alt='$blindsType' style='object-fit: cover;' height='300px' onclick='changeShades(\"$blindsType\", $id, \"$fabricName\", \"$fabricImage\", \"$fabricCode\")'>
                              </div>";
                      }
                    }
                    
                     echo "</div></div> <div class='card-body'>
                      <h5 class='card-title'>$blindsType</h5>
                      <p class='card-text text-truncate'>$description</p>
                      <button type='button' class='btn btn-warning btn-sm btn-block' data-toggle='modal' data-target='#blindImageType'>See Details <i class='fas fa-angle-double-right'></i></button></div></div>
                      <div class='clearfix'></div>";
                  
                  }
                ?>
                </div>
              </div>
            </div>

            <!--            FABRIC TYPE     -->
            <div class="tab-pane fade " id="nav-fabric" role="tabpanel" aria-labelledby="nav-fabric-tab">
              <div class="container-fluid">
                <div class="row">
                  <p class="lead pt-2 col-sm-8">Change Fabric Type</p>
                  <div class="col-2">Color</div>
                  <div class="col-2" id="colorForFabric"></div>
                </div>
              </div>
              <div class="container mt-4 overflow-y">
                <div id="step-2-fabric" class="card-columns">
                  <?php
                    $query = "SELECT * FROM `fabric`";
                    $res = $dbQ->query($query);
                  
                    while($row = mysqli_fetch_array($res)){
                      $img = $dbQ->getBlob($row["fabric_image"]);
                     echo "<div class='card border'>
                    <img data-magnify='lens' class='img-fluid cursor-pointer' src='$img'>
                    <div class='card-body'>
                      <h6 class='card-title'>".$row["fabric_name"]."</h6>
                      <button class='btn btn-warning btn-sm btn-block' onclick='changeFabric(\"".$img."\",\"".$row["fabric_name"]."\",\"".$row["fabric_id"]."\")'>Apply</button>
                    </div>
                  </div>
                  <div class='clearfix'></div>";
                    }
                  ?>
                </div>
                <i class="text-secondary small">Hover fabric to magnify. Scroll to zoom in/out</i>
              </div>
            </div>

            <!--          NOTE STEP 3-->
            <div class="tab-pane fade show" id="nav-properties" role="tabpanel" aria-labelledby="nav-properties-tab">
              <div class="card">
                <div class="card-header">Add Objects</div>
                <div class="card-body d-flex flex-wrap">
                  <button id="btnImages" type="button" class="btn btn-info btn-sm m-1" data-toggle="modal" data-target="#insert-images"><i class="fas fa-image"></i> Image</button>
                  <button id="btnText" type="button" class="btn btn-info btn-sm m-1" data-toggle="tooltip" title="Insert Text"><i class="fas fa-font"></i> Text</button>
                  <button id="btnCircle" type="button" class="btn btn-info btn-sm m-1" data-toggle="tooltip" title="Insert Circle"><i class="fas fa-circle"></i> Circle</button>
                  <button class="btn btn-info btn-sm m-1" id="btnSquare" type="button" data-toggle="tooltip" title="Insert Square"><i class="fas fa-square"></i>  Square</button>
                  <button class="btn btn-info btn-sm m-1" id="btnLine" type="button" data-toggle="tooltip" title="Draw Line"><i class="fas fa-minus"></i> Line</button>
                  <button id="btnTriangle" class="btn btn-info btn-sm m-1" type="button" data-toggle="tooltip" title="Insert Triangle"><i class="fas fa-play" data-fa-transform="rotate-270"></i> Triangle</button>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                </div>
              </div>
              <div class="container mt-2">

                <!--              OBJECT PROPERTIES     -->
                <div id="object-properties" class="collapse">
                  <hr>
                  <div id="properties-color" class="form-inline row">
                    <span class=" col-3 ml-3">Color</span>
                    <span class="col-1">
                  <div id="colorForObject">
                  <div>
                    
                <span id="inputFillColor" class="fa-2x cursor-pointer" data-toggle="popover" data-trigger="click" title="Colors" data-placement="auto" data-html="true" data-content=""><i id="colorFill" class="fas fa-dot-circle" style="border: 0.5px solid #d3d3d3; border-radius: 50%;"></i></span>
                  </div>
                </div>

                </span>
                <span class="col-4">
                    
                  <small id="color-name" class="text-muted ml-2"></small>
                  </span>
              </div>
              <div id="properties-opacity" class="form-inline row">
                <span class=" col-3 ml-3">Opacity</span>
                <div class="col-4">
                  <input type="range" min="1" max="100" value="80" step="1" id="range-opacity" class="slider">
                </div>
                <div class="col-3">
                  <input type="number" value="80" min="1" max="100" step="1" id="number-opacity" class="form-control form-control-sm">
                </div>
              </div>
              <span id="inputFillColor"></span>

              <div id="properties-layer" class="form-inline row">
                <span class="col-3 ml-3 ">Arrangement</span>
                <div class="col-5">
                  <div class="btn-group" role="group">
                    <button id="btn-bringfront" data-toggle="tooltip" title="Bring Forward" class="btn btn-dark btn-sm"><img src="../images/bringforward.png" class="img-fluid"></button>
                    <button id="btn-bringtofront" data-toggle="tooltip" title="Bring to Front" class="btn btn-dark btn-sm"><img src="../images/sendtofront.png" class="img-fluid"></button>
                    <button id="btn-sendbackward" data-toggle="tooltip" title="Send Backward" class="btn btn-dark btn-sm"><img src="../images/sendbackward.png" class="img-fluid"></button>
                    <button id="btn-sendback" class="btn btn-dark btn-sm" data-toggle="tooltip" title="Send to Back"><img src="../images/sendtoback.png" class="img-fluid"></button></div>
                </div>
              </div>

              <div id="properties-font" class="form-inline row collapse">
                <span class="col-3 ml-3 ">Font</span>
                <span class="col-6">
                    <select id="font-family" class="custom-select"></select>
                  </span>
              </div>
              <div id="properties-font-size" class="form-inline row collapse">
                <span class="col-3 ml-3 ">Font Size</span>
                <span class="col-8">
                    <input id="font-size" type="number" class="form-control form-control-sm" min="1" max="500" value="40">
                  </span>
              </div>
            </div>

            <hr>
            <div class="card border border-info">
              <div class="card-header bg-info text-light"><i class="far fa-lightbulb fa-lg"></i> Tips</div>
              <div class="card-body">
                <ul>
                  <li>Zoom in <kbd>Alt + Scroll up</kbd></li>
                  <li>Zoom out <kbd>Alt + Scroll down</kbd></li>
                  <li>Move <kbd>Alt + Drag</kbd></li>
                  <li>Move <kbd>Alt + Drag</kbd></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!--     NOTE STEP 4       -->

        <div class="tab-pane fade" id="nav-myContent" role="tabpanel" aria-labelledby="nav-myContent-tab">

          <div class="container mt-4">
            <!--
            <div class="form-group row">
              <label for="template-name" class="col-sm-4 col-form-label">Template Name</label>
              <input id="template-name" type="text" class="col-sm-8 form-control" placeholder="My Favorite Design, e.g.">
            </div>
            <hr>
-->
            <div class="form-group row">

              <label class="col-sm-4 col-form-label">Dimension</label>
              <div class="col-sm-8">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Width</label>

                  <input id="cloth-width" type="number" class="form-control col-sm-3" min='<?php echo $minWidth; ?>' value="<?php echo $minWidth; ?>">
                  <select id="width-unit" class="col-sm-5 form-control">
                <option value="cm">cm</option>
                <option value="inch">inch</option>
                <option value="ft">ft</option>
                <option value="m">m</option>
                <option value="yd">yd</option>
              </select>
                </div>
              </div>
              <div class="offset-sm-4 col-sm-8">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Height</label>

                  <input id="cloth-height" type="number" class="form-control col-sm-3" min='<?php echo $minHeight; ?>' value="<?php echo $minHeight; ?>">
                  <select id="height-unit" class="col-sm-5 form-control">
                <option value="cm">cm</option>
                <option value="inch">inch</option>
                <option value="ft">ft</option>
                <option value="m">m</option>
                <option value="yd">yd</option>
              </select>

                </div>


              </div>
              <label class="col-sm-4 col-form-label">Quantity</label>
              <div class="col-sm-8">
                <input id="summary-quantity" type="number" class="form-control" min="1" value="1">
              </div>
              <button class="mx-auto mt-3 px-5 btn btn-sm btn-warning" data-target="#modalSummaryOrder" data-toggle="modal">Order</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-12 d-print-none">
      <div class="btn-group" role="group">
        <button id="btnZoomIn" type="button" class="btn btn-light" data-toggle="tooltip" data-html="true" title="Zoom In <br><kbd>Alt + Scroll Up</kbd>" data-placement="top"><i class="fas fa-search-plus"></i> <small class="d-none d-lg-inline">Zoom In</small></button>
        <button id="btnZoomOut" type="button" class="btn btn-light" data-toggle="tooltip" data-html="true" title="Zoom Out <br><kbd>Alt + Scroll down</kbd>" data-placement="top"><i class="fas fa-search-minus"></i> <small class="d-none d-lg-inline">Zoom Out</small></button>

        <div class="btn-group-toggle" data-toggle="buttons">
          <label id="btnPan" class="btn btn-light" data-toggle="tooltip" data-html="true" title="Move <br><kbd>Alt + Drag</kbd>" data-placement="top">
    <input type="checkbox" autocomplete="off"><i class="fas fa-hand-paper"></i> <small class="d-none d-lg-inline">Move</small>
  </label>
        </div>
        <button id="btnPreview" type="button" class="btn btn-light d-none" data-toggle="tooltip" data-html="true" title="Preview" onclick="preview()"><i class="fas fa-eye"></i> <small class="d-none d-lg-inline">Preview</small></button>
        <button id="btn-reset" type="button" class="btn btn-light" data-toggle="popover" data-html="true" data-placement="bottom" title="Reset Design" data-content="Are you sure you want to reset your design?<div class='container'><div class='row'><button class='col btn btn-sm btn-info' onclick=cancelReset()>Cancel</button><button class='col btn btn-sm btn-link text-secondary text-muted' onclick=removeCloth()>Reset</button></div></div>"><i class="fas fa-sync"></i> <small class="d-none d-lg-inline">Reset</small></button>
        <button type="button" class="btn btn-light" data-toggle="popover" data-html="true" title="Help" data-html="true" data-content="<ul><li></li></ul>"><i class="fas fa-help"></i> <small class="d-none d-lg-inline">Help</small></button>

      </div>
      <!--       NOTE CANVAS    -->

      <div id="canvasSizer">
        <canvas id="mainCanvas" class="mainCanvas" width="600" height="525" style="border: 1px solid #6c757d; border-radius: 4px;"></canvas>
        <div class="btn-group position-absolute invisible" id="btnSetting">
          <button id="btnDelete" class="btn btn-link btn-sm text-danger" type="button" data-toggle="tooltip" data-placement="top" data-html="true" data-delay='{"show":"500", "hide":"300"}' title="Remove (<kbd>Delete</kbd>)"><i class="far fa-trash-alt"></i></button>
        </div>
      </div>

    </div>
    </div>
    <!--END OF ROW-->
    </div>
    <!--END OF CONTAINER-->

    <!-- NOTE MODALS -->
    <div class="modal fade" id="customization-tutorial" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
             <div class="embed-responsive embed-responsive-16by9">
              <video id="video" class="embed-responsive-item" controls controlsList="nodownload">
			<source src="../Customization%20Tutorial_Small.mp4" type='video/mp4'>
		</video>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="modalSummaryOrder" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Summary of Order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-5">
                  <div class="form-group row">
                    <label class="col-4 col-form-label">Blinds</label>
                    <input id="summary-modal-blinds" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                    <label class="col-4 col-form-label">Fabric</label>
                    <input id="summary-modal-fabric" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                    <label class="col-4 col-form-label">Size</label>
                    <input id="summary-modal-size" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                    <label class="col-4 col-form-label">Quantity</label>
                    <input id="summary-modal-quantity" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                  </div>
                </div>
                <div class="col-sm-7">
                  <img id="summary-modal-image" class="img-fluid" src="" alt="Preview Image">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-link text-secondary" data-dismiss="modal">Cancel</button>
            <button id="shareToFacebook" class="btn btn-primary">Share</button>
            <button class="btn btn-success" onclick="order()">Continue</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="changeBackgroundModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Change Background</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">

            <div class="container-fluid">
              <h6>Overlay</h6>
              <div class="card-columns">
                <div class="card border border-primary p-1">
                  <img src="../images/window.png" class="card-img img-hover cursor-pointer" onclick="changeOverlay(this.src)">
                </div>
                <div class="clearfix"></div>
                <div class="card border">
                  <img src="../images/templateImages/overlay.png" class="card-img img-hover cursor-pointer" onclick="changeOverlay(this.src)">
                </div>
                <div class="clearfix"></div>
                <div class="card border">
                  <img src="../images/templateImages/edited.png" class="card-img img-hover cursor-pointer" onclick="changeOverlay(this.src)">
                </div>
                <div class="clearfix"></div>
              </div>
              <h6>Background</h6>

              <div class="card-columns">
                <div class="card border border-primary p-1">
                  <img src="../images/morning.jpg" class="card-img img-hover cursor-pointer" onclick="changeBackground(this.src)">
                </div>
                <div class="clearfix"></div>
                <div class="card border">
                  <img src="../images/afternoon.jpg" class="card-img img-hover cursor-pointer" onclick="changeBackground(this.src)">
                </div>
                <div class="clearfix"></div>
                <div class="card border">
                  <img src="../images/night.png" class="card-img img-hover cursor-pointer" onclick="changeBackground(this.src)">
                </div>
                <div class="clearfix"></div>
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-link text-muted" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" onclick="saveChanges()" data-dismiss="modal">Apply</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Warning</h5>
            <span id="modal-blinds-type" class="d-none"></span>
            <span id="modal-blinds-code" class="d-none"></span>
          </div>
          <div class="modal-body">
            <p>If you change window blinds type all object that you created will be remove. Do you want to continue?</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-link text-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-sm btn-warning" onclick="modalChangeShades()" data-dismiss="modal">Continue</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="insert-images" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title h5">Insert Image</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-8 overflow-y">
                  <div class="card-columns card-columns-2">
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/TemplateImages/Others/bBv3tZ.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>

                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/Animals images/white-tiger-bengal-tiger-wallpaper.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/happy-everyday.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://www.freepik.com/free-vector/cute-background-of-smiling-cloud_1041386.htm" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/Movies images/life-of-pi-boat-tiger-wallpaper.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/world_map.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="http://chaimusic.us/-the-map-png.html" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/cute-unicorn-card-and-poster-template_7096-454.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://www.freepik.com/premium-vector/cute-unicorn-card-and-poster-template_1773786.htm#term=background poster&page=2&position=26" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/O9FG4R0.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="http://gabrielecripezzi.com/academy/wp-content/uploads/2016/11/1wYVzIK1436862978036.jpg" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/tree.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://i.pinimg.com/originals/b2/50/d8/b250d89ce23afc5f12c023e8e956a21b.png" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/game_of_thrones_png_logo_by_sohrabzia-d7y9g1j.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://orig00.deviantart.net/1bf2/f/2014/250/0/4/game_of_thrones_png_logo_by_sohrabzia-d7y9g1j.png" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>

                  </div>
                </div>
                <div id="zoom-container" class="col-sm-4">
                  <input id="insert-image" type="file" class="dropify" data-allowed-file-extensions="png jpg" data-height="400" data-width="400" data-show-remove="false" accept=".jpg, .png, .jpeg image/*" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="blindImageType" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                  <div id="slidesModal" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                    </div>
                  </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
                  </button>
                  <i></i>
                  <h3 id="modal-blinds-type"></h3>
                  <p id="modal-blinds-description"></p>

                  <!--                  <button class="btn btn-warning btn-block btn-sm">Customize</button>-->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--  USE TEMPLATE  -->
    <div class="modal fade" id="view-image" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-0 bg-dark">
          <div class="modal-body mx-auto bg-dark">
            <img class="img-fluid mx-auto" src="" width="200">
          </div>
        </div>
      </div>
    </div>

    <!--  SCRIPT   -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.22/fabric.min.js"></script>
    <!--  <script type="text/javascript" src="../js/fabric.js"></script>-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" src="../js/fontawesome-all.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../dropify-master/dist/js/dropify.js"></script>
    <script type="text/javascript" src="../js/customization.js"></script>
    <script type="text/javascript" src="../js/spectrum.js"></script>
    <script type="text/javascript" src="../js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/1.2.1/lodash.min.js"></script>
    <!--        <script type="text/javascript" src="../js/allscript.js"></script>-->


    <?php include("../include/footer.php"); ?>
</body>

</html>
