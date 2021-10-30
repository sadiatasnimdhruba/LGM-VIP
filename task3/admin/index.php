<?php
$url="http://localhost/lgm/task3/";

include("../includes/db.php");

 $count_students=mysqli_query($conn,"SELECT * from students");
 $total_students=mysqli_num_rows($count_students);

  $count_class=mysqli_query($conn,"SELECT * from class group by name");
 $total_class=mysqli_num_rows($count_class);

 $count_subjects=mysqli_query($conn,"SELECT * from subject group by name");
 $total_subjects=mysqli_num_rows($count_subjects);

 $count_exams=mysqli_query($conn,"SELECT * from exam");
 $total_exams=mysqli_num_rows($count_exams);

 $count_result=mysqli_query($conn,"SELECT * from exam where not (marks=0 AND grade='not graded')");
 $total_result=mysqli_num_rows($count_result);

$count_ungraded_result=mysqli_query($conn,"SELECT * from exam where (marks=0 AND grade='not graded')");
 $total_ungraded_result=mysqli_num_rows($count_ungraded_result);


 include("../includes/header.php");
?>
    <style>
  .panel-heading
{
  border-top-left-radius: 13px;
  border-top-right-radius: 13px;
  color:#fff;
  background-image:  linear-gradient(rgb(7 238 255 / 44%), rgb(0 43 43));
}
.panel-footer
{
   border:2px solid #003c46;
   border-bottom-left-radius: 13px;
   border-bottom-right-radius: 13px;
}
h4
{
    box-shadow: 0px 0px 8px 2px rgb(0 0 0 / 20%);
    border-radius: 5px;
    
}
h1
{
color: #d30000!important;
}
</style>



<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
</div>
<div class="col-sm-9">
  <div class="content">
    <h1><i class="fa fa-dashboard"></i> Dashboard <small>Statistics overview</small></h1><br><br><br>
      
    <h4 class=" bg-light p-3"><i class="fa fa-dashboard"></i> Dashboard</h4>
    <br>

  <div class="row">
    <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/student.png" style="border-radius:50%" width="100px" height="100px">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_students;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All Students</div>
            </div>
          </div>
        </div>
        <a href="student.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All students</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div>
      </a>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/class.png" width="100px" height="100px" style="border-radius: 80%;">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_class;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All classes</div>
            </div>
          </div>
        </div>
        <a href="class.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View All classes</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>
        </div></a>
      </div>
    </div>

        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/subject.png" width="100px" height="100px">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_subjects;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All subjects</div>
            </div>
          </div>
        </div>
        <a href="subject.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View all subjects</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>

        </div></a>
      </div>
    </div>
        <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/exam.png" width="100px" height="100px"  style="border-radius: 80%;">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_exams;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All exams</div>
            </div>
          </div>
        </div>
        <a href="view_exam.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View all exams</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>

        </div></a>
      </div>
    </div>

     <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/result.png" width="100px" height="100px"  style="border-radius: 80%;">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_result;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All graded result</div>
            </div>
          </div>
        </div>
        <a href="result.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View all graded result</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>

        </div></a>
      </div>
    </div>


     <div class="col-sm-4 mb-3">
      <div class="panel">
        <div class="panel-heading p-2">
          <div class="row">
            <div class="col-xs-3"><img src="../images/result.png" width="100px" height="100px"  style="border-radius: 80%;">
              <p class="pull-right" style="font-size: 45px"><?php echo $total_ungraded_result;?></p>
            </div>
            <div class="col-xs-9">
              
              <div class="clearfix"></div>
              <div class="pull-right">All ungraded result</div>
            </div>
          </div>
        </div>
        <a href="ungraded_result.php">
        <div class="panel-footer bg-light p-2" style="color:#000;">
          <span class="pull-left">View all ungraded result</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-o-right fa-2x"></i></span>
            <div class="clearfix"></div>

        </div></a>
      </div>
    </div>

<br>
  </div>
  <hr/>
</div>
</div>
</div>
</div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>