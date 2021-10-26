<?php
include("../includes/db.php");
$id=$_GET['id'];



  include("../includes/header2.php");

?>

        <div class="col py-3">
            <h1>Student individual information</h1><br><br>
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
            <td><?php echo $data["password"];?></td>
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