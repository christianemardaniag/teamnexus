<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Gallery - Adam Arc Blinds and Decor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
    <div class="d-flex w-100">
      <a class="navbar-brand" href="#">Adam Arc</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item pr-4">
          <a class="nav-link" href="home.php">Home <span class="sr-only">Home</span></a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="customization.php">Customize</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="catalogue.php">Catalogue</a>
        </li>
        <li class="nav-item pr-4 active">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item pr-4">
          <div class="dropdown">
            <button id="login" class="btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">Login</button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="login">
                <form class="px-4 py-3">
                  <div class="form-group">
                    <label for="loginEmailAddress">Email address</label>
                    <input type="email" class="form-control" id="loginEmailAddress" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-warning btn-block">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New around here? <span class="text-info">Sign up</span></a>
                <a class="dropdown-item" href="#">Forgot password?</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

<div class="container">
  
  <h1 class="display-2 text-center">Gallery</h1>
</div>



  <?php include("../include/footer.php"); ?>
</body>

</html>
