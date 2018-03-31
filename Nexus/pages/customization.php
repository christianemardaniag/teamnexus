<!DOCTYPE html>
<html lang="en">

<head>
  <!-- FUTURE ADD WATERMARK ON EVERY IMAGE UPLOAD BY ADMIN -->
  <!-- Required meta tags -->
  <title>Customization - Adam Arc Blinds and Decor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">


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


    <!--
  <div class="jumbotron text-center">
    <h1 class="display-5">Design your Own</h1>
    <blockquote class="blockquote">
      “The customer’s perception is your reality.”
      <span class="blockquote-footer">Kate Zabriskie</span>
    </blockquote>
  </div>
-->
    <div class="container">

      <div class="row">
        <div class="col-xl-6 col-lg-6 col-12">

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-blinds-tab" data-toggle="tab" href="#nav-blinds" role="tab" aria-controls="nav-blinds" aria-selected="true">Step 1</a>
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
                  <button class="col-sm-4 btn btn-link btn-sm"><i class="fas fa-image"></i> Change Backround</button>
                </div>
              </div>

              <div class="container mt-4 overflow-y">
                <div class="card-columns card-columns-2">
                  <div class="card" data-category="Roller Shades">
                    <div id="rollerShadesSlides" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100 cursor-pointer" src="../images/RollerBlinds/Benefits-of-Roller-Blinds-480x480.jpg" alt="Roller Shades" height="300px" style="object-fit: cover;" onclick="changeShades('roller')">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100 cursor-pointer" src="../images/RollerBlinds/resize_LL_Roller_Coral_White_main1_open_MAIL.jpg" alt="Roller Shades" height="300px" style="object-fit: cover;" onclick="changeShades('roller')">
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100 cursor-pointer" src="../images/RollerBlinds/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg" alt="Roller Shades" style="object-fit: cover;" height="300px" onclick="changeShades('roller')">
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Roller Shades</h5>
                      <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#blindImageType">See Details <i class="fas fa-angle-double-right"></i></button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="card">
                    <div id="combiShadesSlides" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="../images/CombiBlinds/combi%20khaki.jpg" alt="Roller Shades" style="object-fit: cover;" height="300px" onclick="changeShades('combi')">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../images/CombiBlinds/CombiBlinds.jpg" alt="Roller Shades" style="object-fit: cover;" height="300px" onclick="changeShades('combi')">
                        </div>

                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Combi Shades</h5>
                      <p class="card-text text-truncate">Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non.</p>
                      <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#blindImageType">See Details <i class="fas fa-angle-double-right"></i></button>
                    </div>
                  </div>
                  <div class="clearfix"></div>

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
                <div class="card-columns">
                  <div class="card">
                    <img data-magnify="lens" class="img-fluid cursor-pointer" src="../images/Fabrics/Dockside%20Brushed%20Bull%20Denim.jpg" data-zoom-image="../images/Fabrics/Dockside%20Brushed%20Bull%20Denim.jpg">
                    <div class="card-body">
                      <h6 class="card-title">Dockside Brushed Bull Denim</h6>
                      <button class="btn btn-warning btn-sm btn-block" onclick="changeFabric($(this).parent().parent().find('img').attr('src'), $(this).parent().children(':first').html())">Apply</button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="card">
                    <img data-magnify="lens" class="img-fluid" src="../images/fabrics/Irish%20Linen.jpg" data-zoom-image="../images/fabrics/Irish%20Linen.jpg">
                    <div class="card-body">
                      <h6 class="card-title">Irish Linen</h6>
                      <button class="btn btn-warning btn-sm btn-block" onclick="changeFabric($(this).parent().parent().find('img').attr('src'), $(this).parent().children(':first').html())">Apply</button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="card">
                    <img data-magnify="lens" class="img-fluid" src="../images/fabrics/Sunbrella%20Canvas.jpg" data-zoom-image="../images/fabrics/Sunbrella%20Canvas.jpg">
                    <div class="card-body">
                      <h6 class="card-title">Sunbrella Canvas</h6>
                      <button class="btn btn-warning btn-sm btn-block" onclick="changeFabric($(this).parent().parent().find('img').attr('src'), $(this).parent().children(':first').html())">Apply</button>
                    </div>
                  </div>
                  <!--
                <div class="clearfix"></div>
                <div class="card">
                  <img class="img-fluid" src="../images/Fabrics/Cotton.jpg" data-toggle="modal" data-target="#view-image">
                  <div class="card-body">
                    <h6 class="card-title">Cotton</h6>
                    <button class="btn btn-warning btn-sm btn-block" onclick="changeFabric($(this).parent().parent().find('img').attr('src'))">Use</button>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="card">
                  <img class="img-fluid" src="../images/Fabrics/Dockside%20Brushed%20Bull%20Denim.jpg" data-toggle="modal" data-target="#view-image">
                  <div class="card-body">
                    <h6 class="card-title">Dockside Brushed Bull Denim</h6>
                    <button class="btn btn-warning btn-sm btn-block">Use</button>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="card">
                  <img class="img-fluid" src="../images/Fabrics/Eroica%20Expo%20Linen%20Snow.jpg" data-toggle="modal" data-target="#view-image">
                  <div class="card-body">
                    <h6 class="card-title">Eroica Expo Linen Snow</h6>
                    <button class="btn btn-warning btn-sm btn-block">Use</button>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="card">
                  <img class="img-fluid" src="../images/Fabrics/European%20Linen.jpg" data-toggle="modal" data-target="#view-image">
                  <div class="card-body">
                    <h6 class="card-title">European Linen</h6>
                    <button class="btn btn-warning btn-sm btn-block">Use</button>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="card">
                  <img class="img-fluid" src="../images/Fabrics/Irish%20Linen%20Burlap.jpg" data-toggle="modal" data-target="#view-image">
                  <div class="card-body">
                    <h6 class="card-title">Irish Linen Burlap</h6>
                    <button class="btn btn-warning btn-sm btn-block">Use</button>
                  </div>
                </div>
                <div class="clearfix"></div>
-->
                </div>

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
                  <button class="btn btn-info btn-sm m-1" id="btnLine" type="button" data-toggle="tooltip" title="Insert Line"><i class="fas fa-minus"></i> Line</button>
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

              </div>
            </div>
          </div>
        </div>

        <!--     NOTE STEP 4       -->

        <div class="tab-pane fade" id="nav-myContent" role="tabpanel" aria-labelledby="nav-myContent-tab">

          <div class="container mt-4">
            <div class="form-group row">
              <label for="template-name" class="col-sm-4 col-form-label">Template Name</label>
              <input type="text" class="col-sm-8 form-control" placeholder="My Favorite Design, e.g.">
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Dimension</label>
              <div class="col-sm-8">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Width</label>

                  <input id="cloth-width" type="number" class="form-control col-sm-3" min='1' value="132">
                  <select id="width-unit" class="col-sm-5 form-control">
                <option value="centimeter">Centimeter</option>
                <option value="inches">Inches</option>
                <option value="feet">Feet</option>
                <option value="meter">Meter</option>
                <option value="yard">Yard</option>
              </select>

                </div>


              </div>
              <div class="offset-sm-4 col-sm-8">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Height</label>

                  <input id="cloth-height" type="number" class="form-control col-sm-3" min='1' value="132">
                  <select id="height-unit" class="col-sm-5 form-control">
                <option value="centimeter">Centimeter</option>
                <option value="inches">Inches</option>
                <option value="feet">Feet</option>
                <option value="meter">Meter</option>
                <option value="yard">Yard</option>
              </select>

                </div>


              </div>
            </div>

            <hr/>
            <!--          NOTE SUMMARY-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="h4">Summary</div>
                  <div class="form-group row">
                    <label class="col-5 col-form-label">Blinds</label>
                    <input id="summary-blinds" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="Roller Blinds" />
                    <label class="col-5 col-form-label">Fabric</label>
                    <input id="summary-fabric" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="Belgian Linen" />
                    <label class="col-5 col-form-label">Width</label>
                    <input id="summary-width" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                    <label class="col-5 col-form-label">Height</label>
                    <input id="summary-height" type="text" readonly class="col-7 form-control-plaintext text-truncate" value="" />
                    <button class="btn btn-warning btn-block" type="button" onclick="saveTemplate()"><i class="fas fa-save"></i>&nbsp;Save</button>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="lead text-center">Preview </div>
                  <img id="preview-image" class="img-fluid rounded" src="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="col-xl-6 col-lg-6 col-12 d-print-none">
      <div class="btn-group" role="group">
        <button id="btnZoomIn" type="button" class="btn btn-light" data-toggle="tooltip" title="Zoom In (Alt + Scroll Up)" data-placement="top"><i class="fas fa-search-plus text-danger"></i></button>
        <button id="btnZoomOut" type="button" class="btn btn-light" data-toggle="tooltip" title="Zoom Out (Alt + Scroll down)" data-placement="top"><i class="fas fa-search-minus text-danger"></i></button>

        <div class="btn-group-toggle" data-toggle="buttons">
          <label id="btnPan" class="btn btn-light" data-toggle="tooltip" title="Pan (Alt + Drag)" data-placement="top">
    <input type="checkbox" autocomplete="off"><i class="fas fa-hand-paper text-danger"></i>
  </label>
        </div>
        <button id="btn-reset" type="button" class="btn btn-light text-danger" data-toggle="popover" data-html="true" data-placement="bottom" title="Reset Design" data-content="Are you sure you want to reset your design?<div class='container'><div class='row'><button class='col btn btn-sm btn-info' onclick=cancelReset()>Cancel</button><button class='col btn btn-sm btn-link text-secondary text-muted' onclick=removeCloth()>Reset</button></div></div>"><i class="fas fa-sync"></i> Reset</button>
        <button type="button" class="btn btn-light" data-toggle="popover" title="Help" data-html="true" data-content="<ul><li></li></ul>"><i class="fas fa-plaay text-danger"></i>Help</button>
        <button id="btnPreview" type="button" class="btn btn-light" data-toggle="tooltip" title="Preview" onclick="preview()"><i class="fas fa-eye text-danger"></i></button>
      </div>
      <!--       NOTE CANVAS    -->

      <div id="canvasSizer">
        <canvas id="mainCanvas" class="mainCanvas" width="600" height="525" style="border: 1px solid #6c757d; border-radius: 4px;"></canvas>
        <div class="btn-group position-absolute invisible" id="btnSetting">
          <button id="btnDelete" class="btn btn-danger btn-block" type="button" data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"500", "hide":"300"}' title="Delete"><i class="far fa-trash-alt"></i></button>
        </div>
        <button class="btn btn-outline-success btn-sm" onclick="saveTemplate()">Save as Template</button>
        <button class="btn btn-outline-primary btn-sm" onclick="loadTemplate()">Load Template</button>
      </div>

    </div>
    <img src="" id="preview">
    </div>
    <!--END OF ROW-->
    <div class="alert bg-danger invisible w-25 alert-dismissible fixed-bottom mx-auto">
      <button id="undo" class="btn p-0 alert-link btn-link text-light">Undo last deleted?</button>
      <button id="undoClose" type="button" class="close text-light">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>

    </div>
    <!--END OF CONTAINER-->

    <!-- NOTE MODALS -->
    <!--Modal to view larger image in blinds type-->

    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Warning</h5>
            <span id="modal-blinds-type" class="d-none"></span>
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
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/Galaxy images/moon-4k-ap.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/Movies images/life-of-pi-boat-tiger-wallpaper.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/hibiscus-pink-yellow-hi.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/Video Game images/2623334-assassins-creed-movie-4k-image-of-best-wallpaper.jpg" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://free4kwallpapers.com/" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                      <img class="img-fluid card-img-top img-hover cursor-pointer" src="../images/templateImages/PNG/cute-unicorn-card-and-poster-template_7096-454.png" onclick="insertImageToCanvas(this.src)" data-dismiss="modal">
                      <a href="https://www.freepik.com/premium-vector/cute-unicorn-card-and-poster-template_1773786.htm#term=background poster&page=2&position=26" class="text-secondary text small ml-2" target="_blank">View Image Source</a>
                    </div>
                    <div class="clearfix"></div>

                  </div>
                </div>
                <div id="zoom-container" class="col-sm-4">
                  <input id="insert-image" type="file" class="dropify" data-allowed-file-extensions="png jpg" data-height="400" data-width="400" data-show-remove="false" data-max-file-size="1M" accept=".jpg, .png, .jpeg image/*" />
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
                  <a href="#" title="Close" data-dismiss="modal" aria-label="Close" aria-hidden="true" class="close fas fa-dot-circle fa-xs text-danger small tooltip-test"></a>
                  <i></i>
                  <h3>Roller Blinds</h3>
                  <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor.</p>
                  <button class="btn btn-warning btn-block btn-sm">Customize</button>

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

    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../dropify-master/dist/js/dropify.js"></script>
    <script type="text/javascript" src="../js/customization.js"></script>
    <script type="text/javascript" src="../js/spectrum.js"></script>
    <script type="text/javascript" src="../js/jquery.elevatezoom.js"></script>
<!--    <script type="text/javascript" src="../js/allscript.js"></script>-->


    <!--  <?php include("../include/footer.php"); ?>-->
</body>

</html>
