<?php
session_start();
include("../includes/db.php");
$id=$_GET['id'];
echo $id;

  $delete="DELETE FROM subject where id=$id";
  if(mysqli_query($conn,$delete))
    {
    	$_SESSION['suc']=1;
      header("Location: subject.php")  ;

    }
    else
    {
    	$_SESSION['error']=1;
      header("Location: subject.php")  ;
    }
?>