 <?php 
session_start();
 include("../includes/header.php");
  include("../includes/db.php");

  $sql="select subject.*,class.name as classname
   from subject join class
   on subject.c_id=class.id";
  $result=mysqli_query($conn,$sql);

   

  ?>
  <?php
  if(isset($_POST['submit']))
      {
        $subject=$_POST['subject'];
        $select_class=$_POST['select_class'];
        $insert_subject="INSERT INTO subject VALUES(NUll,'$select_class','$subject')";


                 if(mysqli_query($conn,$insert_subject))
                {
                   $_SESSION['success']=1;
                   header("Location: subject.php");
                          
                }
                 else
                {
                     $_SESSION['error']=1;
                     echo "error";
                     
                 }
      }

?>
  <br><br><br><br><br>
<div class="container">
	<div class="row">
        	<div class="col-5">
	<h1 class="text-center">All subjects</h1>
	<br><br> 
  <?php if(isset($_SESSION['suc'])){?>
          <div class="alert alert-success mt-5">
            <strong>Sucessfully deleted the subject</strong>
          </div>
           <?php }?>

	
          <table class="table">
            <thead>
              
              <th>Class</th>
              <th>Subject</th>
              <th>Action</th>
             
            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
              	<td><?php echo $row['classname']; ?></td>
                <td><?php echo $row['name']; ?></td>
                 <td class="text-center">
                   <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="delete_subject.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i> Delete  </a>
                 </td>
                

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
      </div>
      <div class="col-2"></div>
      <div class="col-5">
      	<h1>Add subjects</h1><br><br>
      	 <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <strong>Subject added successfully! </strong>
          </div>
        <?php } ?>
      	<form action="subject.php" method="POST">
      		<div class="form-group">
              <label>Subject Name :</label>
              <input required type="text" class="form-control" name="subject" placeholder="Subject name">
            </div><br>
            <div class="form-group">
              <label>Class :</label>
              <select name="select_class" class="form-control">
              	<option value="select">Select a class</option>
              	<option value="1">1</option>
              	<option value="2">2</option>
              	<option value="3">3</option>
              	<option value="4">4</option>
              	<option value="5">5</option>
              	<option value="6">6</option>
              	<option value="7">7</option>
              	<option value="8">8</option>
              	<option value="9">9</option>
              	<option value="10">10</option>

              </select> 
            </div><br><br>
             <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
      	</form>
      </div>
  </div>
      </div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>


<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['suc']); ?>