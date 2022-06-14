<?php
session_start();
if(!isset($_POST['fid'])){
    header("location:site.php");
}
print_r($_SESSION);
            $x=$_POST['fid'];
            $y=$_POST['fpwd'];
            $servername="localhost";
            $username="root";
            $password="";
            $databasename="miniproject";
            $conn=new mysqli($servername,$username,$password,$databasename);
            $sql="Select * from faculty where facultyid='$x' and pwd='$y'";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();
            if($result->num_rows==1){
                $_SESSION['fid']=$x;
                $_SESSION['fname']=$row['facultyname'];
                header('location:facultypage.php');
            }
            else{
                header('location:site.php');
            }
        ?>