<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <!--    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">
            <image src="images/thumnail-logo.png" class="img-fluid" alt="Adam Arc" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blinds">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-th-large"></i>
            <span class="nav-link-text">Blinds</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text">Orders</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gallery">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-images"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customization">
                    <a class="nav-link" href="#">
            <i class="fas fa-fw fa-expand"></i>
            <span class="nav-link-text">Customization</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Visitations">
                    <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Visitations</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Feedbacks">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Feedbacks</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users Accounts">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users Accounts</span>
          </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
                    <a class="nav-link" href="#">
            <i class="fa fa-fw fa-chart-line"></i>
            <span class="nav-link-text">Reports</span>
          </a>
                </li>

            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
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
            <i class="fa fa-fw fa-bell"></i>
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
            <i class="fa fa-fw fa-user"></i>
           
          </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">Admin Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
              <i class="fas fa-edit mr-1"></i>Edit Profile
            </a>


                        <div class="dropdown-divider"></div>
                        <div class="dropdown-footer float-right"><a class="dropdown-item text-danger" href="#">Logout</a></div>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
    <div class="content-wrapper">
        <div class="container-fluid mt-5">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-6"><i class="fa fa-table"></i> Orders</div>
                </div>
                <div class="offset-10 mt-1 position-absolute"><button class="btn btn-primary filter_inset filter" data-toggle="modal" data-target=".bd-addOrder-modal-lg"><i class="fas fa-plus"></i> Add New Orders</button></div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th>Blinds Image</th>
                                    <th>Blinds Name</th>
                                    <th>Blinds Type</th>
                                    <th>Customer's Name</th>
                                    <th>Date Ordered</th>
                                    <th>Order Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>

                                    <th>Blinds Image</th>
                                    <th>Blinds Name</th>
                                    <th>Blinds Type</th>
                                    <th>Customer's Name</th>
                                    <th>Date Ordered</th>
                                    <th>Order Status</th>
                                    <th>Actions</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <image src="images/resize_Roller-Banbury-Oatmeal.jpg" class="img-thumbnail img-thumbnail-table" id="view-Thumbnail" />
                                    </td>
                                    <td>aGreek Style</td>
                                    <td>Roller Blinds</td>
                                    <td>Michael Jordan</td>
                                    <td>January 20, 2018</td>
                                    <td>Pending</td>
                                    <td class="text-center"><a href="#" id="dropdownMenuButton16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;<i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-primary filter_inset" data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-eye"></i> View</a>
                                            <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i>Mark as unview</a>

                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <!--            img modal-->
            <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <img src="" class="enlargeImageModalSource" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>


            <!--            end table-->
            <!-- ADD NEW ORDER -->
            <!--                choose blinds-->
            <div class="modal bd-addOrder-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choose Blinds (Walk-ins)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                <div style="overflow-x:hidden">
                                    <div class="row ml-4 mb-4">
                                        <div class="col-7">

                                            <div class="input-group form-inline">
                                                <label for="" class="form-control modalViewNear">Choose Category:</label>
                                                <select class="form-control bg-light modalViewNear" id="blindCategory">
                                                    
                                                    <option>Roller Shade</option>
                                                    <option>Combi Shade</option>
                                                    <option>Triple Shade</option>
                                                    <option>Vertical / Sheer Blind</option>
                                                    <option>Sunscreen</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row ml-4 mr-4" id="fabricDiv">

                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox1" />
                                            <label for="myCheckbox1">
                                              <img src="images/Benefits-of-Roller-Blinds-480x480.jpg" class="img-thumbnail float-left" id="fabricImg1">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox2" />
                                            <label for="myCheckbox2">
                                              <img src="images/CombiBlinds.jpg" class="img-thumbnail float-left" id="fabricImg2">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox3" />
                                            <label for="myCheckbox3">
                                              <img src="images/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg" class="img-thumbnail float-left" id="fabricImg3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderFabric" id="nextButton">Next <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--            choose fabric-->
            <div class="modal bd-addOrderFabric-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choose Fabric (Walk-ins)</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                <div style="overflow-x:hidden">

                                    <div class="row ml-4 mr-4" id="fabricDiv">

                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox1" />
                                            <label for="myCheckbox1">
                                              <img src="images/fabric-1.jpg" class="img-thumbnail float-left" id="fabricImg1">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox2" />
                                            <label for="myCheckbox2">
                                              <img src="images/fabric-1.jpg" class="img-thumbnail float-left" id="fabricImg2">
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2">
                                            <input type="checkbox" id="myCheckbox3" />
                                            <label for="myCheckbox3">
                                              <img src="images/fabric-1.jpg" class="img-thumbnail float-left" id="fabricImg3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-toggle="modal" data-target=".bd-addOrderVisit-modal-lg" id="nextButton2">Next <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--            visitation-->
            <div class="modal bd-addOrderVisit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Schedule a Visitation Date</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body" style="min-height: calc(100vh - 210px); overflow-y: auto; max-height: 500px" id="modal-fabric">
                            <div class="row">
                                CALENDAR
                            </div>
                            <div class="row mt-6 ml-4">
                                <div class="col-6">
                                    <label for="name">Name: </label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-8">
                                    <label for="address">Full Address: </label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="col-5">
                                    <label for="contact">Phone Number: </label>
                                    <input type="text" class="form-control" name="contact">

                                </div>

                            </div>



                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" class="close" data-dismiss="modal" aria-label="Close">Done <i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!--END ADD ORDER-->

            <!-- MODAL INFORMATION-->


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Order Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-xl-6">
                                    <!-- Customer's info-->

                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Customer's Information</label>

                                        </div>

                                        <div class="col-5">
                                            <label>Name:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>Melchora Aquino</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Address:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>Cavite</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Phone Number:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>0912390122</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Email Address:</label>
                                        </div>
                                        <div class="col-7">
                                            <label>melchora_kkk@gmail.com</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--Blinds information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Blind's Information</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Type of Blind:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Roller Blinds</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Fabric Type:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Pattern</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Size:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Medium</label>

                                        </div>
                                        <div class="col-5">
                                            <label>Color (Hex):</label>
                                        </div>
                                        <div class="col-7">
                                            <div style="width:10px; height:10px; min-height: 100%; position: fixed"><i style="color:#5e6c86;" class="fa fa-square"></i></div><label style="margin-left:18px">#5e6c86</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <!--Schedule information-->
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="lead">Visitation Information</label>
                                        </div>
                                        <div class="col-5">
                                            <label>Visitation Date:</label>

                                        </div>
                                        <div class="col-7">

                                            <input type="date" value="2011-08-19" id="changeDate" class="form-control" disabled>
                                            <button class="btn btn-default" id="change">Change</button>
                                        </div>
                                        <div class="col-5">
                                            <label>Visitation Address:</label>

                                        </div>
                                        <div class="col-7">
                                            <label>Batangas City, Batangas</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col">
                                            <image src="images/resize_LL_Roller_Bronze_Cass_Collina_Antique-Gold_main1_headrail_longer_blind.jpg" class="img-thumbnail img-fluid float-left"></image>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Save Order</button>

                            <button class="btn btn-warning">Cancel Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end view-->


            <!--           feed-->
            <div class="feedBtn">

                <a class="text-primary display-4 slide-toggle"><i class="fas fa-comment-alt"></i></a>
            </div>

            <!--            FEEDBACK-->
            <div class="container">
                <div class="row chat-window col-xs-1 col-md-3" id="chat_window_1" style="margin-left:10px;">
                    <div class="col-10 col-md-12 ml-5" style="height:">
                        <div class="panel panel-default">
                            <div class="panel-heading top-bar ">
                                <!---->
                                <div class="col-md-8 col-xs-8">
                                    <span class="">
                                        <p id="feed" class="h6">FEEDBACKS</p><a href="#" class="hide"></a>
                                        
                            
                            </span>

                                </div>
                                <div class="col-md-4 col-xs-4" style="text-align: right;">
                                    <a href="#"><span id="minim_chat_window" class="float-right icon_minim"></span></a>
                                </div>
                            </div>
                            <div class="panel-body msg_container_base">

                                <div class="row <m></m>sg_container base_receive">
                                    <div class="col-md-12 col-xs-11">
                                        <div class="messages msg_receive">
                                            <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--                        -->
                                <div class="row msg_container base_receive">
                                    <div class="col-md-12 col-xs-11">
                                        <div class="messages msg_receive">
                                            <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--                        -->
                                <div class="row msg_container base_receive">
                                    <div class="col-md-12 col-xs-11">
                                        <div class="messages msg_receive">
                                            <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--                        -->
                                <div class="row msg_container base_receive">
                                    <div class="col-md-12 col-xs-11">
                                        <div class="messages msg_receive">
                                            <p>that mongodb thing looks good, huh? tiny master db, and huge document store</p>
                                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--                        -->



                            </div>

                        </div>
                    </div>
                </div>


            </div>


            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Adam Arc Blinds And Decors 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <!--            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->
            <!-- Page level plugin JavaScript-->
            <!--            <script src="vendor/chart.js/Chart.min.js"></script>-->
            <script src="vendor/datatables/jquery.dataTables.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="js/sb-admin-datatables.min.js"></script>
            <!--            <script src="js/sb-admin-charts.min.js"></script>-->
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

            <script type="text/javascript">
                //                var boxWidth = $("#chat_window_1").width();
                $(document).ready(function() {
                    //                    $("#chat_window_1").animate({
                    //                        width: 0
                    //                    });
                    $(".slide-toggle").click(function() {
                        $("#chat_window_1").animate({
                            width: "toggle"
                        });
                    });
                    $(".hide").click(function() {
                        $("#chat_window_1").animate({
                            width: 0
                        });
                    });
                    $v = 0;
                    $v += 1;
                    $("#checkAll").click(function() {
                        $("input:checkbox").prop('checked', this.checked);
                    });

                    //                    add and edit blinds

                    $('#blindFile').change(function() {
                        AddImg(this, '#blindsImg');
                        $('#default-img').addClass("d-none");
                        $('#addBlind').removeClass("offset-2");



                    });
                    $("#editBlinds").click(function() {
                        $(":disabled").removeAttr("disabled");
                    });
                    $(function() {
                        $('#view-Thumbnail').on('click', function() {
                            $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
                            $('#enlargeImageModal').modal('show');
                        });
                    });
                    //                    add new order
                    $("#change").click(function() {
                        $("#changeDate").removeAttr('disabled');
                    });

                    $('#nextButton').click(function() {
                        $('.bd-addOrder-modal-lg').modal('hide');
                        $('.bd-addOrderFabric-modal-lg').modal('show');
                    });
                    $('#nextButton2').click(function() {
                        $('.bd-addOrderFabric-modal-lg').modal('hide');
                        $('.bd-addOrderVisit-modal-lg').modal('show');
                    });
                });

                function AddImg(input, img) {

                    for (var i = 0; i < input.files.length; i++) {
                        if (input.files[i]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {

                                $(img).attr('src', e.target.result);


                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                }

            </script>
        </div>
    </div>
</body>

</html>
