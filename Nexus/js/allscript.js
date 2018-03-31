$(document).ready(function () {
  
  $.ajax({
      type: "GET",
      url: "../include/getActive.php",
      dataType: "text",
      data: {
        

      },
      success: function (data) {
       
        $("#"+data).addClass("active");
        
      
      }

    });

  $(".imgViewBlinds").click(function () {


    $('#modal-catalogueBlinds').attr('src', $(this).attr('src'));
    $('#myModal-catalogueBlinds').modal('show');



  });

  $(".btnaddOrder").click(function () {
    
    $.ajax({
      type: "GET",
      url: "addOrder.php",
      dataType: "text",
      data: {

        "blindsID":fdf,
        "fabricID":fd,
        
        "quantity":dfdf,
        
        "length":fdfd,
        "width":dfdfdf,
        
        "image":dfdf,
        
        "properties":dfdf,
        
        "isCustomed":dfdf
          
      },
      success: function (data) {

          $('#messageModal').modal('show');
          $("#pMessage").html(data);
      }

    });

  });


  $(".nav-link").click(function(){
    var myid = $(this).attr("id");
    
    
    $.ajax({
      type: "GET",
      url: "../include/setActive.php",
      dataType: "text",
      data: {
        "alink":myid

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

        $("#login").html(data);

        $("#divLoginPane").load("../pages/logPane.php");
      }

    });

  });

 

});
