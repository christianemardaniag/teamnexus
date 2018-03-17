<div class="jumbotron bg-dark mt-5 mb-0" style="border-radius: 0;">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 text-center text-light">
      <h3>Adam Arc</h3>
      <h5>Blinds and Decor</h5>
      <p class="text-muted font-italic">We supply, customize and install premium quality of window blinds from Korea.</p>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 text-center text-xl-left text-lg-left">
      <h5 class="text-light">Contact us</h5>
      <h6 class="text-light">Contact Number : <span class="font-weight-normal">+63 917 5816868</span></h6>
      <h6 class="text-light">Email Address : <a href="mailto:adamarc_bd@yahoo.com" class="text-info">adamarc_bd@yahoo.com</a></h6>
      <button class="btn btn-sm btn-outline-warning" type="button" onclick="window.open('about.php#feedback-page', '_self')"><span class="fa fa-comments"></span> Send Feedback</button>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-light">
      <div class="row">
        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 text-center text-xl-left text-lg-left">
          <h5>Visit us</h5>
          <p><span class="fa fa-map-marker"></span> Unit 3 VCA Commercial Bldg. McArthur Hi-way, San Pablo Malolos, Bulacan, Philippines</p>
        </div>
        <div id="map" class="col-xl-5 col-lg-5 col-md-6 w-100" style="width:150px;height:150px;background-color:#333;"></div>
      </div>
    </div>
  </div>
  <hr>
  <p class="text-center text-light my-0">&copy; 2018 <a href="#" class="text-warning font-weight-bold">Team Nexus</a> - All Right Reserved</p>

</div>
<script>
  function myMap() {
    var myCenter = new google.maps.LatLng(14.842891, 120.843160);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
      center: myCenter,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoom: 11
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
      position: myCenter,
      animation: google.maps.Animation.BOUNCE
    });
    marker.setMap(map);

  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrEPqVX5l9VGkb8ZP96wWjKTwWLRsRREs&callback=myMap"></script>
