 $(window).on('load', function () {
   $(".loading").fadeOut("slow");;
 });

 var canvas = new fabric.Canvas("mainCanvas", {
   width: 600,
   height: 525,
   containerClassName: 'mainCanvas',
   renderOnAddRemove: false,
   //   imageSmoothingEnabled: false,
   //	enableRetinaScaling: false,
   //	stopContextMenu: true,
 });


 var combi = new fabric.Rect({
   width: 400,
   id: "cloth",
   height: 20,
   top: 40,
   lockMovementX: true,
   lockMovementY: true,
   hasControls: false,
   selectable: false,
   selection: true,
   objectCaching: false,
 });

 var roller = new fabric.Rect({
   id: "cloth",
   width: 400,
   height: 260,
   top: 40,
   lockMovementX: true,
   lockMovementY: true,
   hasControls: false,
   selectable: false,
   selection: true,
   objectCaching: false,
 });

 var zoomLevel = 0;

 var fonts = ['Abril Fatface', 'Acme', 'Alegreya', 'Alegreya Sans', 'Alegreya Sans SC', 'Alex Brush', 'Allura', 'Amatic SC', 'Anton', 'Architects Daughter', 'Archivo Black', 'Bad Script', 'Bangers', 'Barlow Semi Condensed', 'BenchNine', 'Berkshire Swash', 'Bevan', 'Boogaloo', 'Bree Serif', 'Cabin Sketch', 'Cairo', 'Calligraffitti', 'Caveat', 'Caveat Brush', 'Cinzel Decorative', 'Coiny', 'Comfortaa', 'Cookie', 'Cormorant Garamond', 'Courgette', 'Covered By Your Grace', 'Damion', 'Dancing Script', 'Didact Gothic', 'Economica', 'Forum', 'Francois One', 'Fredoka One', 'Gloria Hallelujah', 'Gochi Hand', 'Great Vibes', 'Handlee', 'Hind Madurai', 'Homemade Apple', 'Inconsolata', 'Indie Flower', 'Julius Sans One', 'Kalam', 'Karla', 'Kaushan Script', 'Kristi', 'Lobster', 'Marck Script', 'Merienda', 'Monda', 'Monoton', 'Nanum Brush Script', 'Nanum Gothic', 'Nanum Gothic Coding', 'Nanum Myeongjo', 'Nanum Pen Script', 'Neuton', 'Niconne', 'Nothing You Could Do', 'Oleo Script', 'Open Sans', 'Oswald', 'Pacifico', 'Passion One', 'Patrick Hand', 'Patua One', 'Permanent Marker', 'Plaster', 'Play', 'Playball', 'Poiret One', 'Pompiere', 'Pontano Sans', 'Prata', 'Raleway', 'Reenie Beanie', 'Righteous', 'Roboto', 'Rochester', 'Rock Salt', 'Sacramento', 'Satisfy', 'Shadows Into Light', 'Shadows Into Light Two', 'Shrikhand', 'Signika', 'Six Caps', 'Sorts Mill Goudy', 'Source Code Pro', 'Source Serif Pro', 'Tangerine', 'Teko', 'Ubuntu Condensed', 'VT323', 'Yellowtail'];

 var fabricType = "../images/fabric-1.jpg";
 var translucent = "../images/tanslucent.jpg";
 var overlayImage = "../images/templateImages/edited.png";
 var backgroundImage = '../images/background3.jpg';
 var summary = {
   blinds: "",
   fabric: "",
   width: 132.00,
   widthUnit: "centimeter",
   height: 132.00,
   heightUnit: "centimeter"
 }

 $(document).ready(function () {
   $(".dropify-wrapper").addClass("d-none");
   // DISABLE RIGHT CLICK ON CANVAS
   $("#canvasSizer").on("contextmenu", function (e) {
     return false;
   });
   // ACTIVATE BOOTSTRAP PLUGINS
   $('[data-toggle="popover"]').popover();
   $('[data-toggle="tooltip"]').tooltip()
   $(':checkbox').prop('indeterminate', true);
   var drEvent = $('.dropify').dropify({
     messages: {
       'default': '<span class="d-none d-sm-inline">Drag and drop a <b>image</b> here or Click</span><span class="d-inline d-sm-none">Click to insert <b>image</b>',
       'replace': '<span class="d-none d-sm-inline">Drag and drop or </span>Click to replace',
       'remove': 'Remove',
       'error': 'Ooops, something wrong happended.'
     }
   });

   $("[data-magnify='lens']").elevateZoom({
     zoomType: "lens",
     lensShape: "round",
     lensSize: 150,
     responsive: true,
     scrollZoom: true,
   });

   /*
    **  CANVAS PROPERTIES
    */
   canvas.hoverCursor = 'pointer';
   fabric.Group.prototype.hasControls = false;

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

   canvas.setOverlayImage(overlayImage,
     canvas.renderAll.bind(canvas), {
       scaleX: 1,
       scaleY: 1,
     });

   canvas.setBackgroundImage(backgroundImage, canvas.renderAll.bind(canvas));


   fabric.Canvas.prototype.fxAdd = function (object, callback) {
     object.setOpacity(0);
     this.add(object);
     object.animate('opacity', '1', {
       duration: 300,
       onChange: this.renderAll.bind(this),
       onComplete: this.setActiveObject(object)
     });
   };

   //  END OF CANVAS PROPERTIES

   /*
    **  CANVAS OBJECT EVENTS
    */



   canvas.on('mouse:wheel', function (event) {
     if (event.e.deltaY > 0 && event.e.altKey && zoomLevel > 0) {
       canvas.setZoom(canvas.getZoom() / 1.1);
       zoomLevel--;
       event.e.preventDefault();
       event.e.stopPropagation();
       limitPanningArea(this)

     } else if (event.e.deltaY < 0 && event.e.altKey && zoomLevel <= 10) {
       canvas.setZoom(canvas.getZoom() * 1.1);
       zoomLevel++;
       event.e.preventDefault();
       event.e.stopPropagation();
       limitPanningArea(this)
     }
   });



   canvas.on('before:render', function () {
     //    $("#width-loading").addClass("invisible");
     //        console.log("before");
   })
   canvas.on('after:render', function () {
     //    $("#width-loading").removeClass("invisible");
     //        console.log("after");

   })
   canvas.on('selection:cleared', function () {
     $("#object-properties").addClass("collapse");
     var dataURL = canvas.toDataURL('jpg');
     $("#preview-image").attr("src", dataURL);
     $("#btnSetting").addClass("invisible");
     sendClothToBack();
   })

   canvas.on('object:selected', function (e) {
     addDeleteBtn((e.target.oCoords.mb.x), e.target.oCoords.mb.y);
     e.target.set({
       cornerStyle: 'circle',
       borderColor: '#17a2b8',
       cornerStrokeColor: 'white',
       padding: 5,
       transparentCorners: false,
       selectionBackgroundColor: '#ffffff59'
     });
     //    $('#btnProperties').popover('hide');
     //    $('#btnDelete').tooltip('hide');
     activeObject = canvas.getActiveObject();
     if (activeObject) {
       $("#object-properties").removeClass("collapse");
       if (activeObject.id.indexOf("cloth")) {
         $("#range-opacity").val(activeObject.get("opacity") * 100);
         $("#number-opacity").val(activeObject.get("opacity") * 100);

         if (activeObject.isType('textbox')) {
           $("#properties-opacity").removeClass("collapse");
           $("#properties-layer").removeClass("collapse");
           $("#font-size").val(activeObject.get("fontSize"));
           $("#font-family").val(activeObject.get("fontFamily"));
           $("#properties-font").removeClass("collapse");
           $("#properties-font-size").removeClass("collapse");

         } else if (activeObject.isType('image')) {

         } else {
           $("#properties-color").removeClass("collapse");

           $("#properties-opacity").removeClass("collapse");
           $("#properties-layer").removeClass("collapse");
           $("#properties-font").addClass("collapse");
           $("#properties-font-size").addClass("collapse");
         }
       } else {
         $("#properties-opacity").addClass("collapse");
         $("#properties-font").addClass("collapse");
         $("#properties-font-size").addClass("collapse");
         $("#properties-layer").addClass("collapse");
       }
     } else {

     }
   });
   canvas.on('object:modified', function (e) {
     //    activeObject = canvas.getActiveObject();
     addDeleteBtn((e.target.oCoords.mb.x), e.target.oCoords.mb.y);
     //        loadPattern(fabricType, activeObject, "blue");
     var dataURL = canvas.toDataURL('jpg');
     $("#preview-image").attr("src", dataURL);
   });

   var panning = false;
   var isPan = false;
   canvas.on('mouse:down', function (e) {
     if (!canvas.getActiveObject()) {
       $('#btnDelete').tooltip('hide');
       $("#btnSetting").addClass("invisible");
     }
     panning = true;
   });
   canvas.on('object:scaling', function (e) {
     $('#btnDelete').tooltip('hide');
     $("#btnSetting").addClass("invisible");
   });
   canvas.on('object:moving', function (e) {
     $('#btnDelete').tooltip('hide');
     $("#btnSetting").addClass("invisible");
   });
   canvas.on('object:rotating', function (e) {
     $('#btnDelete').tooltip('hide');
     $("#btnSetting").addClass("invisible");
   });
   canvas.on('mouse:up', function (e) {
     panning = false;
   });
   canvas.on("mouse:move", function (e) {
     if ((panning && e.e.altKey) || (panning && window.isPan)) {
       if (zoomLevel != 0) {

         canvas.selection = false;
         var delta = new fabric.Point(e.e.movementX, e.e.movementY);
         canvas.relativePan(delta);
         limitPanningArea(this);
       }
       $('#btnPan').find('[data-fa-i2svg]').toggleClass('fa-hand-rock');
     } else {
       canvas.selection = true;
       $('#btnPan').find('[data-fa-i2svg]').toggleClass('fa-hand-paper');
     }


   })

   // END OF CANVAS OBJECT EVENTS

   /*
    ** CREATE OBJECT
    */




   var getRandomInt = fabric.util.getRandomInt,
     color = ["#ffcc66", "#ccff66", "#66ccff", "#ff6fcf", "#ff6666", "#E4B75C", "#00A96D", "#E9177E", "#8B8FC9", "#02949C", "#DFFBCC", "#06F3EC", "#CCD43F", "#C36ACD", "#17263C", "#B70D93"],
     colorEnd = color.length - 1;


   //     canvas.add(roller);



   // END OF CREATING OBJECT

   /*
    ** CANVAS FUNCTIONS
    */
   //   loadCombi(fabricType, '#fff');

   function addDeleteBtn(x, y) {
     $("#btnSetting").addClass("invisible");
     var btnLeft = x - 5,
       btnTop = y + 50;
     $("#btnSetting").css({
       "top": btnTop + "px",
       "left": btnLeft + "px"
     });
     $("#btnSetting").toggleClass("invisible");
   }
// NOTE INSERT OBJECT
   $("#btnText").click(function () {
     var text = new fabric.Textbox("text", {
       id: "textbox",
       fontFamily: "Handlee",
       width: 200,
       top: 30,
       textAlign: 'center',
       objectCaching: false
     });
//     canvas.centerObject(text);
     canvas.fxAdd(text);
     canvas.renderAll();
     sendClothToBack();

   });
   $("#btnCircle").click(function () {
     var circle = new fabric.Circle({
       id: "circle",
       radius: 40,
       top: 40,
       //      fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       //       opacity: 0.8,
//       originX: 'center',
//       originY: 'center',
       objectCaching: false,
       //      clipName: 'objectOutside',
       //      clipTo: function (ctx) {
       //        return _.bind(clipByName, circle)(ctx)
       //      }

     });
//     canvas.centerObjectH(circle);
     canvas.fxAdd(circle);
     loadPattern(fabricType, circle, color[getRandomInt(0, colorEnd)]);
     sendClothToBack();

     //    canvas.renderAll();
   });
   $("#btnSquare").click(function () {
     //    var sqSize = getRandomInt(70, 200);
     var rectangle = new fabric.Rect({
       id: "rect",
       width: 70,
       height: 70,
       top: 60,
       left: 200,
       fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       //       opacity: 0.8,
       objectCaching: false,

     });
//     canvas.centerObject(rectangle);
     canvas.fxAdd(rectangle);
     loadPattern(fabricType, rectangle, color[getRandomInt(0, colorEnd)]);
     sendClothToBack();
   });
   $("#btnLine").click(function () {
     var line = new fabric.Line([getRandomInt(50, 250), getRandomInt(50, 250), getRandomInt(50, 250), getRandomInt(50, 250)], {
       id: "line",
       strokeWidth: getRandomInt(3, 10),
       stroke: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       top: 30,
       //       opacity: 0.8,
       objectCaching: false
     });
//     canvas.centerObject(line);
     canvas.fxAdd(line);
     canvas.renderAll();
     sendClothToBack();

   });
   $("#btnTriangle").click(function () {
     var triangle = new fabric.Triangle({
       id: "triangle",
       top: 30,
       fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       //       opacity: 0.8,
       objectCaching: false
     });
     canvas.centerObjectH(triangle);
     canvas.fxAdd(triangle);
     canvas.renderAll();
     sendClothToBack();


   });
   // END OF CANVAS FUNCTIONS


   /*
    ** OTHER FUNCTIONS
    */

   $("#confirmModal").on("show.bs.modal", function (event) {
     var target = $(event.delegateTarget);
     var category = target.html();
   });

   $("#blindImageType").on("show.bs.modal", function (event) {
     var button = $(event.relatedTarget);
     var content = button.parent().parent().children(':first-child').html();
     var modal = $(this);
     modal.find('.modal-body .carousel-inner').html(content);
   });

   $("#view-image").on("show.bs.modal", function (event) {
     var image = $(event.relatedTarget);
     var src = image.attr('src');
     var modal = $(this);
     modal.find('.modal-body img').attr('src', src);
   });


   $(".image-select").click(function (evt) {
     var path = ($(this).parent().parent().find("img").attr('src'));
     insertImageToCanvas(path);
   });

   $("#btnZoomIn").click(function () {
     if (zoomLevel <= 10) {
       canvas.setZoom(canvas.getZoom() * 1.1);
       zoomLevel++;
     }
   });
   $("#btnZoomOut").click(function () {
     if (zoomLevel > 0) {
       canvas.setZoom(canvas.getZoom() / 1.1);
       zoomLevel--;
     }
   });

   $('#btnPan').on('click', function () {
     if ($("#btnPan").hasClass('active')) {
       $("#btnPan").removeClass("active");
       window.isPan = false;
     } else {
       window.isPan = true;
       $("#btnPan").addClass("active");
     }
   });

   $("#insert-image").on('change', function (evt) {
     var path = URL.createObjectURL(evt.target.files[0]);
     insertImageToCanvas(path);
     $("#insert-images").modal('hide');
   });

   function doDelete() {

     object = canvas.getActiveObject();
     //    object.hasControls = object.hasBorders = false;
     if (object) {
       canvas.discardActiveObject();
       object.animate({
         top: "-=300",
         opacity: 0
       }, {
         duration: 200,
         onChange: canvas.renderAll.bind(canvas),
         easing: fabric.util.ease.easeInBack,
         onComplete: function () {
           object.clone(function (cloned) {
             _clipboard = cloned;
           });
           canvas.remove(object)
           //          $("#undo").parent().removeClass('invisible');
         }
       });

     } else {
       canvas.getActiveGroup().clone(function (cloned) {
         _clipboard = cloned;
       });
       canvas.getActiveGroup().forEachObject(function (object) {
         object.animate({
           top: "-=300",
           opacity: 0.3
         }, {
           duration: 300,
           onChange: canvas.renderAll.bind(canvas),
           easing: fabric.util.ease.easeInBack,
           onComplete: function () {
             canvas.remove(object)
             canvas.discardActiveGroup();
             //          $("#undo").parent().removeClass('invisible');
           }
         });
       });
       //      canvas.discardActiveGroup().renderAll();
     }
   }

   $("#btnDelete").click(function (evt) {
     //     DONE [X] Delete button
     doDelete();
   });

   // DELETE OBJECT USING DELETE BUTTON
   $(document).keydown(function (event) {
     if (event.which == 46) { //46 = ascii delete key
       doDelete();
     } else if (event.ctrlKey && event.keyCode == 86) {
       Paste();
     } else if (event.ctrlKey && event.keyCode == 67) {
       Copy();
     }
   });

   $("#undoClose").click(function () {
     $("#undoClose").parent().addClass('invisible');
   });
   $("#undo").click(function () {
     _clipboard.clone(function (clonedObj) {
       canvas.fxAdd(clonedObj);
       canvas.renderAll();
       $("#undo").parent().addClass('invisible');
       clonedObj.animate({
         top: "+=300",
         opacity: 1
       }, {
         duration: 300,
         onChange: canvas.renderAll.bind(canvas),
         easing: fabric.util.ease.easeOutBack,
         onComplete: function () {

           canvas.setActiveObject(clonedObj);

         }
       });
     });
   });

   var hexColor = ["#6B5B95", "#ECDB54", "#E94B3C", "#6F9FD8", "#944743", "#DBB1CD", "#EC9787", "#00A591", "#6C4F3D", "#EADEDB", "#BC70A4", "#BFD641", "#2E4A62", "#B4B7BA"];
   var nameColor = ["Ultra Violet", "Meadowlark", "Cherry Tomato", "Little Boy Blue", "Chili Oil", "Pink Lavender", "Blooming Dahlia", "Arcadia", "Emperador", "Almost Mauve", "Spring Crocus", "Lime Punch", "Sailor Blue", "Harbor Mist"];
   var setOfColors = "";
   for (var i = 0; i < hexColor.length; i++) {
     setOfColors += '<span class="fa-2x cursor-pointer colors" title="' + nameColor[i] + '" onclick="changeColor(\'' + fabricType + '\',\'' + hexColor[i] + '\')"> <i class="fas fa-dot-circle" style="color: ' + hexColor[i] + ';"></i></span>';
     if ((i + 1) % 5 == 0) {
       setOfColors += "<br/>"
     }
   }
   setOfColors += '<span class="openColorPicker fa-2x cursor-pointer colors" data-toggle="tooltip" data-placement="top" title="Colors"><i class="openColorPicker fas fa-plus-circle text-dark ml-2"></i></span>';
   $("#inputFillColor").attr('data-content', setOfColors);

   $(".openColorPicker").spectrum();
   $('#inputFillColor').on('shown.bs.popover', function () {
     allColors();
   })

   $("#range-opacity, #number-opacity").on("input", function () {
     $("#number-opacity").val($(this).val());
     $("#range-opacity").val($(this).val());
     canvas.getActiveObject().set({
       opacity: $(this).val() * 0.01
     })
     canvas.renderAll();
   });

   $("#btn-bringfront").click(function () {
     var activeObject = canvas.getActiveObject();
     activeObject.bringForward();
     canvas.renderAll();
   });
   $("#btn-bringtofront").click(function () {
     var activeObject = canvas.getActiveObject();
     activeObject.bringToFront();
     canvas.renderAll();
   });
   $("#btn-sendbackward").click(function () {
     var activeObject = canvas.getActiveObject();
     activeObject.sendBackwards();
     canvas.getObjects().forEach(function (o) {
       if (o.id === "cloth") {
         o.sendToBack();
       }
     })
     canvas.renderAll();
   });
   $("#btn-sendback").click(function () {
     var activeObject = canvas.getActiveObject();
     activeObject.sendToBack();
     activeObject.bringForward();
     canvas.renderAll();
   });

   $('#lock').on('click', function () {
     canvas.discardActiveObject();
     $(this)
       .find('[data-fa-i2svg]')
       .toggleClass('fa-lock-open fa-lock');
     $(this).toggleClass("text-dark text-info");

     canvas.getObjects().forEach(function (obj) {
       var objID = obj.id;
       if (~objID.indexOf("cloth")) {
         obj.set({
           selectable: $("#lock").hasClass("lock") ? true : false,
         });
       }
     });
     $("#lock").toggleClass("lock");
     canvas.renderAll();
   });

   $("#check-translucent").change(function () {
     if (this.checked) {
       activeObject = canvas.getActiveObject();
       activeObject.set({
         opacity: 1,
         id: activeObject.id + "_translucent"
       });
       changeColor(translucent, "white")

     } // END OF IF
   });

   var lastWidthValue = $("#width-unit").val();

   $("#width-unit").change(function (e) {
     var wid = $("#cloth-width").val();
     $("#cloth-width").val(convertUnit(wid, lastWidthValue, $("#width-unit").val()).toFixed(2));
     lastWidthValue = $("#width-unit").val();
     $("#summary-width").val($("#cloth-width").val() + " " + $("#width-unit").val());

   });

   $("#cloth-width").change(function () {
     $("#summary-width").val($("#cloth-width").val() + " " + $("#width-unit").val());
     //        canvas.getObjects().forEach(function (obj) {
     //          var objID = obj.id;
     //          if (~objID.indexOf("cloth")) {
     //            var clothWidth = parseInt($("#cloth-width").val());
     //            var widthUnit = $("#width-unit").val();
     //            obj.width = convertToPixel(clothWidth, widthUnit);
     //            obj.scaleX = 1;
     //            obj.scaleY = 1;
     //          }
     //        });
     //        canvas.renderAll();

   });

   $("#height-unit").change(function (e) {
     summary.height = $("#cloth-height").val();
     $("#cloth-height").val(convertUnit(summary.height, summary.heightUnit, $("#height-unit").val()).toFixed(2));
     summary.heightUnit = $("#height-unit").val();
     $("#summary-height").val(summary.height + " " + summary.heightUnit);
   });

   $("#cloth-height").change(function () {
     summary.height = $("#cloth-height").val();
     $("#summary-height").val(summary.height + " " + summary.heightUnit);
   });


   fonts.forEach(function (font) {
     var option = $("<option value='" + font + "' style='font-family:" + font + ";'></option>").text(font);
     $("#font-family").append(option);
   });

   $("#font-family").change(function () {
     canvas.getActiveObject().set("fontFamily", $("#font-family").val());
     canvas.renderAll();
   });

   $("#font-size").change(function () {
     activeObject = canvas.getActiveObject();
     activeObject.set("fontSize", $("#font-size").val())
     canvas.renderAll();
   });



   // END OF OTHER FUNCTIONS


 }); // END OF DOCUMENT READY
// NOTE INSERT IMAGE
 function insertImageToCanvas(path) {
   fabric.Image.fromURL(path, function (img) {
     var scale = 1;
     var temp = img.width;
     while (temp > roller.width) {
       temp = img.width;
       scale -= 0.1;
       temp *= scale;
     }
     img.set({
       id: 'image',
       scaleX: scale,
       scaleY: scale,
       objectCaching: false,
     });
     canvas.centerObject(img);
     canvas.fxAdd(img);
     sendClothToBack();

   });
 }


 function changeFabric(type, name) {
   summary.fabric = name;
   window.fabricType = type;
   removeCloth();
   if (summary.blinds == "Roller Shades") {
     loadRoller();
   } else if (summary.blinds == "Combi Blinds") {
     loadCombi(window.fabricType, 'white');

   }

 }

 function sendClothToBack() {
   canvas.getObjects().forEach(function (obj) {
     var objID = obj.id;
     if (~objID.indexOf("cloth")) {
       var split = objID.split('-');
       if (eval(split[1]) % 2 == 1 && eval(split[1] < 12)) {
         obj.bringToFront();
       } else {
         obj.sendToBack();
       }

     }
   });
 }
 // DONE [X] CHANGESHADES
 function changeShades(type) {
   if (window.summary.blinds != "") {
     $("#modal-blinds-type").html(type)
     $("#confirmModal").modal('show');
   } else {
     removeCloth();
     if (type == "roller") {
       summary.blinds = "Roller Shades";
       loadRoller();
       canvas.renderAll();
     } else if (type == "combi") {
       summary.blinds = "Combi Blinds";
       $("#rollerShadesSlides").parent().removeClass("border-primary");
       $("#combiShadesSlides").parent().addClass("border-primary");
       loadCombi(fabricType, 'white')
     }
   }
   //   sendClothToBack();
 }

 function loadRoller() {
   $("#rollerShadesSlides").parent().addClass("border-primary");
   $("#combiShadesSlides").parent().removeClass("border-primary");
   roller.set({
     id: "cloth",
     left: 90
   })
   canvas.add(roller)
   loadPattern(fabricType, roller, "white");
 }

 function removeCloth() {
   // FUTURE SET SUMMARY.BLINDS = NULL
   canvas.clear();
   canvas.setOverlayImage(overlayImage,
     canvas.renderAll.bind(canvas), {
       scaleX: 1,
       scaleY: 1,
     });

   canvas.setBackgroundImage(backgroundImage, canvas.renderAll.bind(canvas));
   $("#btn-reset").popover('hide')
   //   var group = new fabric.Group();
   //   canvas.getObjects().forEach(function (obj) {
   //     var objID = obj.id;
   //       console.log(objID)
   //     if (~objID.indexOf("cloth")) {
   //       group.add(obj);
   //     }
   //     group.forEachObject(function (obj) {
   //       canvas.remove(obj)
   //     });
   //     
   //   });
   //  getAllObject();
 }

 function loadCombi(fabricType, color) {
   var ctr = 0;
   for (var i = 0; i < 15; i++) {
     var object = fabric.util.object.clone(combi);
     object.set({
       "id": 'cloth-' + i,
       "top": (object.top + ctr),
       "opacity": (i % 2 == 0) ? 1 : 0.7,
       "left": 80
     });
     ctr += object.height;
     canvas.add(object);
     if (i % 2 == 0) {
       loadPattern(fabricType, object, color);
     } else {
       loadPattern(translucent, object, color);
     }
   }
   // FIXME COMBI BLINDS BACK FABRIC
   //     ctr = 0;
   //      for (var i = 12; i < 24; i++) {
   //        var object = fabric.util.object.clone(combi);
   //        object.set({
   //          "id": 'cloth-' + i,
   //          "top": (object.top + ctr),
   //          "opacity": (i % 2 == 0) ? 0.8 : 1,
   //          "left": 131
   //        });
   //        ctr += object.height;
   //        canvas.add(object);
   //        if (i % 2 == 0) {
   //       loadPattern(translucent, object, color);
   //     } else {
   //       loadPattern(fabricType, object, color);
   //     }
   //      }

 }

 function loadPattern(url, object, color) {

   // FIXME URGENT!! FABRIC PATTERN (DIKO NA KAYA)

   fabric.Image.fromURL(url, function (img) {
     img.scaleToWidth(100);
     var patternSourceCanvas = new fabric.StaticCanvas();
     //   
     //        patternSourceCanvas.add(img);
     //        patternSourceCanvas.renderAll();
     //        patternSourceCanvas.setDimensions({
     //          width: 50,
     //          height: 50
     //        });
     //        patternSourceCanvas.renderAll();
     var pattern = patternSourceCanvas.getElement();
     object.set('fill', new fabric.Pattern({
       source: function () {
         patternSourceCanvas.setDimensions({
           width: 50,
           height: 50
         });
         patternSourceCanvas.renderAll();
         return patternSourceCanvas.getElement();
       },

       //       source: pattern,
       repeat: 'repeat',
     }));
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
   //   console.log(object)
   object.filters.push(filter);
   object.applyFilters(canvas.renderAll.bind(canvas));
   //  canvas.renderAll();
 }

 function allColors() {
   $(".openColorPicker").spectrum({
     showPalette: true,
     showInitial: true,
     showInput: true,
     showButtons: false,
     palette: [],
     maxSelectionSize: 3,
     move: function (color) {
       changeColor(fabricType, color.toHexString());
     }
   });
 }

 function changeColor(url, color) {
   $("#color-name").html(color);
   $("#inputFillColor").css("color", color);
   var object = canvas.getActiveObject();
   var group = canvas.getActiveGroup();
   if (object) {
     loadPattern(url, object, color);
   } else if (group) {
     group.forEachObject(function (obj) {
       loadPattern(url, obj, color);
     });
   } else {
     canvas.getObjects().forEach(function (obj) {
       var objID = obj.id;
       if (~objID.indexOf("cloth")) {
         var split = objID.split("-");
         if (eval(split[1]) % 2 == 1 && eval(split[1] < 12)) {
           loadPattern(translucent, obj, color);
         } else {
           loadPattern(url, obj, color);
         }
       }
     });
   }
 }

 function convertToPixel(value, unit) {
   return (convertUnit(value, unit, "centimeter") * 37.795275591) / 10;
 }

 function convertUnit(value, unitFrom, unitTo) {
   var centimeterTo = {
     "centimeter": 1,
     "inches": 0.39370078740157,
     "feet": 0.032808398950131,
     "meter": 0.01,
     "yard": 0.010936132983377,
   };
   var inchesTo = {
     "centimeter": 2.54,
     "inches": 1,
     "feet": 0.083333333333333,
     "meter": 0.0254,
     "yard": 0.027777777777778
   };
   var meterTo = {
     "centimeter": 100,
     "inches": 39.370078740157,
     "meter": 1,
     "feet": 3.2808398950131,
     "yard": 1.0936132983377
   }
   var feetTo = {
     "centimeter": 30.48,
     "inches": 12,
     "meter": 0.3048,
     "feet": 1,
     "yard": 0.33333333333333
   };
   var yardTo = {
     "centimeter": 91.44,
     "inches": 36,
     "meter": 0.9144,
     "feet": 36,
     "yard": 1
   };
   var converted = 0;
   if (unitFrom == "centimeter") {
     converted = value * centimeterTo[unitTo];
   } else if (unitFrom == "inches") {
     converted = value * inchesTo[unitTo];
   } else if (unitFrom == "meter") {
     converted = value * meterTo[unitTo];
   } else if (unitFrom == "feet") {
     converted = value * feetTo[unitTo];
   } else if (unitFrom == "yard") {
     converted = value * yardTo[unitTo];
   }
   return converted;
 }

 function saveTemplate() {
   // FUTURE SAVE TEMPLATE TO JSON
   var json = canvas.toJSON(['id', 'lockMovementX', 'lockMovementY', 'hasControls', 'selectable', 'selection', 'objectCaching', 'source']);
   console.log(json)
 }

 function loadTemplate(json) {
   canvas.loadFromJSON(json, canvas.renderAll.bind(canvas));
   var dataURL = canvas.toDataURL('jpg');
   $("#preview").attr("src", dataURL)
 }

 function step4() {
   canvas.discardActiveObject();
   var dataURL = canvas.toDataURL('jpg');
   $("#preview-image").attr("src", dataURL);
   $("#summary-blinds").val(window.summary.blinds);
   $("#summary-fabric").val(window.summary.fabric);
   $("#summary-width").val(window.summary.width + " " + window.summary.widthUnit);
   $("#summary-height").val(window.summary.height + " " + window.summary.heightUnit);
 }

 function step2() {
   $("#colorForFabric").append($("#inputFillColor").parent())
 }

 function step3() {
   $("#colorForObject").append($("#inputFillColor").parent());
 }

 function getAllObject() {
   canvas.getObjects().forEach(function (obj) {
     console.log(obj);
   });
 }


 // DONE [x] Limit Panning Area
 function limitPanningArea(opt) {
   var vpt = opt.viewportTransform;
   var zoom = canvas.getZoom();
   if (zoom < 400 / 1000) {
     opt.viewportTransform[4] = 400 - 1000 * zoom / 2;
     opt.viewportTransform[5] = 400 - 1000 * zoom / 2;
   } else {
     if (vpt[4] >= 0) {
       opt.viewportTransform[4] = 0;
     } else if (vpt[4] < canvas.getWidth() - 490 * zoom) {
       opt.viewportTransform[4] = canvas.getWidth() - 490 * zoom;
     }
     if (vpt[5] >= 0) {
       opt.viewportTransform[5] = 0;
     } else if (vpt[5] < canvas.getHeight() - 490 * zoom) {
       opt.viewportTransform[5] = canvas.getHeight() - 500 * zoom;
     }
   }
 }

 function cancelReset() {
   $("#btn-reset").popover('hide')
 }

 function modalChangeShades() {
   var type = $("#modal-blinds-type").html();
   removeCloth();
   if (type == "roller") {
     summary.blinds = "Roller Shades";
     loadRoller();
     canvas.renderAll();
   } else if (type == "combi") {
     summary.blinds = "Combi Blinds";
     $("#rollerShadesSlides").parent().removeClass("border-primary");
     $("#combiShadesSlides").parent().addClass("border-primary");
     loadCombi(fabricType, 'white')
   }

 }

 // TODO COPY AND PASTE

 function Copy() {
   canvas.getActiveObject().clone(function (cloned) {
     _copypaste = cloned;
   });

   console.log(_copypaste)
 }

 function Paste() {
   _copypaste.clone(function (clonedObj) {
     canvas.discardActiveObject();
     clonedObj.set({
       id: "object",
       left: clonedObj.left + 10,
       top: clonedObj.top + 10,
       evented: true,
     });
     if (clonedObj.type === 'activeSelection') {
       clonedObj.canvas = canvas;
       clonedObj.forEachObject(function (obj) {
         canvas.fxAdd(obj);
       });
       clonedObj.setCoords();
     } else {
       canvas.fxAdd(clonedObj);
     }
     _copypaste.top += 10;
     _copypaste.left += 10;
     canvas.setActiveObject(clonedObj);
     //     canvas.requestRenderAll();
   });
 }

// TODO PREVIEW
 function preview() {
   var group = new fabric.Group();
   $("#btnPreview").prop("disabled",true);
   canvas.getObjects().forEach(function (obj) {
     //    group.add(obj);
     var temp = obj.top;
     console.log("temp " + temp)
     obj.animate('top',obj.top <= -200 ? obj.top+200 : -200, {
       duration: 1000,
       onChange: canvas.renderAll.bind(canvas),
       onComplete: function () {
     console.log(obj.top)
         $("#btnPreview").prop("disabled",false);
       },
       easing: fabric.util.ease.easeOutQuad,
     });
   });
//   canvas.add(group);
//   canvas.renderAll();
//   group.animate('top', -200, {
//     duration: 5000,
//     onChange: canvas.renderAll.bind(canvas),
//     onComplete: function () {
//       canvas.remove(group)
//     },
//     easing: fabric.util.ease.easeOutQuad,
//   });
 }
