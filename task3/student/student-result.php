<?php
include("../includes/db.php");

include("../includes/header2.php");
$id=$_GET['id'];


$sql="select exam.*,subject.name as subjectname,class.name as classname,students.name,students.roll,students.id as s_id
from exam,subject,class,students
where not (marks=0 AND grade='not graded') AND exam.sub_id=subject.id AND subject.c_id=class.id AND class.id=students.c_id AND students.id='$id';";
$result=mysqli_query($conn,$sql);

?>




 <br><br><br><br><br>
<div class="container p-3">
	<h1>Your result</h1>
	<br><br> 
	 
          <table class="table">
            <thead>
            
              <th>Subject</th>
              <th>Marks</th>
              <th>Grade</th>
            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['subjectname']?></td>
                <td><?php echo $row['marks']?></td>
                <td><?php echo $row['grade']?></td>

            

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
      </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>
