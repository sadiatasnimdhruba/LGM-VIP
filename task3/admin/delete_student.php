<?php
session_start();
include("../includes/db.php");
$id=$_GET['id'];

  $delete="DELETE FROM students where id=$id";
  if(mysqli_query($conn,$delete))
    {
    	$_SESSION['success']=1;
      header("Location: student.php")  ;

    }
    else
    {
    	$_SESSION['error']=1;
      header("Location: student.php")  ;
    }
?>