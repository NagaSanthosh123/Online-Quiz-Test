<?php
session_start();
//print_r($_SESSION);
if(!isset($_SESSION['fid'])){
  header("location:site.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Adding user page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Administrator portal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['fname'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="facultypage.php">Home</a></li>
                  <li><a class="dropdown-item" href="facultyprofile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 style='margin-left:850px'>ADD USER</h1>
    <div class="alert alert-warning alert-dismissible fade show" id="err1" role="alert">
        <strong>Enter valid Registration Id</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err2" role="alert">
        <strong>Enter valid first name</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err3" role="alert">
        <strong>Enter valid last name</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err4" role="alert">
        <strong>Enter valid fathername</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err5" role="alert">
        <strong>Enter valid mothername</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err6" role="alert">
        <strong>Enter valid year</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err7" role="alert">
        <strong>Enter valid age</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" id="err8" role="alert">
        <strong>Enter valid password</strong>
        <button type="button" class="btn-close" id="alert1" aria-label="Close"></button>
    </div>
      <form method="post" action="addinguser.php" enctype="multipart/form-data"> 
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-lg-5 offset-lg-4">
                <div class="p-3 py-5">
                    <div class="row">
                        <div class="col-lg-12"><label class="labels" for="rid">Enter Registration number</label><input type="text" name="rid" class="form-control" placeholder="Enter Registration number" id="rid" required></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"><label class="labels">First Name</label><input type="text" name="fname" id="fname" class="form-control" required placeholder="first name"></div>

                        <div class="col-lg-6"><label class="labels">Last Name</label><input type="text" name="lname" id="lname" class="form-control" placeholder="last name"required></div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12"><label class="labels">Father name<input type="text" name="fn" id="fn" class="form-control" placeholder="regnumber"required></label></div>
                        <div class="col-lg-12"><label class="labels">Mother Name<input type="text" name="mn" id="mn" class="form-control" placeholder="regnumber"required></label></div>
                        <div class="col-lg-12"><label class="labels">year<input type="number" name="yr" id="yr" class="form-control" placeholder="regnumber" required></label></div>
                        <div class="col-lg-12"><label class="labels">Age<input type="number" name="age" id="age" class="form-control" placeholder="regnumber"required></label></div>
                        <div class="col-lg-12"><lable class="labels">Photo</lable><input type="file" id="pic" name="pic" class="form-control"required></div>
                        <div class="col-g-12"><label class="labels">Password</label><input type="password" id="pwd" class="form-control" name="pwd"required></div>
                    </div>
                    <div class="row"><div class="col-lg-3 offset-lg-5"><input type="submit" style="margin-top:50px;" name="sub" value="ADD USER"required></div></div>
                </div>

            </div>

        </div>

    </div>
    </form>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
      $(document).ready(function(){
          $("#err1").hide();
          $("#err2").hide();
          $("#err3").hide();
          $("#err4").hide();
          $("#err5").hide();
          $("#err6").hide();
          $("#err7").hide();
          $("#err8").hide();
          $('#err1').click(function(){
              $("#err1").hide('fade');
          });
          $('#err2').click(function(){
              $("#err2").hide('fade');
          });
          $('#err3').click(function(){
              $("#err3").hide('fade');
          });
          $('#err4').click(function(){
              $("#err4").hide('fade');
          });
          $('#err5').click(function(){
              $("#err5").hide('fade');
          });
          $('#err6').click(function(){
              $("#err6").hide('fade');
          });
          $('#err7').click(function(){
              $("#err7").hide('fade');
          });
          $('#err8').click(function(){
              $("#err8").hide('fade');
          });
          $("#rid").focusout(function(){
              var v=$("#rid").val();
              var regid=/19091A0587/;
              if(!regid.test(v)){
                $("#err1").css("width","350px");
                $("#err1").css("margin-left","1350px");
                $("#err1").slideDown("slow");
              }
          });
          $("#fname").focusout(function(){
              var v=$("#fname").val();
              
              var regid=/[a-zA-Z]{5,15}/;
              if(!regid.test(v)){
                $("#err2").css("width","350px");
                $("#err2").css("margin-left","1350px");
                $("#err2").slideDown("slow");
              }
          });
          $("#lname").focusout(function(){
              var v=$("#lname").val();;
              
              var regid=/[a-zA-Z]{5,15}/;
              if(!regid.test(v)){
                $("#err3").css("width","350px");
                $("#err3").css("margin-left","1350px");
                $("#err3").slideDown("slow");
              }
          });
          $("#fn").focusout(function(){
              var v=$("#fn").val();
              
              var regid=/[a-zA-Z]{5,15}/;
              if(!regid.test(v)){
                $("#err4").css("width","350px");
                $("#err4").css("margin-left","1350px");
                $("#err4").slideDown("slow");
              }
          });
          $("#mn").focusout(function(){
              var v=$("#mn").val();
              
              var regid=/[a-zA-Z]{5,15}/;
              if(!regid.test(v)){
                $("#err5").css("width","350px");
                $("#err5").css("margin-left","1350px");
                $("#err5").slideDown("slow");
              }
          });
          $("#yr").focusout(function(){
              var v=$("#yr").val();
              
              var regid=/[1-4]{1}/;
              if(!regid.test(v)){
                $("#err6").css("width","350px");
                $("#err6").css("margin-left","1350px");
                $("#err6").slideDown("slow");
              }
          });
          $("#age").focusout(function(){
              var v=$("#age").val();
              
              var regid=/[0-9]{2}]/;
              if(!regid.test(v)){
                $("#err7").css("width","350px");
                $("#err7").css("margin-left","1350px");
                $("#err7").slideDown("slow");
              }
          });
          $("#pwd").focusout(function(){
              var v=$("#pwd").val();
              
              var regid=/[0-9a-zA-Z@#$%^&*()!_+-=]{8,15}/;
              if(!regid.test(v)){
                $("#err8").css("width","350px");
                $("#err8").css("margin-left","1350px");
                $("#err8").slideDown("slow");
              }
          });
      });
  </script>
</html>