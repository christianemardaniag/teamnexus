var tempOrderID = "";
$(document).ready(function () {
  var blindsOrderID;

  $('[data-toggle="tooltip"]').tooltip()
  $('.btnRemoveOrder').popover({
    html: true,
    content: "<button class='btn btn-link text-secondary btnRemoveOrderContent' onclick='cancelPopover()'>Cancel</button><button class='btn btn-danger' onclick='removeOrder()'>Remove</button>",
    title: "Remove",
    placement: 'top'
  });



  $(".btnRemoveOrder").click(function () {
    //alert($(this).data("orderid"));
    tempOrderID = $(this).data("orderid");
  });
  $(".btnupdateorder").click(function () {
    var orderDetailsID = $(this).data("orderdetailsid");
    var length = $(".inputlength" + orderDetailsID).val();
    var width = $(".inputwidth" + orderDetailsID).val();
    var quan = $(".inputquan" + orderDetailsID).val();

    $.ajax({
      type: "GET",
      url: "../pages/UpdateOrderDetails.php",
      dataType: "text",
      data: {
        "id": orderDetailsID,
        "length": length,
        "width": width,
        "quan": quan


      },
      success: function (data) {

      }

    });

  });

  $("#btnUpdateProfile").click(function () {
    var fname = $("#ufname").val();
    var lname = $("#ulname").val();
    var address = $("#uaddress").val();
    var contact = $("#ucontact").val();
    var oldEmail = $(this).data("oldemail");
    var newEmail = $("#uemail").val();
    var oldpass = $("#upassword").val();
    var newpass = $("#uverify_pass").val();

    alert(fname + lname + address + contact + oldEmail + newEmail + oldpass + newpass);

    $.ajax({
      type: "GET",
      url: "../pages/updateProfile.php",
      dataType: "text",
      data: {
        "oldEmail": oldEmail,
        "newEmail": newEmail,
        "newPass": newpass,
        "fname": fname,
        "lname": lname,
        "address": address,
        "contact": contact,
        "password": oldpass

      },
      success: function (data) {

        alert(data);
        var fname = $("#ufname").val();

        $("#login").html(fname);


      }

    });

  });

  $.ajax({
    type: "GET",
    url: "../include/getActive.php",
    dataType: "text",
    data: {


    },
    success: function (data) {

      $("#" + data).addClass("active");


    }

  });

  $(".imgViewBlinds").click(function () {
    blindsOrderID = $(this).attr('id');


    $('#modal-catalogueBlinds').attr('src', $(this).attr('src'));

    $('#myModal-catalogueBlinds').modal('show');



  });

  $("#btnaddOrder").click(function () {
    var quan = $("#orderQuantity").val();
    var width = $("#orderWidth").val();
    var len = $("#orderLength").val();
    var isCustomed = $("#btnaddOrder").data("iscustomed");

    $.ajax({
      type: "GET",
      url: "../pages/addOrder.php",
      dataType: "text",
      data: {

        "blindsID": blindsOrderID,
        "quantity": quan,
        "length": len,
        "width": width,
        "iscustomed": isCustomed
        

      },
      success: function (data) {
        alert(data);

      }

    });

  });


  $(".nav-link").click(function () {
    var myid = $(this).attr("id");


    $.ajax({
      type: "GET",
      url: "../include/setActive.php",
      dataType: "text",
      data: {
        "alink": myid

      },
      success: function (data) {


      }

    });

  });

  $("#btnSignIn").click(function () {
    var email = $("#loginEmailAddress").val();
    var pass = $("#loginPassword").val();

    $.ajax({
      type: "GET",
      url: "login.php",
      dataType: "text",
      data: {
        "email": email,
        "pass": pass

      },
      success: function (data) {

        if (data == "Email or Password is incorrect!" || data == "Account does not exist!")
          {
            alert(data);
          }
        else
          {
            
            $("#login").html(data);
            $("#divLoginPane").load("../pages/logPane.php");

 
          }
     
      }

    });

  });



});

function cancelPopover() {
  $(".btnRemoveOrder").popover('hide');
}

function removeOrder() {
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(xhttp.responseText);
      $("#trorder"+tempOrderID).hide(500);
      $(".btnRemoveOrder").popover('hide');
    }
  };
  xhttp.open("GET", "../pages/RemoveMyOrder.php?orderID="+tempOrderID, true);
  xhttp.send();
}
