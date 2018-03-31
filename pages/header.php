    
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../pages/home.php">Adam <i class="text-danger">A</i><i class="text-warning">r</i><i class="text-primary">c</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="navbar-collapse collapse justify-content-end" id="collapsingNavbar">
        <ul class="navbar-nav">
          <li class="nav-item pr-4">
            <a class="nav-link" href="home.php" id = "aHome">Home <span class="sr-only">Home</span></a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="customization.php" id = "aCustomize">Customize</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="catalogue.php" id = "aCatalogue">Catalogue</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="gallery.php" id = "aGallery">Gallery</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="about.php" id = "aAbout">About</a>
          </li>
          <li class="nav-item pr-4">
            <div class="dropdown">
              <button id="login" class="btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><?php echo $current_user;?></button>
              
                
              
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="login" id = "divLoginPane">
               <?php include("loginPane.php");?>
              </div>
        
            </div>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>