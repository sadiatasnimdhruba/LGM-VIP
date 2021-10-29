<?php
session_start();
$url="http://localhost/lgm/task2/";

include("../includes/db.php");

$sql="select students.*,class.name as class_name
 from students
 join class
 on students.c_id=class.id";
$result=mysqli_query($conn,$sql);


 include("../includes/header.php");

 ?><br><br><br><br><br>
<div class="container">
	<h1 class="text-center">All students</h1><br>

  <?php if(isset($_SESSION['success'])){?>
          <div class="alert alert-success mt-5">
            <strong>Sucessfully removed the student</strong>
          </div>
           <?php }?>
          <table class="table">
            <thead>
              <th>Roll</th>
              <th>Name</th>
              <th>Class</th>
              <th class="text-center">Actions</th>
            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
                <td><?php echo $row['roll']?></td>
                <td><?php echo $row['name']?></td>
                <td ><?php echo $row['class_name']?></td>
              
                <td class="text-center">
                  <a class="btn btn-info mb-2" href="view_student.php?id=<?php echo $row['id'];?>"><i class="fa fa-eye"></i> View  </a>
                   <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="delete_student.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i> Delete  </a>
                
                </td>

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      </body>
      </html>
      <?php unset($_SESSION['success']); ?>