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


include("../includes/header.php");
?><br><br><br><br>
<div class="container">
<div class="col py-3">
	<div class="row">
		<div class="col-9">
            <h1>Student individual information</h1><br><br></div>
            <div class="col-3">
            	<a class="btn btn-info" href="student.php">Back to students list</a>
            </div>
        </div>
            <table class ="table">
           
               <tr>
            <th class="text-right" width="150">Student Name :</th>
            <td><?php echo $data['name'] ;?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Email address :</th>
            <td><?php echo $data['email'];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Password :</th>
            <td>******</td>
          </tr>
            <tr>
            <th class="text-right" width="150">Class :</th>
            <td><?php echo $data["classname"];?></td>
          </tr>
           <tr>
            <th class="text-right" width="150">Roll number :</th>
            <td><?php echo $data["roll"];?></td>
          </tr>
                 <tr>
            <th class="text-right" width="150">Subject :</th>
            <td><ul>
            <?php 
            while($data1=mysqli_fetch_assoc($result1)){

              ?>
              <li>


          <?php echo $data1['subjectname'];?></li>
             <?php } ?>
           </ul>
            
          </td>



       
          </tr>
              


          </table>

          
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>