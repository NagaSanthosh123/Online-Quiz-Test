<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:site.php");
}
if(!isset($_SESSION['test'])){
  header("location:testpage.php");
}

if(isset($_SESSION['refresh'])){
  unset($_SESSION['refresh']);
}

$_SESSION['result']='OK';

if(isset($_SESSION['a1'])){
    unset($_SESSION['a1']);
  }
  if(isset($_SESSION['a2'])){
    unset($_SESSION['a2']);
  }if(isset($_SESSION['a3'])){
    unset($_SESSION['a3']);
  }if(isset($_SESSION['a4'])){
    unset($_SESSION['a4']);
  }if(isset($_SESSION['a5'])){
    unset($_SESSION['a5']);
  }if(isset($_SESSION['a6'])){
    unset($_SESSION['a6']);
  }if(isset($_SESSION['a7'])){
    unset($_SESSION['a7']);
  }if(isset($_SESSION['a8'])){
    unset($_SESSION['a8']);
  }if(isset($_SESSION['a9'])){
    unset($_SESSION['a9']);
  }if(isset($_SESSION['a10'])){
    unset($_SESSION['a10']);
  }

$arr=array('jt1'=>1,'jt2'=>2,'jt3'=>3,'jt4'=>4,'jt5'=>5,'ct1'=>6,'ct2'=>7,'ct3'=>8,'ct4'=>9,'ct5'=>10,'pt1'=>11,'pt2'=>12,'pt3'=>13,'pt4'=>14,'pt5'=>15);
$x=$_GET['x'];
$x1=json_decode($x);
$x2=(array)$x1;
//print_r($x2);
$servername="localhost";
$username="root";
$password="";
$databasename="miniproject";
$conn=new mysqli($servername,$username,$password,$databasename);
//$i=$_SESSION['id'];
$i=$_SESSION['id'];
$q1=(int)$x2['answered'];
 $q2=(int)$x2['not_answered'];
 $q3=(int)$x2['correct'];
 $q4=(int)$x2['not_correct'];
 $q5=$arr[$_SESSION['test']];
$x1='results';
//echo $q5;
$sql="INSERT INTO $x1
      VALUES
      ($q1,$q2,$q3,$q4,'$q5','$i')";
$result=$conn->query($sql);
unset($_SESSION['test']);
//print_r($_SESSION);
//print_r($_SESSION);

// $i=$_SESSION['id'];
// $q1=$x2['answered'];
// $q2=$x2['not_answered'];
// $q3=$x2['correct'];
// $q4=$x2['not_correct'];
// define('hello1',$i);
// define('hello2',$q1);
// define('hello3',$q2);
// define('hello4',$q3);
// define('hello5',$q4);
?>
<!doctype html>
<html lang="en">
  <head>
    <style>
 

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Result Page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Your Progress</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav"style="margin-left:200px;">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['student'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="testpage.php">Home</a></li>  
                  <li><a class="dropdown-item" href="UserProfile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row" style="margin-top:30px;">
                <h3>Attempted questions  (<?php echo $x2['answered'];?>)<h3>
                <div class="progress" style="width: 650px;">
  <div id="p1" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['answered'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Not Attempted questions  (<?php echo $x2['not_answered'];?>)</h3>
                <div class="progress" style="width: 650px;">
  <div id="p2" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['not_answered'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Correctly answered  (<?php echo $x2['correct'];?>)</h3>
                <div class="progress" style="width: 650px;">
  <div  id="p3" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['correct'];?>0%"></div>
</div>
          </div>
          <div class="row" style="margin-top:30px;">
                <h3>Wrong answers  (<?php echo $x2['not_correct'];?>)</h3>
                <div class="progress" style="width: 650px;">
  <div  id="p4" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $x2['not_correct'];?>0%"></div>
</div>
          </div>
        </div>
        <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                        <div class="card-body" style="height: 420px">
                            <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000px;height:1000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div> <canvas id="chart-line" width="29" height="20" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                        </div>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
  <script>
    
    
      $(document).ready(function(){
        var c=<?php echo $x2['correct']; ?>;
        var a=<?php echo $x2['answered']; ?>;
        var na=<?php echo $x2['not_answered']; ?>;
        var w=<?php echo $x2['not_correct']; ?>;
        if(c>=7){
            $("#p3").addClass("bg-success");
        }
        else if(c>=4){
            $("#p3").addClass("bg-warning");
        }
        else{
            $("#p3").addClass("bg-danger");
        }
        if(w>=7){
            $("#p4").addClass("bg-danger");
        }
        else if(w>=4){
            $("#p4").addClass("bg-warning");
        }
        else{
            $("#p4").addClass("bg-success");
        }
        if(a>=7){
            $("#p1").addClass("bg-success");
        }
        else if(a>=4){
            $("#p1").addClass("bg-warning");
        }
        else{
            $("#p1").addClass("bg-danger");
        }
        if(na>=7){
            $("#p2").addClass("bg-danger");
        }
        else if(na>=4){
            $("#p2").addClass("bg-warning");
        }
        else{
            $("#p2").addClass("bg-success");
        }
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["correct", "answered", "not_answered", "not_correct"],
                datasets: [{
                    data: [<?php echo $x2['correct']; ?>,<?php echo $x2['answered']; ?>,<?php echo $x2['not_answered']; ?>,<?php echo $x2['not_correct']; ?>],
                    backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Weather'
                }
            }
        });
        
      });
      </script>
</html>
