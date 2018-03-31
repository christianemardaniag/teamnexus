<nav class="navbar navbar-expand-lg bg-nav fixed-top" id="mainNav">
  <a class="navbar-brand text-light" href="#">
    <h4>ADAM <i class="text-danger">A</i><i class="text-warning">R</i><i class="text-primary">C</i> Blinds and Decors</h4>
  </a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav bg-nav" id="exampleAccordion">
      <li class="nav-item mt-4 bg-nav" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-tachometer-alt text-light"></i>
            <span class="nav-link-text text-light">Dashboard</span>
          </a>
      </li>
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Blinds">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                      <i class="fa fa-fw fa-th-large text-light"></i>
                      <span class="nav-link-text text-light">Blinds</span>
                    </a>

        <!--                    dropdown-->
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="blinds.php" class="small text-light">Blinds</a>
          </li>
          <li>
            <a href="blindsCategory.php" class="small text-light">Add Blinds Category</a>
          </li>
          <li>
            <a href="fabric.php" class="small text-light">Fabric</a>
          </li>
          <li>
            <a href="template.php" class="small text-light">Add Template</a>
          </li>

        </ul>
      </li>




      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Orders">
        <a class="nav-link" href="orders.php">
            <i class="fa fa-fw fa-clipboard text-light"></i>
            <span class="nav-link-text text-light">Orders</span>
          </a>
      </li>
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Gallery">
        <a class="nav-link" href="gallery.php">
            <i class="fa fa-fw fa-images text-light"></i>
            <span class="nav-link-text text-light">Gallery</span>
          </a>
      </li>
      <!--
            <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Customization">
                <a class="nav-link" href="customization.php">
            <i class="fas fa-fw fa-expand text-light"></i>
            <span class="nav-link-text text-light">Customization</span>
          </a>
            </li>
-->
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Visitations">
        <a class="nav-link" href="visitations.php">
            <i class="fa fa-fw fa-calendar text-light"></i>
            <span class="nav-link-text text-light">Visitations</span>
          </a>
      </li>
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Feedbacks">
        <a class="nav-link" href="feedback.php">
            <i class="fa fa-fw fa-comments text-light"></i>
            <span class="nav-link-text text-light">Feedbacks</span>
          </a>
      </li>
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Users Accounts">
        <a class="nav-link" href="accounts.php">
            <i class="fa fa-fw fa-users text-light"></i>
            <span class="nav-link-text text-light">Users Accounts</span>
          </a>
      </li>
      <li class="nav-item bg-nav" data-toggle="tooltip" data-placement="right" title="Reports">
        <a class="nav-link" href="reports.php">
            <i class="fa fa-fw fa-chart-line text-light"></i>
            <span class="nav-link-text text-light">Reports</span>
          </a>
      </li>

    </ul>
    <ul class="navbar-nav sidenav-toggler bg-nav">
      <li class="nav-item bg-nav">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto sticky-top">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope text-light"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">Orders Notifications:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all messages</a>
        </div>
      </li>
      <!--        -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell text-light"></i>
            <span class="d-lg-none">Visitations Alerts:
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">New Alerts:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all alerts</a>
        </div>
      </li>
      <!--        user accounts-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user text-light"></i>
           
          </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">Admin Profile</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
              <i class="fas fa-edit mr-1"></i>Edit Profile
            </a>


          <div class="dropdown-divider"></div>
          <div class="dropdown-footer float-right"><a class="dropdown-item text-danger" href="logoutAdmin.php">Logout</a></div>
        </div>
      </li>
    </ul>
  </div>

</nav>
