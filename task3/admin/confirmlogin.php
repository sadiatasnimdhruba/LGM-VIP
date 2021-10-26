<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

include("../includes/db.php");
  

  $sql="SELECT * from admin where email='$email' and password='$password'";

   $result=mysqli_query($conn, $sql);
   $dat=mysqli_fetch_assoc($result);
   $rowcount=mysqli_num_rows($result);
   if($rowcount==1)
   {
   	 $_SESSION['login']=true;
    header("Location: index.php");
    
   }
   else
   {
   	 $_SESSION['error']=true;
  	header("Location: login.php");
     
   }
   ?>