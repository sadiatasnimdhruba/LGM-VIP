<?php
 session_start();
 include("../includes/db.php");

$sql="select class.name, count(students.c_id) as count_students
from class,students
where class.id=students.c_id
group by students.c_id";
$result=mysqli_query($conn,$sql);

 include("../includes/header.php");
 ?>
 <br><br><br><br><br>
<div class="container">
	<h1 class="text-center">All classes</h1>
          <table class="table">
            <thead>
              <th>Class</th>
              <th>No. of students</th>
          </thead>
          <tbody>
      
           <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
                 <tr>
                 	<td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['count_students']; ?></td>
                 </tr>

           <?php  }
                ?>
          </tbody>
      </table>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      </body>
      </html>