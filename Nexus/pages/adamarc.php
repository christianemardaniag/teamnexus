<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <style>
    body {
      color: #ffffff;
      font-family: Monospace;
      font-size: 13px;
      text-align: center;
      font-weight: bold;
      background-color: #000000;
      margin: 0px;
      overflow: hidden;
    }
    #info {
      color: #fff;
      position: absolute;
      top: 0px;
      width: 100%;
      padding: 5px;
      z-index: 100;
    }
    a {
      color: red
    }
  </style>
</head>
<body>
  <div id="adamarc" style="cursor: pointer;"></div>
  <script type="text/javascript" src="../js/three.js"></script>
  <script type="text/javascript" src="../js/TrackballControls.js"></script>
  <script type="text/javascript" src="../js/ExplodeModifier.js"></script>
  <script type="text/javascript" src="../js/TessellateModifier.js"></script>
  <script type="text/javascript" src="../js/Detector.js"></script>
  <script type="text/javascript" src="../js/stats.min.js"></script>
  <script type="x-shader/x-vertex" id="vertexshader">
    uniform float amplitude; attribute vec3 customColor; attribute vec3 displacement; varying vec3 vNormal; varying vec3 vColor; void main() { vNormal = normal; vColor = customColor; vec3 newPosition = position + normal * amplitude * displacement; gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 ); }
  </script>
  <script type="x-shader/x-fragment" id="fragmentshader">
    varying vec3 vNormal; varying vec3 vColor; void main() { const float ambient = 0.4; vec3 light = vec3( 1.0 ); light = normalize( light ); float directional = max( dot( vNormal, light ), 0.0 ); gl_FragColor = vec4( ( directional + ambient ) * vColor, 1.0 ); }
  </script>
  <script>
    if (!Detector.webgl) Detector.addGetWebGLMessage();
    var renderer, scene, camera, stats;
    var mesh, uniforms;
    var WIDTH = window.innerWidth,
      HEIGHT = window.innerHeight;
    var loader = new THREE.FontLoader();
    loader.load('../helvetiker_bold.typeface.json', function(font) {
      init(font);
      animate();
    });
    function init(font) {
      camera = new THREE.PerspectiveCamera(40, WIDTH / HEIGHT, 1, 10000);
      camera.position.set(10, -1, 220);
      controls = new THREE.TrackballControls(camera);
      scene = new THREE.Scene();
      scene.background = new THREE.Color("#343A40");
      var geometry = new THREE.TextGeometry("ADAM ARC", {
        font: font,
        size: 40,
        height: 5,
        curveSegments: 3,
        bevelThickness: 2,
        bevelSize: 1,
        bevelEnabled: true
      });
      geometry.center();
      var tessellateModifier = new THREE.TessellateModifier(8);
      for (var i = 0; i < 6; i++) {
        tessellateModifier.modify(geometry);
      }
      var explodeModifier = new THREE.ExplodeModifier();
      explodeModifier.modify(geometry);
      var numFaces = geometry.faces.length;
      geometry = new THREE.BufferGeometry().fromGeometry(geometry);
      var colors = new Float32Array(numFaces * 3 * 3);
      var displacement = new Float32Array(numFaces * 3 * 3);
      var color = new THREE.Color();
      for (var f = 0; f < numFaces; f++) {
        var index = 9 * f;
        var h = 0.2 * Math.random();
        var s = 0.5 + 0.5 * Math.random();
        var l = 0.5 + 0.5 * Math.random();
        color.setHSL(h, s, l);
        var d = 10 * (0.5 - Math.random());
        for (var i = 0; i < 3; i++) {
          colors[index + (3 * i)] = color.r;
          colors[index + (3 * i) + 1] = color.g;
          colors[index + (3 * i) + 2] = color.b;
          displacement[index + (3 * i)] = d;
          displacement[index + (3 * i) + 1] = d;
          displacement[index + (3 * i) + 2] = d;
        }
      }
      geometry.addAttribute('customColor', new THREE.BufferAttribute(colors, 3));
      geometry.addAttribute('displacement', new THREE.BufferAttribute(displacement, 3));
      uniforms = {
        amplitude: {
          value: 0.0
        }
      };
      var shaderMaterial = new THREE.ShaderMaterial({
        uniforms: uniforms,
        vertexShader: document.getElementById('vertexshader').textContent,
        fragmentShader: document.getElementById('fragmentshader').textContent
      });
      mesh = new THREE.Mesh(geometry, shaderMaterial);
      scene.add(mesh);
      renderer = new THREE.WebGLRenderer({
        antialias: true
      });
      renderer.setPixelRatio(window.devicePixelRatio);
      renderer.setSize(WIDTH, HEIGHT);
      var adamarc = document.getElementById('adamarc');
      adamarc.appendChild(renderer.domElement);
      stats = new Stats();
      window.addEventListener('resize', onWindowResize, false);
    }
    function onWindowResize() {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    }
    function animate() {
      requestAnimationFrame(animate);
      render();
      stats.update();
    }
    function render() {
      var time = Date.now() * 0.001;
      uniforms.amplitude.value = 1.0 + Math.sin(time * 0.5);
      controls.update();
      renderer.render(scene, camera);
    }
  </script>
</body>
</html>