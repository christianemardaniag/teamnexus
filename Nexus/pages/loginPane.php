<?php
  
  
  if (isset($_SESSION["current_user"]))
  {
?>
  <a class="dropdown-item" href="viewProfile.php">View Profile</a>
  <a class="dropdown-item" href="logout.php">Logout</a>
  <?php  
  }
else
{
 ?>
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="loginEmailAddress">Email address</label>
      <input type="email" class="form-control" id="loginEmailAddress" placeholder="Email Address">
    </div>
    <div class="form-group">
      <label for="loginPassword">Password</label>
      <input type="password" class="form-control" id="loginPassword" placeholder="Password">
    </div>
    <button type="button" class="btn btn-warning btn-block" id="btnSignIn">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="signup.php">New around here? <span class="text-info">Sign up</span></a>
  <a class="dropdown-item" href="#">Forgot password?</a>
  <?php
}

?>
