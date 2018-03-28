<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="../js/fabric.js"></script>
  <script type="text/javascript" src="../js/fontawesome-all.min.js"></script>

  <!--    <link type="text/css" href="../css/mdb.min.css" rel="stylesheet">-->

  <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">

</head>

<body class="position-relative" data-spy="scroll" data-target="#myScrollspy" data-offset="1">

<!--
  <nav class="navbar sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard</a>
      <form action="" class="form-inline">
        <button class="btn btn-dark pl-3">
             <span class="fa-layers fa-fw">
               <i class="far fa-bell"></i>
               <span class="fa-layers-counter bg-success visible"></span> 
             </span> <span class="d-none d-sm-inline">Notification</span>
           </button>
        <div class="dropdown pl-3">

            <button id="profile" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button"><i class="far fa-user"></i> <span class="d-none d-sm-inline">Profile</span></button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profile">
              <a class="dropdown-item" href="#">Logout</a>
              <a class="dropdown-item" href="#">My Account</a>
            </div>
        </div>
      </form>
    </div>
  </nav>
-->
  
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
 <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
