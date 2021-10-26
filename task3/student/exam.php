<?php
 session_start();
 include("../includes/header2.php");


 ?>


  <?php
      if(isset($_POST['submit']))
      {
        $exam=$_POST['exam'];
        $insert_exam="INSERT INTO exam VALUES(NULL,'$exam',0,'not graded');";


                 if(mysqli_query($conn,$insert_exam))
                {
                   $_SESSION['success']=1;
        
                }
                 else
                {
                     $_SESSION['error']=1;
                   
                 }
      }

  ?>
  <style>

    .select-exam
    {
      width:35%;
    }
    @media screen and (max-width: 767px) {
.select-exam
{
  width:100%;
}
}

  </style>
<div class="col py-3">
 <br><br>

<div class="container">

   <!--<h4>Subject</h4>

<ul>
	    
           while($data1){

              ?>
             
                <li><?php //echo $data1['subjectname']?></li>
                
            
     } ?>
    </ul>-->

    <h1>Exam</h1>

       <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <strong>Exam has done successfully! </strong>
          </div>
        <?php } ?>

    <p>Want to give a exam?</p>
    <h6>Class : <?php echo $data['classname']; ?></h6>
    <h6>Full marks : 100</h6>
    <h6>Time : 1 hour</h6><br><br>
    <form action="" method="POST">
    	       <select name="exam" class="form-control select-exam">
                <option>Select a subject</option>
          <?php  while($data2=mysqli_fetch_array($result1)){
          	?>
               <option value='<?php echo $data2['subjectid'];?>'><?php echo $data2['subjectname']?></option>
         <?php  }
          ?>
                  </select><br>

                  <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
    </form>




</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>



  <?php unset($_SESSION['success']); ?>