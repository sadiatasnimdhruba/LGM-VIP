 <?php 
session_start();
 include("../includes/header.php");
  include("../includes/db.php");

  $id=$_GET['id'];
 $sql="select exam.*,subject.name as subjectname,class.name as classname,students.name,students.roll,students.id as s_id
from exam,subject,class,students
where exam.sub_id=subject.id AND subject.c_id=class.id AND class.id=students.c_id AND exam.id=$id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);


 if(isset($_POST['submit']))
      {
        $marks=$_POST['marks'];
        $grade=$_POST['grade'];
        $id=$data['id'];
        echo $id;
        $update_grade="UPDATE exam SET marks='$marks', grade='$grade' where id='$id'";


                 if(mysqli_query($conn,$update_grade))
                {
                   $_SESSION['success']=1;
                   header("Location: result.php");
                          
                }
                 else
                {
                     $_SESSION['error']=1;
                     
                 }
      }

      

  ?>
  <br><br><br><br>
<div class="container">
	<h1 class="text-center">All students</h1>
          <hr>


          <table class ="table">
               <tr>
            <th class="text-right" width="150">Exam ID :</th>
            <td><?php echo $data['id'] ;?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Class :</th>
            <td><?php echo $data['classname'];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Roll number :</th>
            <td><?php echo $data["roll"];?></td>
          </tr>
            <tr>
            <th class="text-right" width="150">Student's Name :</th>
            <td><?php echo $data["name"];?></td>
          </tr>
           <tr>
            <th class="text-right" width="150">Subject :</th>
            <td><?php echo $data["subjectname"];?></td>
          </tr>

          </table>

          <form action="" method="POST">
       <div class="form-group" style="width:35%;">
              <label>Update marks :</label>
              <input required type="text" class="form-control" name="marks" placeholder="Student name" value="<?php echo $data['marks']; ?>">
            </div>
        <br>
            <div class="form-group" style="width:35%;">
              <label>Update Grade :</label>
               <select name="grade"  class="form-control">
               <option value="<?php echo $data['grade']; ?>"><?php echo $data['grade']; ?></option>
               <option value="A+">A+</option>
               <option value="A">A</option>
               <option value="A-">A-</option>
               <option value="B+">B+</option>
               <option value="B">B</option>
               <option value="B-">B-</option>
               <option value="C+">C+</option>
               <option value="C">C</option>
               <option value="D">D</option>
               <option value="F">F</option>
              
              </select>
              
            
            </div><br><br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
          </form>
      </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
  </body>
  </html>