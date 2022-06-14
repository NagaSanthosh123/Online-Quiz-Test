<?php
session_start();
if(!isset($_SESSION['fid'])){
    header("location:site.php");
  }
        $servername="localhost";
        $username="root";
        $password="";
        $databasename="miniproject";
        $conn=new mysqli($servername,$username,$password,$databasename);
        $x1=$_POST['rid'];
        $x2=$_POST['fname'];
        $x3=$_POST['lname'];
        $x4=$_POST['fn'];
        $x5=$_POST['mn'];
        $x6=$_POST['yr'];
        $x7=$_POST['age'];
        $x8=$_POST['pwd'];
        $name= $_FILES['pic']['name'];
        $str=explode(".",$name);
        echo $str[1];
        if($str[1]=='jpeg'){
            $sql="INSERT into students values('$x1','$x2','$x3','$x4','$x5',$x6,$x7,'$str[0]','$x8')";
            if($conn->query($sql)){
                $t=$_FILES['pic']['tmp_name'];
                $filename=$_FILES['pic']['name'];
                $location="D:\\xampp\\htdocs\\Mini-Project\\photos\\";
                move_uploaded_file($t,$location.$filename);
                echo "<h1>Do you want to add more users</h1>";
                echo "<a href='AddUser.html'><button>Yes</button></a>";
                echo "<a href='facultypage.php'><button>No</button></a>";
            }
            else{
                echo "<h1>Unable to add user</h1>";
                echo "<a href='AddUser.html'>click here</a>";
            }
        }
        else{
            echo "<h1>Please provide only jpg files</h1>";
                echo "<a href='AddUser.html'>click here</a>";
        }
?>