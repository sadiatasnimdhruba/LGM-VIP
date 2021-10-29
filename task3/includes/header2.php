<?php
include("../includes/db.php");
$id=$_GET['id'];


$sql="select students.*,class.name as classname
 from students
 join class on students.c_id=class.id
  where students.id='$id'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);

$sql1="select class.*,subject.name as subjectname,subject.id as subjectid,students.id as student_id
 from class,subject,students
  where class.id=subject.c_id AND class.id=students.c_id AND students.id='$id'";

  $result1=mysqli_query($conn,$sql1);


?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
  

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>SRMS</title>
    <style>
        .nav-pills .nav-link
        {
            color:#fff;
        }
        .nav-pills .nav-link:hover
        {
            color: #bafffd!important;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color:#00324e!important;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php?id=<?php echo $data['id'];?>" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="">Your profile</span>
                        </a>
                    </li>
             
                    <li>
                        <a href="exam.php?id=<?php echo $data['id'];?>" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="">Your exam</span></a>
                    </li>

                          <li>
                        <a href="student-result.php?id=<?php echo $data['id'];?>" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="">Your result</span></a>
                    </li>
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                       <!-- <img src="../images/student.png" alt="hugenerd" width="50" height="50" class="rounded-circle">-->
                       <i class="fa fa-user fa-3x"></i>
                        <span class="d-none d-sm-inline mx-1"><?php echo $data['name']; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Privacy & policy</a></li>
                         <li><a class="dropdown-item" href="#">Help</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="index.php?id=<?php echo $data['id'];?>">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>