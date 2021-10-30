<?php
 
 include("includes/db.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>SRMS</title>
    <style>
              header.masthead {
 padding-top: 15rem;
    padding-bottom: calc(10rem - 2.5rem);
    background:  url(images/home1.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
    
}
.heading
{
  font-size: 50px;

}
@media screen and (max-width: 767px) {
header.masthead
 {
  padding-top: 0rem;
   padding-bottom: calc(10rem - 10rem);
   padding:20px;
}
.heading
{
  font-size: 35px;
}
.sub
{
  font-size:18px;
  padding-top: 20px;
}
}

    </style>
    </head>
  <body>


               <header class="masthead">
                    <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-10  ">
                        <h1 class="text-light heading">Student Result Management System</h1>
                   
                         <h5 class="text-light sub">A student result management system is an automated version<br>of a manual student. This system can handle all the detail<br> about a student result.</h5>
                          <br>
                          <br>
                          <br>
  	                     <a class="btn btn-info link" href="admin/login.php">Admin</a>
  	                     <a class="btn btn-warning link" href="student/login.php">Student</a>
                         <br><br>
                         
                         
                    </div>
               
            </div>
        </header>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>