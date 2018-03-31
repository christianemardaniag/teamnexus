
<!DOCTYPE html>
<html>

<head>
<!--
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Indie+Flower|Kavivanar|Lobster|Nanum+Brush+Script|Open+Sans');

  </style>
-->
</head>


<body>
<!--
  <div class="container">
        <h1 class="display-1 mx-auto">Customization Page</h1>
    <select id="fabric-type" class="custom-select col-lg-3 mx-auto">
      <option value="../images/fabric-2.jpg">Pattern 1</option>
      <option value="../images/fabric-3.jpg">Pattern 2</option>
      <option value="../images/fabric-5.jpg">Pattern 3</option>
      <option value="http://lorempixel.com/500/525/abstract">Pattern 4</option>
      <option value="http://lorempixel.com/500/525/abstract">Pattern 5</option>
      <option value="http://lorempixel.com/500/525/abstract">Pattern 6</option>
    </select>
    <select id="background-image" class="custom-select col-lg-3">
      <option value="../images/background.jpg">Background 1</option>
      <option value="../images/background2.jpg">Background 2</option>
    </select>
    <select id="font-family" class="custom-select col-lg-3"></select>
    <div>
      <label for="font-color">Font Color</label>
      <input type="color" id="font-color">
    </div>
    <input type="file" id="chooseImage" class="custom-file-input">
    <p style="font-family:Pacifico;">use delete button to delete object</p>
    <button type="button" class="btn btn-danger" id="json" data-toggle='tooltip' data-placement='top' data-html='true' title="Save canvas to JSON format">To JSON</button>
    <button type="button" class="btn btn-primary" id="bringForward">Bring Forward</button>
    <button type="button" class="btn btn-primary" id="bringFront">Bring to Front</button>
    <button type="button" class="btn btn-primary" id="sendBackward">Send Backward</button>
    <button type="button" class="btn btn-primary" id="sendBack">Send to Back</button>
    <button type="button" class="btn btn-info" id="addText">Add Text</button>


    <div class="row" id="canvasSizer">
      <div class="col-lg-7">
        <canvas id="mainCanvas" class="mainCanvas" width="525" height="525" style="border: 1px solid #333;"></canvas>
      </div>
    </div>
    <button id="undo" type="button" class="btn btn-info invisible float-left" href="#" role="button">Undo?</button>

  </div>
-->

  <!--  SCRIPT  -->

<!--
  <script id="main">
    (function() {
      // Canvas Properties
      var canvas = this.__canvas = new fabric.Canvas('mainCanvas', {
        //        backgroundColor: 'rgb(225,225,225)',
        width: 525,
        height: 525,
        containerClassName: 'mainCanvas',
        preserveObjectStacking: true
      });
      fabric.Object.prototype.transparentCorners = false;

      // Sa pag lload ng mga pattern, dun sa naka spinner
      function loadPattern(url) {
        fabric.util.loadImage(url, function(img) {
          shape.set('fill', new fabric.Pattern({
            source: img,
            repeat: 'repeat'
          }));

          canvas.renderAll();
        });
      }

      // load background
      function loadBackground(url) {
        fabric.util.loadImage(url, function(img) {
          backgroundImage.set('fill', new fabric.Pattern({
            source: img
          }));
        });
      }

      // Pag create ng shape na Rectangle
      var shape = new fabric.Rect({
        width: 500,
        height: 475,
        left: 12,
        top: 20,
        lockMovementX: true,
        lockMovementY: true,
        hasControls: false,
        selectable: false,
        selection: true,
      });


      var backgroundImage = new fabric.Rect({
        width: 500,
        height: 475,
        left: 12,
        top: 20,
        lockMovementX: true,
        lockMovementY: true,
        hasControls: false,
        selectable: false,
        selection: true,
      });

      // Mga function na naka jquery
      $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        window.addEventListener('resize', resizeCanvas, false);
        window.addEventListener('load', resizeCanvas, false);
        resizeCanvas();

        // pag nabago ung laman ng spnner
        var type = $("#fabric-type");
        loadPattern(type.val());
        type.change(function() {
          loadPattern(type.val());
        });

        var bg = $("#background-image");
        loadBackground(bg.val());

        // sa pag cchoose naman to ng image and pag reresize pag malaki ung image
        $("#chooseImage").on('change', function(event) {
          var path = URL.createObjectURL(event.target.files[0]);
          fabric.Image.fromURL(path, function(img) {
            var scale = 1;
            var temp = img.width;
            while (temp > shape.width) {
              temp = img.width;
              scale -= 0.1;
              temp *= scale;
            }
            img.set({
              scaleX: scale,
              scaleY: scale
            });
//            img.globalCompositeOperation = "source-out";
            canvas.add(img);
          });
        });
//        shape.globalCompositeOperation = 'destination-atop';
//        backgroundImage.globalCompositeOperation = 'source-in';
        canvas.add(backgroundImage);
        canvas.add(shape);
        // delete object using delete key
        // undo option for deleted object
        $(document).keydown(function(event) {
          if (event.which == 46) { //46 = ascii delete key
            var selectedObject = canvas.getActiveObject();
            if (selectedObject) {
              canvas.getActiveObject().clone(function(cloned) {
                _clipboard = cloned;
              });
              canvas.remove(selectedObject);
              $('#undo').removeClass("invisible");
            }
          }
        });
        $("#undo").click(function() {
          _clipboard.clone(function(clonedObj) {
            canvas.add(clonedObj);
            canvas.setActiveObject(clonedObj);
            canvas.requestRenderAll();
            $('#undo').addClass("invisible");
          });
        });

        // Positioning
        $("#bringForward").click(function() {
          var activeObject = canvas.getActiveObject();
          activeObject.bringForward();
        });
        $("#bringFront").click(function() {
          var activeObject = canvas.getActiveObject();
          activeObject.bringToFront();
        });
        $("#sendBackward").click(function() {
          var activeObject = canvas.getActiveObject();
          activeObject.sendBackwards();
          shape.sendToBack();
        });
        $("#sendBack").click(function() {
          var activeObject = canvas.getActiveObject();
          activeObject.sendToBack();
          activeObject.bringForward();
        });
        //        canvas.on("object:selected", function(options) {
        //          
        //          options.target.bringToFront();
        //        });

        //        var canvas = new fabric.Canvas('c');

        // Add Text
        $("#addText").click(function() {
          var textBox = new fabric.Textbox("Add text");
//          textBox.hasControls = false;
          canvas.add(textBox).setActiveObject(textBox);
        });

        $("#json").click(function(){
          alert(JSON.stringify(canvas));
          console.log(JSON.stringify(canvas));
        });
        var fonts = ["Open Sans", "Kavivanar", "Indie Flower", "Nanum Brush Script", "Lobster"];
        fonts.forEach(function(font) {
          var option = $("<option value='" + font + "' style='font-family:" + font + ";'></option>").text(font);
          $("#font-family").append(option);
        });
        
        var fontFamily = $("#font-family");
        fontFamily.on("change", function(){
//          var myFont = new FontFaceObserver(fontFamily.val());
//          myFont.load().then(function(){
            canvas.getActiveObject().set("fontFamily", fontFamily.val());
            canvas.requestRenderAll();
//          }).catch(function(e){
//            alert("Font Loading Failed " + fontFamily.val());
//          });
        });

      }); // end of $(document).ready(function() {

      // Function to para sa pag reresize ng canvas (dynamic)
      function resizeCanvas() {
        var canvasSizer = $("#canvasSizer");
        var width = canvasSizer.outerWidth();
        var height = canvasSizer.outerHeight();
        var ratio = canvas.getWidth() / canvas.getHeight();
        if ((width / height) > ratio) {
          width = height * ratio;
        } else {
          height = width / ratio;
        }
        var scale = width / canvas.getWidth();
        var zoom = canvas.getZoom();
        zoom *= scale;
        canvas.setDimensions({
          width: width,
          height: height
        });
        canvas.setViewportTransform([zoom, 0, 0, zoom, 0, 0]);
      }
    })();

  </script>
-->
</body>

</html>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
  <title>Test</title>
</head>
<body>
  <div class="container">
  </div>
  <div class="container">
    <canvas id="mainCanvas" width="525" height="525" style="border: 1px solid #333;"></canvas>
  </div>
  <script>
    $(document).ready(function() {
      var canvas = new fabric.Canvas('mainCanvas', {
        width: 525,
        height: 525,
      });
      //https://static.pexels.com/photos/145685/pexels-photo-145685.jpeg
      fabric.Image.fromURL('../images/background.jpg', function(img) {
        background = img;
        fabric.Image.fromURL('../images/fabric-2.jpg', function(img) {
          tela = img;
          fabric.Image.fromURL('../images/rose.png', function(img) {
            star = img;
            background.scaleToWidth(canvas.getWidth());
            star.scaleToHeight(300);
            tela.set({
              scaleX: 2,
              scaleY: 2
            });
            background.selectable = false;
            tela.selectable = false;
            
            var rect = new fabric.Rect({
    top: 100, left: 0, width: 80, height: 50, fill: 'red' })
            //            background.globalCompositeOperation = 'source-out';
//                        tela.globalCompositeOperation = 'destination-in';
            
            star.globalCompositeOperation = 'destination-atop';
            tela.globalCompositeOperation = 'destination-atop';
            background.globalCompositeOperation = 'source-in';
//                        star.globalCompositeOperation = 'lighter';
            canvas.add(star);
            canvas.add(background);
            canvas.add(tela);
//            canvas.add(rect);
//            star.globalCompositeOperation = 'destination-in';
//            tela.globalCompositeOperation = 'destination-atop';
//            background.globalCompositeOperation = 'source-over';
          });
        });
      });
    });
  </script>
</body>
</html>

