<?php
session_start();
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  
  <?php
    $title = "Applied Jobs";
    include("templates/head.php");
  ?>

  <body>

  <font face="calibri">
    
  <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Applied Jobs</p>
  </div>

  <br>
  <br>

    <div class="container">
      <div class="row" align="center">
            <table border="2px solid #053a5a" class="table-striped" width="100%">
              <thead>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 20%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Job Name</th>
                <th style="padding-left: 15px; padding-right: 15px; width: 40%; font-size: 22px; color: #053a5a;">Job Description</th>
                <th style="padding-left: 15px; padding-right: 15px; width: 20%; font-size: 22px; color: #053a5a;">Created At</th>
                <th style="padding-left: 15px; padding-right: 15px; width: 20%; font-size: 22px; color: #053a5a;">Status</th>
              </thead>
              <tbody>
                <?php 
                  $sql = "SELECT * FROM job_post INNER JOIN apply_job_post ON job_post.id_jobpost=apply_job_post.id_jobpost WHERE apply_job_post.id_user='$_SESSION[id_user]'";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {
                      
                     ?>
                      <tr>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 20%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['jobtitle']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; width: 40%; font-size: 20px;"><?php echo $row['description']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; width: 20%; font-size: 20px;"><?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; width: 20%; font-size: 20px; color: red;"><?php 
                        if($row['status'] == 0) {
                          echo "Pending";
                        } else if($row['status'] == 1 ) {
                          echo "Rejected";
                        } else {
                          echo "Rejected";
                        }
                        ?>
                      </td>
                      </tr>
                     <?php
                    }
                  }
                  $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <?php include('templates/footer.php') ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </font>
  </body>
</html>