<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:site.php");
}
        $servername="localhost";
        $username="root";
        $password="";
        $databasename="miniproject";
        $x=$_SESSION['id'];
        $conn=new mysqli($servername,$username,$password,$databasename);
        $sql="Select * from students where id='$x'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $pic='photos/' . $row['photo'] . '.jpeg';
        }
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>User Profile</title>
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Test Your Skills</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav" style="margin-left:200px;">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['student'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="testpage.php">Home</a></li>  
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-lg-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src='<?php echo $pic;?>' disabled></div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $row['firstname'];?>"disabled></div>

                            <div class="col-lg-6"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="last name" value="<?php echo $row['lastname'];?>"disabled></div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12"><label class="labels">Registration Number<input type="text" class="form-control" placeholder="regnumber" value="<?php echo $row['id'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">Father name<input type="text" class="form-control" placeholder="regnumber" value="<?php echo $row['fathername'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">Mother Name<input type="text" class="form-control" placeholder="regnumber" value="<?php echo $row['mothername'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">year<input type="number" class="form-control" placeholder="regnumber" value="<?php echo $row['year'];?>"disabled></label></div>
                            <div class="col-lg-12"><label class="labels">Age<input type="number" class="form-control" placeholder="regnumber" value="<?php echo $row['age'];?>"disabled></label></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
</html>