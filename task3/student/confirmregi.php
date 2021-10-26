<?php 

 	 session_start();
   $name=$_POST['name'];
   $class=$_POST['class'];
   $roll=$_POST['roll'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirm_password'];

   if(strlen($password)<5)
   {
    $_SESSION['error_msg']="Your password must be at least 5 characters!";
    header("Location: registration.php");
    die();
   }

   if($password != $confirmpassword)
   {
  
   	$_SESSION['error_msg']="Password didn't match!";
   	header("Location: registration.php");
   }
   else{

     include("../includes/db.php");

     $sql1="SELECT * from students where email='$email'";

   $result=mysqli_query($conn, $sql1);

   $rowcount=mysqli_num_rows($result);

     if($rowcount==1)
   {
  
   	 $_SESSION['error_msg']="Account already exists!";
   	 header("Location: registration.php");
   }
   else{

   $sql="INSERT INTO students values(NULL,'$name','$email','$password','$roll','$class')";
      

  if(mysqli_query($conn,$sql))
   {
   
        $_SESSION['regi_msg']=" Please login.";
        header("Location: registration.php");
   }
      

  
}
}
?>