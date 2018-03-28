<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <style>
    body {
      font-family: Monospace;
      background-color: #f0f0f0;
      margin: 0px;
      overflow: hidden;
    }

  </style>
</head>

<body>
  <script type="text/javascript" src="../js/three.js"></script>
  <script type="text/javascript" src="../js/Projector.js"></script>
  <script type="text/javascript" src="../js/CanvasRenderer.js"></script>
  <script type="text/javascript" src="../js/stats.min.js"></script>
  <video id="video" autoplay loop crossOrigin="anonymous" webkit-playsinline style="display:none" width="320" height="240">
			<source src="../Nexus%20Teaser.MP4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
		</video>
  <script>
    var AMOUNT = 100;
    var container, stats;
    var camera, scene, renderer;
    var video, image, imageContext,
      imageReflection, imageReflectionContext, imageReflectionGradient,
      texture, textureReflection;
    var mesh;
    var mouseX = 0;
    var mouseY = 0;
    var windowHalfX = window.innerWidth / 2;
    var windowHalfY = window.innerHeight / 2;
    init();
    animate();

    function init() {
      container = document.createElement('div');
      document.body.appendChild(container);
      camera = new THREE.PerspectiveCamera(25, window.innerWidth / window.innerHeight, 1, 10000);
      camera.position.z = 1000;
      scene = new THREE.Scene();
      scene.background = new THREE.Color(0xf0f0f0);
      video = document.getElementById('video');
      //
      image = document.createElement('canvas');
//      image.width = 480;
//      image.height = 204;
      image.width = 1250;
      image.height = 720;
      imageContext = image.getContext('2d');
      imageContext.fillStyle = '#000000';
      imageContext.fillRect(0, 0, 1250, 720);
      texture = new THREE.Texture(image);
      var material = new THREE.MeshBasicMaterial({
        map: texture,
        overdraw: 0.5
      });
      imageReflection = document.createElement('canvas');
      imageReflection.width = 1250;
      imageReflection.height = 720;

      imageReflectionContext = imageReflection.getContext('2d');
      imageReflectionContext.fillStyle = '#000000';
      imageReflectionContext.fillRect(0, 0, 1250, 720);

      imageReflectionGradient = imageReflectionContext.createLinearGradient(0, 0, 0, 204);
      imageReflectionGradient.addColorStop(0.2, 'rgba(240, 240, 240, 1)');
      imageReflectionGradient.addColorStop(1, 'rgba(240, 240, 240, 0.8)');
      textureReflection = new THREE.Texture(imageReflection);
      var materialReflection = new THREE.MeshBasicMaterial({
        map: textureReflection,
        side: THREE.BackSide,
        overdraw: 0.5
      });
      //
      var plane = new THREE.PlaneGeometry(480, 204, 4, 4);
      mesh = new THREE.Mesh(plane, material);
      mesh.scale.x = mesh.scale.y = mesh.scale.z = 1.5;
      scene.add(mesh);
      mesh = new THREE.Mesh(plane, materialReflection);
      mesh.position.y = -306;
      mesh.rotation.x = -Math.PI;
      mesh.scale.x = mesh.scale.y = mesh.scale.z = 1.5;
      scene.add(mesh);
      //
      var separation = 150;
      var amountx = 10;
      var amounty = 10;
      var PI2 = Math.PI * 2;
      var material = new THREE.SpriteCanvasMaterial({
        color: 0x0808080,
        program: function(context) {
          context.beginPath();
          context.arc(0, 0, 0.5, 0, PI2, true);
          context.fill();
        }
      });
      for (var ix = 0; ix < amountx; ix++) {
        for (var iy = 0; iy < amounty; iy++) {
          var sprite = new THREE.Sprite(material);
          sprite.position.x = ix * separation - ((amountx * separation) / 2);
          sprite.position.y = -153;
          sprite.position.z = iy * separation - ((amounty * separation) / 2);
          sprite.scale.setScalar(2);
          scene.add(sprite);
        }
      }
      renderer = new THREE.CanvasRenderer();
      renderer.setPixelRatio(window.devicePixelRatio);
      renderer.setSize(window.innerWidth, window.innerHeight);
      container.appendChild(renderer.domElement);
      stats = new Stats();
      document.addEventListener('mousemove', onDocumentMouseMove, false);
      //
      window.addEventListener('resize', onWindowResize, false);
    }

    function onWindowResize() {
      windowHalfX = window.innerWidth / 2;
      windowHalfY = window.innerHeight / 2;
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    }

    function onDocumentMouseMove(event) {
      mouseX = (event.clientX - windowHalfX);
      mouseY = (event.clientY - windowHalfY) * 0.2;
    }
    //
    function animate() {
      requestAnimationFrame(animate);
      render();
      stats.update();
    }

    function render() {
      camera.position.x += (mouseX - camera.position.x) * 0.05;
      camera.position.y += (-mouseY - camera.position.y) * 0.05;
      camera.lookAt(scene.position);
      if (video.readyState === video.HAVE_ENOUGH_DATA) {
        imageContext.drawImage(video, 0, 0);
        if (texture) texture.needsUpdate = true;
        if (textureReflection) textureReflection.needsUpdate = true;
      }
      imageReflectionContext.drawImage(image, 0, 0);
      imageReflectionContext.fillStyle = imageReflectionGradient;
      imageReflectionContext.fillRect(0, 0, 1250, 720);
      renderer.render(scene, camera);
    }

  </script>
</body>

</html>
