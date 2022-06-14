<?php
session_start();
if(isset($_SESSION['refresh'])){
  unset($_SESSION['refresh']);
}
if(!isset($_SESSION['id'])){
  header("location:site.php");
}
// print_r($_SESSION);
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
$i=$_SESSION['id'];
$servername="localhost";
$username="root";
$password="";
$databasename="miniproject";
$conn=new mysqli($servername,$username,$password,$databasename);
if(isset($_SESSION['test']) && isset($_SESSION['result'])){
  unset($_SESSION['result']);
  unset($_SESSION['test']);
}
if(isset($_SESSION['test'])){
  $arr=array('jt1'=>1,'jt2'=>2,'jt3'=>3,'jt4'=>4,'jt5'=>5,'ct1'=>6,'ct2'=>7,'ct3'=>8,'ct4'=>9,'ct5'=>10,'pt1'=>11,'pt2'=>12,'pt3'=>13,'pt4'=>14,'pt5'=>15);
  $t=$_SESSION['test'];
  $id=$_SESSION['id'];
  $x=$arr[$t];
  $sql="INSERT into results values(0,10,0,0,$x,'$id')";
$result=$conn->query($sql);
unset($_SESSION['test']);
header("testpage.php");
}
$sql="SELECT count(*) as count from results where id='$i' and test='1'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t1= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='2'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t2= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='3'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t3= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='4'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t4= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='5'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t5= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='6'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t6= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='7'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t7= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='8'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t8= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='9'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t9= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='10'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t10= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='11'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t11= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='12'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t12= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='13'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t13= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='14'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t14= $row['count'];
$sql="SELECT count(*) as count from results where id='$i' and test='15'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$t15= $row['count'];

$arr1=array('t1'=>$t1,'t2'=>$t2,'t3'=>$t3,'t4'=>$t4,'t5'=>$t5,'t6'=>$t6,'t7'=>$t7,'t8'=>$t8,'t9'=>$t9,'t10'=>$t10,'t11'=>$t11,'t12'=>$t12,'t13'=>$t13,'t14'=>$t14,'t15'=>$t15);


$arr=array('1'=>'0','2'=>'0','3'=>'0','4'=>'0','5'=>'0','6'=>'0','7'=>'0','8'=>'0','9'=>'0','10'=>'0','11'=>'0','12'=>'0','13'=>'0','14'=>'0','15'=>'0');
$sql="SELECT avg(correct) as count from results where id='$i' and test='1'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['1']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='2'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['2']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='3'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['3']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='4'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['4']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='5'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['5']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='6'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['6']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='7'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['7']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='8'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['8']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='9'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['9']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='10'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['10']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='11'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['11']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='12'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['12']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='13'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['13']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='14'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['14']= $row['count'];
$sql="SELECT avg(correct) as count from results where id='$i' and test='15'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$arr['15']= $row['count'];

//print_r($arr);



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Hello</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Test Your Skills</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
</button>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="margin-left: 1200px;">
            <ul class="navbar-nav"style="margin-left:0px;">
              <li class="nav-item dropdown">
                <a style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['student'];?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Home</a></li>
                  <li><a class="dropdown-item" href="UserProfile.php">My Profile</a></li>
                  <li><a class="dropdown-item" id="logout" href="site.php">Log out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal" id="loginmodal1" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Following Actions will result in submission of exam</h1>
                </div>
                <div class="modal-body">
                    <h2>Refreshing the page</h2>
                    <h2>Redirecting to previous page</h2>
                </div>
                <div class="modal-footer">
                <button class="close btn btn-info" data-bs-dismiss="modal" onClick="Go()">OK</button>
                </div>
            </div>
        </div>
    </div>





      <div class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">  
      <h1 style="color: aliceblue;">Java</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " id="bl1" style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 id='h2' style="margin-left: 140px;margin-top: 25px;">Test1<svg xmlns="http://www.w3.org/2000/svg" id="l1" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u1" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t1" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b1" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(1)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t1;?></span></h5>
          </div>
          <div id="bl2"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2<svg xmlns="http://www.w3.org/2000/svg" id="l2" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u2" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t2" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
           <button id="b2" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(2)"  data-bs-target="#loginmodal1" data-bs-toggle="modal" disabled> Take a Test</button></a>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t2;?></span></h5>
          </div>
          <div id="bl3"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3<svg xmlns="http://www.w3.org/2000/svg" id="l3" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u3" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t3" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b3" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(3)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t3;?></span></h5>
          </div>
        </div>
        <div class="row">
        <div id="bl4"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4<svg xmlns="http://www.w3.org/2000/svg" id="l4" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u4" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t4" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b4" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(4)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t4;?></span></h5>
        </div>
        <div id="bl5"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5<svg xmlns="http://www.w3.org/2000/svg" id="l5" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u5" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t5" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b5" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(5)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t5;?></span></h5>
        </div>
        </div>
      </div>
      <div  class="container" style="margin-top:20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">Python</h1>
        <div class="row">
          <div id="bl6"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1<svg xmlns="http://www.w3.org/2000/svg" id="l6" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u6" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t6" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b6" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(6)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t11;?></span></h5>
          </div>
          <div id="bl7"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2<svg xmlns="http://www.w3.org/2000/svg" id="l7" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u7" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t7" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b7" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(7)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t12;?></span></h5>
          </div>
          <div id="bl8"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3<svg xmlns="http://www.w3.org/2000/svg" id="l8" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u8" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t8" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b8" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(8)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
            <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t13;?></span></h5>
          </div>
        </div>
        <div class="row">
        <div id="bl9"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4<svg xmlns="http://www.w3.org/2000/svg" id="l9" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u9" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t9" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b9" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(9)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t14;?></span></h5>
        </div>
        <div  id="bl10" class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5<svg xmlns="http://www.w3.org/2000/svg" id="l10" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u10" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t10" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b10" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(10)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t15;?></span></h5>
        </div>
        </div>

      </div>
      <div class="container" style="margin-top:20px;margin-bottom: 20px;background-color: black;border: solid 2px;border-radius:10px;padding-left: 20px;padding-top: 20px;padding-bottom: 20px;padding-right: 20px;">
        <h1 style="color: aliceblue;">C++</h1>
        <div class="row">
          <div id="bl11"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test1<svg xmlns="http://www.w3.org/2000/svg" id="l11" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u11" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t11" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
           <button id="b11" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(11)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t6;?></span></h5>
          </div>
          <div id="bl12"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test2<svg xmlns="http://www.w3.org/2000/svg" id="l12" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u12" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t12" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b12" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(12)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t7;?></span></h5>
          </div>
          <div id="bl13"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
            <h2 style="margin-left: 140px;margin-top: 25px;">Test3<svg xmlns="http://www.w3.org/2000/svg" id="l13" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u13" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t13" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
            <button id="b13" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(13)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t8;?></span></h5>
          </div>
        </div>
        <div class="row">
        <div id="bl14"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4 " style="margin-top:20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test4<svg xmlns="http://www.w3.org/2000/svg" id="l14" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u14" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t14" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b14" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(14)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t9;?></span></h5>
        </div>
        <div id="bl15"  class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top:20px;margin-left: 20px;border: solid 2px;border-radius:10px;background-color:rgb(235, 205, 166);height:200px;width:400px;">
          <h2 style="margin-left: 140px;margin-top: 25px;">Test5<svg xmlns="http://www.w3.org/2000/svg" id="l15" width="30" height="30" fill="currentColor" class="bi bi-file-lock-fill" viewBox="0 0 16 16">
  <path d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z"/>
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" id="u15" width="30" height="30" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg><svg id="t15" xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
</svg></h2>
          <button id="b15" style="margin-top: 50px;margin-left:130px" class="btn btn-large btn-primary" onClick="start(15)"  data-bs-target="#loginmodal1" data-bs-toggle="modal"> Take a Test</button>
          <h5 style="margin-left:270px;"><span class="badge bg-secondary">Attempts <?php echo $t10;?></span></h5>
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
  <script>

    $(document).ready(function(){
      var users = <?php echo json_encode($arr); ?>;
      var arr1=<?php echo json_encode($arr1);?>;
      $('#b2').attr('disabled','disabled');
      $('#b3').attr('disabled','disabled');
      $('#b4').attr('disabled','disabled');
      $('#b5').attr('disabled','disabled');
      $('#b7').attr('disabled','disabled');
      $('#b8').attr('disabled','disabled');
      $('#b9').attr('disabled','disabled');
      $('#b10').attr('disabled','disabled');
      $('#b12').attr('disabled','disabled');
      $('#b13').attr('disabled','disabled');
      $('#b14').attr('disabled','disabled');
      $('#b15').attr('disabled','disabled');

      $('#l1').hide();
      $('#l6').hide();
      $('#l11').hide();

      $('#u2').hide();
      $('#u3').hide();
      $('#u4').hide();
      $('#u5').hide();
      $('#u7').hide();
      $('#u8').hide();
      $('#u9').hide();
      $('#u10').hide();
      $('#u12').hide();
      $('#u13').hide();
      $('#u14').hide();
      $('#u15').hide();

      $('#t1').hide();
      $('#t2').hide();
      $('#t3').hide();
      $('#t4').hide();
      $('#t5').hide();
      $('#t6').hide();
      $('#t7').hide();
      $('#t8').hide();
      $('#t9').hide();
      $('#t10').hide();
      $('#t11').hide();
      $('#t12').hide();
      $('#t13').hide();
      $('#t14').hide();
      $('#t15').hide();

      if(users['1']>=6){
        $('#t1').show();
        $('#l1').show();
        $('#b1').attr('disabled','disabled');
        $('#u1').hide();

        $('#l2').hide();
        $('#u2').show();
        $('#b2').removeAttr('disabled');
      }
      
      if(users['2']>=6){
        $('#t2').show();
        $('#l2').show();
        $('#b2').attr('disabled','disabled');
        $('#u2').hide();

        $('#l3').hide();
        $('#u3').show();
        $('#b3').removeAttr('disabled');
      }
      if(users['3']>=6){
        $('#t3').show();
        $('#l3').show();
        $('#b3').attr('disabled','disabled');
        $('#u3').hide();

        $('#l4').hide();
        $('#u4').show();
        $('#b4').removeAttr('disabled');
      }
      if(users['4']>=6){
        $('#t4').show();
        $('#l4').show();
        $('#b4').attr('disabled','disabled');
        $('#u4').hide();

        $('#l5').hide();
        $('#u5').show();
        $('#b5').removeAttr('disabled');
      }
      if(users['5']>=6){
        $('#t5').show();
        $('#l5').show();
        $('#b5').attr('disabled','disabled');
        $('#u5').hide();
      }

      if(users['11']>=6){
        $('#t6').show();
        $('#l6').show();
        $('#b6').attr('disabled','disabled');
        $('#u6').hide();

        $('#l7').hide();
        $('#u7').show();
        $('#b7').removeAttr('disabled');
      }
      if(users['12']>=6){
        $('#t7').show();
        $('#l7').show();
        $('#b7').attr('disabled','disabled');
        $('#u7').hide();

        $('#l8').hide();
        $('#u8').show();
        $('#b8').removeAttr('disabled');
      }
      if(users['13']>=6){
        $('#t8').show();
        $('#l8').show();
        $('#b8').attr('disabled','disabled');
        $('#u8').hide();

        $('#l9').hide();
        $('#u9').show();
        $('#b9').removeAttr('disabled');
      }
      if(users['14']>=6){
        $('#t9').show();
        $('#l9').show();
        $('#b9').attr('disabled','disabled');
        $('#u9').hide();

        $('#l10').hide();
        $('#u10').show();
        $('#b10').removeAttr('disabled');
      }
      if(users['15']>=6){
        $('#t10').show();
        $('#l10').show();
        $('#b10').attr('disabled','disabled');
        $('#u10').hide();
      }
      if(users['6']>=6){
        $('#t11').show();
        $('#l11').show();
        $('#b11').attr('disabled','disabled');
        $('#u11').hide();

        $('#l12').hide();
        $('#u12').show();
        $('#b12').removeAttr('disabled');
      }
      if(users['7']>=6){
        $('#t12').show();
        $('#l12').show();
        $('#b12').attr('disabled','disabled');
        $('#u12').hide();

        $('#l13').hide();
        $('#u13').show();
        $('#b13').removeAttr('disabled');
      }
      if(users['8']>=6){
        $('#t13').show();
        $('#l13').show();
        $('#b13').attr('disabled','disabled');
        $('#u13').hide();

        $('#l14').hide();
        $('#u14').show();
        $('#b14').removeAttr('disabled');
      }
      if(users['9']>=6){
        $('#t14').show();
        $('#l14').show();
        $('#b14').attr('disabled','disabled');
        $('#u14').hide();

        $('#l15').hide();
        $('#u15').show();
        $('#b15').removeAttr('disabled');
      }
      if(users['10']>=6){
        $('#t15').show();
        $('#l15').show();
        $('#b15').attr('disabled','disabled');
        $('#u15').hide();
      }



      if(arr1['t1']>=3){
        $('#b1').attr('disabled','disabled');
        $('#bl1').css('background-color','rgba(235,205,166,0.7)');
        $('#bl2').css('background-color','rgba(235,205,166,0.7)');
        $('#bl3').css('background-color','rgba(235,205,166,0.7)');
        $('#bl4').css('background-color','rgba(235,205,166,0.7)');
        $('#bl5').css('background-color','rgba(235,205,166,0.7)');

        $('#l1').show();
        $('#u1').hide();
      }if(arr1['t2']>=3){
        $('#bl2').css('background-color','rgba(235,205,166,0.7)');
        $('#bl3').css('background-color','rgba(235,205,166,0.7)');
        $('#bl4').css('background-color','rgba(235,205,166,0.7)');
        $('#bl5').css('background-color','rgba(235,205,166,0.7)');
        $('#b2').attr('disabled','disabled');
        $('#l2').show();
        $('#u2').hide();
      }if(arr1['t3']>=3){
        $('#bl3').css('background-color','rgba(235,205,166,0.7)');
        $('#bl4').css('background-color','rgba(235,205,166,0.7)');
        $('#bl5').css('background-color','rgba(235,205,166,0.7)');
        $('#b3').attr('disabled','disabled');

        $('#l3').show();
        $('#u3').hide();
      }if(arr1['t4']>=3){
        $('#bl4').css('background-color','rgba(235,205,166,0.7)');
        $('#bl5').css('background-color','rgba(235,205,166,0.7)');
        $('#b4').attr('disabled','disabled');

        $('#l4').show();
        $('#u4').hide();
      }if(arr1['t5']>=3){
        $('#bl5').css('background-color','rgba(235,205,166,0.7)');
        $('#b5').attr('disabled','disabled');

        $('#l5').show();
        $('#u5').hide();
      }if(arr1['t11']>=3){
        $('#bl6').css('background-color','rgba(235,205,166,0.7)');
        $('#bl7').css('background-color','rgba(235,205,166,0.7)');
        $('#bl8').css('background-color','rgba(235,205,166,0.7)');
        $('#bl9').css('background-color','rgba(235,205,166,0.7)');
        $('#bl10').css('background-color','rgba(235,205,166,0.7)');
        $('#b6').attr('disabled','disabled');

        $('#l6').show();
        $('#u6').hide();
      }if(arr1['t12']>=3){
        $('#bl7').css('background-color','rgba(235,205,166,0.7)');
        $('#bl8').css('background-color','rgba(235,205,166,0.7)');
        $('#bl9').css('background-color','rgba(235,205,166,0.7)');
        $('#bl10').css('background-color','rgba(235,205,166,0.7)');
        $('#b7').attr('disabled','disabled');

        $('#l7').show();
        $('#u7').hide();
      }if(arr1['t13']>=3){
        $('#bl8').css('background-color','rgba(235,205,166,0.7)');
        $('#bl9').css('background-color','rgba(235,205,166,0.7)');
        $('#bl10').css('background-color','rgba(235,205,166,0.7)');
        $('#b8').attr('disabled','disabled');

        $('#l8').show();
        $('#u8').hide();
      }if(arr1['t14']>=3){
        $('#bl9').css('background-color','rgba(235,205,166,0.7)');
        $('#bl10').css('background-color','rgba(235,205,166,0.7)');
        $('#b9').attr('disabled','disabled');

        $('#l9').show();
        $('#u9').hide();
      }if(arr1['t15']>=3){
        $('#bl10').css('background-color','rgba(235,205,166,0.7)');
        $('#b10').attr('disabled','disabled');

        $('#l10').show();
        $('#u10').hide();
      }if(arr1['t6']>=3){
        $('#bl11').css('background-color','rgba(235,205,166,0.7)');
        $('#bl12').css('background-color','rgba(235,205,166,0.7)');
        $('#bl13').css('background-color','rgba(235,205,166,0.7)');
        $('#bl14').css('background-color','rgba(235,205,166,0.7)');
        $('#bl15').css('background-color','rgba(235,205,166,0.7)');
        $('#b11').attr('disabled','disabled');

        $('#l11').show();
        $('#u11').hide();
      }if(arr1['t7']>=3){
        $('#bl12').css('background-color','rgba(235,205,166,0.7)');
        $('#bl13').css('background-color','rgba(235,205,166,0.7)');
        $('#bl14').css('background-color','rgba(235,205,166,0.7)');
        $('#bl15').css('background-color','rgba(235,205,166,0.7)');
        $('#b12').attr('disabled','disabled');

        $('#l12').show();
        $('#u12').hide();
      }if(arr1['t8']>=3){
        $('#bl13').css('background-color','rgba(235,205,166,0.7)');
        $('#bl14').css('background-color','rgba(235,205,166,0.7)');
        $('#bl15').css('background-color','rgba(235,205,166,0.7)');
        $('#b13').attr('disabled','disabled');

        $('#l13').show();
        $('#u13').hide();
      }if(arr1['t9']>=3){
        $('#bl14').css('background-color','rgba(235,205,166,0.7)');
        $('#bl15').css('background-color','rgba(235,205,166,0.7)');
        $('#b14').attr('disabled','disabled');

        $('#l14').show();
        $('#u14').hide();
      }if(arr1['t10']>=3){
        $('#bl15').css('background-color','rgba(235,205,166,0.7)');
        $('#b15').attr('disabled','disabled');

        $('#l15').show();
        $('#u15').hide();
      }

    });



    var s1=0;
      function start(s){
        s1=s;
      }
      function Go(){
        if(s1==1){
          window.location="javatest1.php?k=1";
        }
        else if(s1==2){
          window.location="javatest2.php?k=1";
        }else if(s1==3){
          window.location="javatest3.php?k=1";
        }else if(s1==4){
          window.location="javatest4.php?k=1";
        }else if(s1==5){
          window.location="javatest5.php?k=1";
        }else if(s1==6){
          window.location="pythontest1.php?k=1";
        }else if(s1==7){
          window.location="pythontest2.php?k=1";
        }else if(s1==8){
          window.location="pythontest3.php?k=1";
        }else if(s1==9){
          window.location="pythontest4.php?k=1";
        }else if(s1==10){
          window.location="pythontest5.php?k=1";
        }else if(s1==11){
          window.location="c++test1.php?k=1";
        }else if(s1==12){
          window.location="c++test2.php?k=1";
        }else if(s1==13){
          window.location="c++test3.php?k=1";
        }else if(s1==14){
          window.location="c++test4.php?k=1";
        }else if(s1==15){
          window.location="c++test5.php?k=1";
        }
      }
  </script>
</html>