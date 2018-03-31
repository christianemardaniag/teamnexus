 $(window).on('load', function () {
   $(".loading").fadeOut("slow");
 });

 var canvas = new fabric.Canvas("mainCanvas", {
   width: 600,
   height: 525,
   containerClassName: 'mainCanvas',
   renderOnAddRemove: false,
   preserveObjectStacking: true
 });

 var combi = new fabric.Rect({
   width: 800,
   id: "cloth",
   height: 20,
   top: 50,
   lockMovementX: true,
   lockMovementY: true,
   hasControls: false,
   selectable: false,
   selection: true,
   objectCaching: false,
 });

 var roller = new fabric.Rect({
   originX: 'center',
   originY: 'center',
   id: "cloth",
   width: 800,
   height: 660,
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
 var overlayImage = "../images/window.png";
 var backgroundImage = '../images/morning.jpg';
 var summary = {
   blinds: "",
   blindsCode: "",
   fabric: "",
   fabricCode: "",
   width: 132.00,
   widthUnit: "cm",
   height: 132.00,
   heightUnit: "cm"
 }

 var clipRect1 = new fabric.Rect({
   id: 'clip',
   originX: 'left',
   originY: 'top',
   left: 80,
   top: 40,
   width: 400,
   height: 260,
   fill: 'transparent',
   selectable: false,
   lockMovementX: true,
   lockMovementY: true,
   hasControls: false,
 });

 var insertLine = false,
   line, isDown;
 $(document).ready(function () {

   $('body').on('click', function (e) {
     $('[data-toggle="popover"]').each(function () {
       if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
         $(this).popover('hide');
       }
     });
   });
   $(".dropify-wrapper").addClass("d-none");
   // DISABLE RIGHT CLICK ON CANVAS
   $("#canvasSizer").on("contextmenu", function (e) {
     //     alert("Right click is not available in canvas")
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

   clipRect1.set({
     clipFor: 'clipObj'
   });



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
     addDeleteBtn((e.target.oCoords.tr.x), e.target.oCoords.tr.y);
     e.target.set({
       cornerStyle: 'circle',
       borderColor: '#17a2b8',
       cornerStrokeColor: 'white',
       padding: 5,
       transparentCorners: false,
       selectionBackgroundColor: '#ffffff59',
       rotatingPointOffset: 20
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
           $("#properties-color").removeClass("collapse");
           $("#properties-opacity").removeClass("collapse");
           $("#properties-layer").removeClass("collapse");
           $("#font-size").val(activeObject.get("fontSize"));
           $("#font-family").val(activeObject.get("fontFamily"));
           $("#properties-font").removeClass("collapse");
           $("#properties-font-size").removeClass("collapse");

         } else if (activeObject.isType('image')) {
           $("#properties-color").addClass("collapse");

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
     addDeleteBtn((e.target.oCoords.tr.x), e.target.oCoords.tr.y);
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
     if (insertLine) {
       isDown = true;
       var pointer = canvas.getPointer(e.e);
       var points = [pointer.x, pointer.y, pointer.x, pointer.y];
       line = new fabric.Line(points, {
         id: 'line',
         strokeWidth: 3,
         stroke: color[getRandomInt(0, colorEnd)],
         //         perPixelTargetFind: true,
         //         top: 100,
         //         left: 230,
         objectCaching: false,
         //         lockScalingFlip: true,
         originX: 'center',
         originY: 'center',
         clipName: 'clipObj',
         clipTo: function (ctx) {
           return _.bind(clipByName, line)(ctx)
         }
       });
       canvas.add(line);

     }
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
     isDown = false;
     if (insertLine) {
       insertLine = false;
       canvas.setActiveObject(line);
       canvas.renderAll();
       $("#mainCanvas").css("cursor", "auto");
     }
   });
   canvas.on("mouse:move", function (e) {
     if ((panning && e.e.altKey) || (panning && window.isPan)) {
       msg("panning")
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

     if (insertLine) {

       if (!isDown) return;
       var pointer = canvas.getPointer(e.e);
       line.set({
         x2: pointer.x,
         y2: pointer.y
       });
       canvas.renderAll();
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
     var btnLeft = x + 8,
       btnTop = y + 5;
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
       top: 100,
       left: 230,
       textAlign: 'center',
       objectCaching: false,
       //       originX: 'center',
       //       originY: 'center',
       //       clipName: 'clipObj',
       //       clipTo: function (ctx) {
       //         return _.bind(clipByName, text)(ctx)
       //       }
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
       top: 100,
       left: 230,
       fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       objectCaching: false,
       lockScalingFlip: true,
       originX: 'center',
       originY: 'center',
       clipName: 'clipObj',
       clipTo: function (ctx) {
         return _.bind(clipByName, circle)(ctx)
       }
     });

     canvas.fxAdd(circle);

     loadPattern(fabricType, circle, color[getRandomInt(0, colorEnd)]);
     sendClothToBack();
   });
   $("#btnSquare").click(function () {
     var rectangle = new fabric.Rect({
       id: "rect",
       width: 70,
       height: 70,
       top: 100,
       left: 230,
       fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       objectCaching: false,
       lockScalingFlip: true,
       originX: 'center',
       originY: 'center',
       clipName: 'clipObj',
       clipTo: function (ctx) {
         return _.bind(clipByName, rectangle)(ctx)
       }

     });
     //     canvas.centerObject(rectangle);
     canvas.fxAdd(rectangle);
     loadPattern(fabricType, rectangle, color[getRandomInt(0, colorEnd)]);
     sendClothToBack();
   });
   $("#btnLine").click(function () {
     insertLine = true;
     $("#mainCanvas").css("cursor", "crosshair");

     //     var line = new fabric.Line([getRandomInt(50, 250), getRandomInt(50, 250), getRandomInt(50, 250), getRandomInt(50, 250)], {
     //       id: "line",
     //       strokeWidth: getRandomInt(3, 10),
     //       stroke: color[getRandomInt(0, colorEnd)],
     //       perPixelTargetFind: true,
     //       top: 100,
     //       left: 230,
     //       objectCaching: false,
     //       lockScalingFlip: true,
     //       originX: 'center',
     //       originY: 'center',
     //       clipName: 'clipObj',
     //       clipTo: function (ctx) {
     //         return _.bind(clipByName, line)(ctx)
     //       }
     //     });
     //     canvas.fxAdd(line);
     //     canvas.renderAll();
     //     sendClothToBack();

   });
   $("#btnTriangle").click(function () {
     var triangle = new fabric.Triangle({
       id: "triangle",
       top: 100,
       left: 230,
       fill: color[getRandomInt(0, colorEnd)],
       perPixelTargetFind: true,
       lockScalingFlip: true,
       objectCaching: false,
       originX: 'center',
       originY: 'center',
       clipName: 'clipObj',
       clipTo: function (ctx) {
         return _.bind(clipByName, triangle)(ctx)
       }
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

   $('#customization-tutorial').on('hide.bs.modal', function (e) {
     $("#video").get(0).pause();
   });

   $("#modalSummaryOrder").on("show.bs.modal", function (event) {
     canvas.discardActiveObject();
     canvas.renderAll();
     var preview = canvas.toDataURL('jpg');
     var minW = $("#cloth-width").val() + " " + $("#width-unit").val();
     var minH = $("#cloth-height").val() + " " + $("#height-unit").val();
     $("#summary-modal-blinds").val(summary.blinds);
     $("#summary-modal-fabric").val(summary.fabric);
     $("#summary-modal-size").val(minW + " x " + minH);
     $("#summary-modal-quantity").val($("#summary-quantity").val());
     $("#summary-modal-image").attr("src", preview);

   });

   $("#confirmModal").on("show.bs.modal", function (event) {
     var target = $(event.delegateTarget);
     var category = target.html();
   });

   $("#blindImageType").on("show.bs.modal", function (event) {
     var button = $(event.relatedTarget);
     var content = button.parent().parent().children(':first-child').html();

     var type = button.siblings("h5").html();
     var description = button.siblings("p").html();
     var modal = $(this);
     modal.find('.modal-body .carousel-inner').html(content);
     modal.find("#modal-blinds-type").html(type);
     modal.find("#modal-blinds-description").html(description);

     modal.find("#modal-min-width").html();
     modal.find("#modal-min-height").html();
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
     }
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

   var lastWidthValue = $("#width-unit").val();

   $("#width-unit").change(function (e) {
     var wid = $("#cloth-width").val();
     var minVal = $("#cloth-width").attr('min');
     var min = $("#cloth-width").attr('min', convertUnit(minVal, lastWidthValue, $("#width-unit").val()).toFixed(2));
     $("#cloth-width").val(convertUnit(wid, lastWidthValue, $("#width-unit").val()).toFixed(2));
     lastWidthValue = $("#width-unit").val();

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
       originX: 'center',
       originY: 'center',
       clipName: 'clipObj',
       clipTo: function (ctx) {
         return _.bind(clipByName, img)(ctx)
       }
     });
     canvas.centerObject(img);
     canvas.fxAdd(img);
     sendClothToBack();

   });
 }

 function changeFabric(type, name, code, e) {
   e = e || window.event;
   e = e.target || e.srcElement;
   if (e.nodeName === 'BUTTON') {
     var sibling = e.parentElement.parentElement.parentElement.children;
     var siblingLength = sibling.length;
     for (i = 0; i < siblingLength; i++) {
       if (sibling[i].classList.contains('border-primary')) {
         sibling[i].classList.remove('border-primary');
       }
     }
     e.parentElement.parentElement.classList.add('border-primary');
   }
   summary.fabric = name;
   summary.fabricCode = code;
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
       if (eval(split[1]) % 2 == 1 && eval(split[1] < 13)) {
         obj.bringToFront();
       } else {
         obj.sendToBack();
       }
     }
   });
 }
 // NOTE CHANGESHADES
 function changeShades(type, blindsCode, fabricName, fabricImg, fabricCode, e) {
   e = e || window.event;
   e = e.target || e.srcElement;
   if (e.nodeName === 'IMG') {
     var parent = e.parentElement.parentElement.parentElement.parentElement;
     var sibling = parent.parentElement.children;
     var siblingLength = sibling.length;
     for (i = 0; i < siblingLength; i++) {
       if (sibling[i].classList.contains('border-primary')) {
         sibling[i].classList.remove('border-primary');
       }
     }
     parent.classList.add('border-primary');
   }
   summary.blinds = type;
   summary.blindsCode = blindsCode;
   summary.fabric = fabricName;
   fabricType = fabricImg;
   summary.fabricCode = fabricCode;
   if (canvas.getObjects().length == 0) {
     if (type == "Roller Shades") {
       $("#btnPreview").removeClass("d-none");
       loadRoller();
     } else if (type == "Combi Blinds") {
       $("#btnPreview").removeClass("d-none");
       canvas.preserveObjectStacking = false;
       loadCombi(fabricType, 'white')
     }
     canvas.renderAll();
   } else {
     $("#confirmModal").modal('show');
   }
   sendClothToBack();
 }

 function modalChangeShades() {
   removeCloth();
   changeShades(summary.blinds, summary.blindsCode, summary.fabric, fabricType, summary.fabricCode)
 }

 function loadRoller() {
   canvas.add(clipRect1);
   roller.set({
     id: "cloth",
     left: 90,
     originX: 'center',
     originY: 'center',
     clipName: 'clipObj',
     clipTo: function (ctx) {
       return _.bind(clipByName, roller)(ctx)
     }
   })
   canvas.add(roller)
   loadPattern(fabricType, roller, "white");
 }

 function removeCloth() {
   // FUTURE [x] SET SUMMARY.BLINDS = NULL
   canvas.clear();
   canvas.setOverlayImage(overlayImage,
     canvas.renderAll.bind(canvas), {
       scaleX: 1,
       scaleY: 1,
     });

   canvas.setBackgroundImage(backgroundImage, canvas.renderAll.bind(canvas));
   $("#btn-reset").popover('hide')
 }

 function loadCombi(fabricType, color) {
   canvas.add(clipRect1);
   var ctr = 0;
   for (var i = 0; i < 13; i++) {
     var object = fabric.util.object.clone(combi);
     object.set({
       "id": 'cloth-' + i,
       "top": (object.top + ctr),
       "opacity": (i % 2 == 0) ? 1 : 0.7,
       "left": 80,
     });
     ctr += object.height;
     canvas.add(object);
     if (i % 2 == 0) {
       loadPattern(translucent, object, color);
     } else {
       loadPattern(fabricType, object, color);
     }
   }
   // FIXME COMBI BLINDS BACK FABRIC
   ctr = 0;
   for (var i = 13; i < 26; i++) {
     var object = fabric.util.object.clone(combi);
     object.set({
       "id": 'cloth-' + i + '-back',
       "top": (object.top + ctr),
       "opacity": (i % 2 == 0) ? 1 : 0.7,
       "left": 80,
     });
     ctr += object.height;
     canvas.add(object);
     if (i % 2 == 0) {
       loadPattern(fabricType, object, "white");
     } else {
       loadPattern(translucent, object, "white");
     }
   }

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
           loadPattern(url, obj, color);
         } else {
           loadPattern(translucent, obj, color);
         }
       }
     });
   }
 }

 function loadPattern(url, object, color) {
   fabric.Image.fromURL(url, function (img) {
     img.scaleToWidth(100);
     var patternSourceCanvas = new fabric.StaticCanvas();
     var pattern = patternSourceCanvas.getElement();
     object.set({
       'fill': new fabric.Pattern({
         source: function () {
           patternSourceCanvas.setDimensions({
             width: 50,
             height: 50
           });
           patternSourceCanvas.renderAll();
           return patternSourceCanvas.getElement();
         },
         repeat: 'repeat',
       }),
       'stroke': new fabric.Pattern({
         source: function () {
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



 function convertToPixel(value, unit) {
   return (convertUnit(value, unit, "cm") * 37.795275591) / 10;
 }

 function convertUnit(value, unitFrom, unitTo) {
   var centimeterTo = {
     "cm": 1,
     "inch": 0.39370078740157,
     "ft": 0.032808398950131,
     "m": 0.01,
     "yd": 0.010936132983377,
   };
   var inchesTo = {
     "cm": 2.54,
     "inch": 1,
     "ft": 0.083333333333333,
     "m": 0.0254,
     "yd": 0.027777777777778
   };
   var meterTo = {
     "cm": 100,
     "inch": 39.370078740157,
     "m": 1,
     "ft": 3.2808398950131,
     "yd": 1.0936132983377
   }
   var feetTo = {
     "cm": 30.48,
     "inch": 12,
     "m": 0.3048,
     "ft": 1,
     "yd": 0.33333333333333
   };
   var yardTo = {
     "cm": 91.44,
     "inch": 36,
     "m": 0.9144,
     "ft": 36,
     "yd": 1
   };
   var converted = 0;
   if (unitFrom == "cm") {
     converted = value * centimeterTo[unitTo];
   } else if (unitFrom == "inch") {
     converted = value * inchesTo[unitTo];
   } else if (unitFrom == "m") {
     converted = value * meterTo[unitTo];
   } else if (unitFrom == "ft") {
     converted = value * feetTo[unitTo];
   } else if (unitFrom == "yd") {
     converted = value * yardTo[unitTo];
   }
   return converted;
 }

 function order() {
   // FUTURE SAVE TEMPLATE TO JSON
   msg("Blinds ID: " + summary.blindsCode);
   msg("Fabric ID: " + summary.fabricCode);
   msg("isCustomize");
   msg("Quantity: " + $("#summary-quantity").val());
   msg("Width: " + convertUnit($("#cloth-width").val(), $("#width-unit").val(), "cm").toFixed());
   msg("Height: " + convertUnit($("#cloth-height").val(), $("#height-unit").val(), "cm").toFixed());
   msg("Date now: " + $.now());
   var preview = canvas.toDataURL('jpg');
   msg("Preview: " + preview);
 }

 function step1() {
   $("#colorForFabric").append($("#inputFillColor").parent())
   canvas.getObjects().forEach(function (obj) {
     obj.set({
       selectable: true
     });
   });
 }

 function step2() {
   $("#colorForFabric").append($("#inputFillColor").parent())
   canvas.getObjects().forEach(function (obj) {
     if (~obj.id.indexOf("cloth")) {
       obj.set({
         selectable: true
       });
       msg(obj.id)
     }
   });
 }

 function step3() {
   $("#colorForObject").append($("#inputFillColor").parent());
 }

 function step4() {
   $("#colorForFabric").append($("#inputFillColor").parent())
   canvas.getObjects().forEach(function (obj) {
     canvas.discardActiveObject();
     if (~obj.id.indexOf("cloth")) {
       obj.set({
         selectable: false
       });
     }
   });
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



 // TODO [x]COPY AND PASTE DI KAYA

 // TODO PREVIEW
 var flag = true;
 var objTop = [];

 function preview() {
   $("#btnPreview").tooltip('hide')
   canvas.discardActiveObject();
   $("#btnPreview").prop("disabled", true);
   allObjLen = canvas.getObjects().length;
   if (flag) {
     var isRoller = false;
     for (var i = 0; i < allObjLen; i++) {
       var obj = canvas.getObjects()[i];
       if (~obj.id.indexOf("back")) {
         isRoller = true;
         msg(obj.id)
         objTop.push(obj.top)
         obj.animate('top', obj.top - 40, {
           duration: 3000,
           onChange: canvas.renderAll.bind(canvas),
           onComplete: function () {
             flag = false;
             $("#btnPreview").prop("disabled", false);
           },
           easing: fabric.util.ease.easeOutQuad,
         });
         obj.set({
           selectable: false,
         });
       } else {
         if (isRoller) {
           objTop.push(obj.top)
           obj.animate('top', obj.top + 20, {
             duration: 3000,
             onChange: canvas.renderAll.bind(canvas),
             onComplete: function () {
               flag = false;
               $("#btnPreview").prop("disabled", false);
             },
             easing: fabric.util.ease.easeOutQuad,
           });
           obj.set({
             selectable: false,
           });
         } else {
           objTop.push(obj.top)
           obj.animate('top', obj.top - 240, {
             duration: 3000,
             onChange: canvas.renderAll.bind(canvas),
             onComplete: function () {
               flag = false;
               $("#btnPreview").prop("disabled", false);
             },
             easing: fabric.util.ease.easeOutQuad,
           });
           obj.set({
             selectable: false,
           });
         }
       }
     }
   } else {
     for (var i = 0; i < allObjLen; i++) {
       var obj = canvas.getObjects()[i];
       obj.animate('top', objTop[i], {
         duration: 3000,
         onChange: canvas.renderAll.bind(canvas),
         onComplete: function () {
           flag = true;
           objTop = [];
           $("#btnPreview").prop("disabled", false);
         },
         easing: fabric.util.ease.easeOutQuad,
       });
       if (obj.id.indexOf("cloth")) {
         obj.set({
           selectable: true
         });
       }
       if (~obj.id.indexOf("clip")) {
         obj.set({
           selectable: false
         })
       }
     }
   }
 }

 function resetCanvas() {
   removeCloth();
   summary.blinds = "";
   summary.blindsCode = "";
   summary.fabric = "";
   summary.fabricCode = "";
   objTop = [];
   flag = true;
   $("#btn-reset").addClass("d-none");
 }
 var tempBg = window.backgroundImage,
   tempOver = window.overlayImage;

 function changeOverlay(img, e) {
   e = e || window.event;
   e = e.target || e.srcElement;
   if (e.nodeName === 'IMG') {
     var parent = e.parentElement;
     var sibling = parent.parentElement.children;
     var siblingLength = sibling.length;
     for (i = 0; i < siblingLength; i++) {
       if (sibling[i].classList.contains('border-primary')) {
         sibling[i].classList.remove('border-primary');
         sibling[i].classList.remove('p-1');
       }
     }
     parent.classList.add('border-primary');
     parent.classList.add('p-1');
   }
   tempOver = img;
 }

 function changeBackground(img, e) {
   e = e || window.event;
   e = e.target || e.srcElement;
   if (e.nodeName === 'IMG') {
     var parent = e.parentElement;
     var sibling = parent.parentElement.children;
     var siblingLength = sibling.length;
     for (i = 0; i < siblingLength; i++) {
       if (sibling[i].classList.contains('border-primary')) {
         sibling[i].classList.remove('border-primary');
         sibling[i].classList.remove('p-1');
       }
     }
     parent.classList.add('border-primary');
     parent.classList.add('p-1');
   }
   tempBg = img;
 }

 function saveChanges() {
   window.overlayImage = tempOver;
   canvas.setOverlayImage(window.overlayImage,
     canvas.renderAll.bind(canvas), {
       scaleX: 1,
       scaleY: 1,
     });
   window.backgroundImage = tempBg;
   canvas.setBackgroundImage(window.backgroundImage, canvas.renderAll.bind(canvas));
 }

 function findByClipName(name) {
   return _(canvas.getObjects()).where({
     clipFor: name
   }).first()
 }

 function degToRad(degrees) {
   return degrees * (Math.PI / 180);
 }

 var clipByName = function (ctx) {
   var clipRect = findByClipName(this.clipName);
   var scaleXTo1 = (1 / this.scaleX);
   var scaleYTo1 = (1 / this.scaleY);
   ctx.save();
   ctx.translate(0, 0);
   if (this.getFlipY() && !this.getFlipX()) {
     ctx.scale(scaleXTo1, -scaleYTo1);
   } else if (this.getFlipX() && !this.getFlipY()) {
     ctx.scale(-scaleXTo1, scaleYTo1);
   } else if (this.getFlipX() && this.getFlipY()) {
     ctx.scale(-scaleXTo1, -scaleYTo1);
   } else {
     ctx.scale(scaleXTo1, scaleYTo1);
   }
   ctx.rotate(degToRad(this.angle * -1));
   ctx.beginPath();
   ctx.rect(
     clipRect.left - this.left,
     clipRect.top - this.top,
     clipRect.width,
     clipRect.height
   );
   ctx.closePath();
   ctx.restore();
 }
 // TODO UNLOCK CLOTH IN STEP 2

 function msg(content) {
   console.log(content);
 }

document.getElementById('shareToFacebook').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://developers.facebook.com/docs/',
  }, function(response){});
}
