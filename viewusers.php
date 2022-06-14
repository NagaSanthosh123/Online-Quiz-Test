<?php
session_start();
if(!isset($_SESSION['fid'])){
  header("location:site.php");
}
$servername='localhost';
$user='root';
$pwd='';
$dbname='miniproject';
$conn=new mysqli($servername,$user,$pwd,$dbname);
$sql="SELECT s.id as id,avg(r.correct) as average,sum(r.correct) as totalmarks,count(*) as attempts,s.photo as photo FROM results r INNER JOIN students s on s.id=r.id group by s.id order by totalmarks desc";
if($result=$conn->query($sql)){
    $x=$_SESSION['fname'];
    echo "<html>
    <head>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

        <title>User Profile</title>
        <!-- Font Awesome -->
<!-- Google Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'>
<!-- Bootstrap core CSS -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet'>
<!-- Material Design Bootstrap -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' rel='stylesheet'>
    </head>
    <body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='#'>Test Your Skills</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDarkDropdown' aria-controls='navbarNavDarkDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDarkDropdown' style='margin-left: 1200px;'>
            <ul class='navbar-nav' style='margin-left:200px;'>
              <li class='nav-item dropdown'>
                <a style='color: aliceblue;' class='nav-link dropdown-toggle' href='#' id='navbarDarkDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                 $x
                </a>
                <ul class='dropdown-menu dropdown-menu-dark' aria-labelledby='navbarDarkDropdownMenuLink'>
                <li><a class='dropdown-item' href='AddUser.php'>Add User</a></li>
                <a class='dropdown-item' href='facultypage.php'>Home</a></li>
                  <li><a class='dropdown-item' href='facultyprofile.php'>My Profile</a></li>
                  <li><a class='dropdown-item' id='logout' href='site.php'>Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h1 style='font-weight:bold;'>Student's Progress</h1>";
    echo "<table class='table table-hover table-dark table-striped' border='2px solid black'><tr align='center'><th>Photo</th><th>Average</th><th>Total Marks</th><th>Attempts</th><th>Registration number</th><th>View Profile</th></tr>";
    while($row=$result->fetch_assoc()){
        $x1=$row['id'];
        $x2=$row['average'];
        $x3=$row['totalmarks'];
        $x5=$row['attempts'];
        $x4='photos/' . $row['photo'] . '.jpeg';
        echo "<tr align='center'><td><img src='$x4' width='150px' height='150px'></td><td>$x2</td><td>$x3</td><td>$x5</td><td>$x1</td><td><form method='post' action='viewprofile.php'><input type='submit' name='id' value=$x1></form></td></tr>";
    }
    echo "</table>";
}
?>