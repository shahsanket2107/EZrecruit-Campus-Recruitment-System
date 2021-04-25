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
    $title = "Dashboard";
    include("templates/head.php");
  ?>
  
  <body>

  <font face="calibri">
    
  <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">My Dashboard</p>
  </div>

  <br>
  <br>

    <div class="container">

      <?php if(isset($_SESSION['jobApplySuccess'])) { ?> 
      <div>
                <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have applied successfully!</p>
              </div>
      <?php unset($_SESSION['jobApplySuccess']); } ?>


      <!-- Other dashboard functions -->
      <div align="center">
          <a href="applied-jobs.php" style="background-color: #053a5a; border-color: transparent; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 18px; text-decoration: none;">Your Applied Jobs</a>
          <a href="resume.php" style="background-color: #053a5a; border-color: transparent; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 18px; text-decoration: none;">Upload/Download Resume</a>
      </div>
      <Br>
      <hr style="border-color:#053a5a;">
      <div style="height: 80px;">
    <p style="font-size: 38px; color: black; text-align: center; line-height: 75px;">Active Jobs</p>
  </div>



      <!-- Search & Apply to Job Posts -->
      <div class="row">

            <table border="2px solid #053a5a" class="table-striped" width="100%">
              <thead>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Job Name</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Company Name</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Job Description</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Minimum Salary</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Maximum Salary</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Experience</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 10%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Qualification</th>
                <th style="padding-left: 15px; padding-right: 15px; font-size: 22px; width: 15%; padding-top: 10px; padding-bottom: 10px; color: #053a5a;">Action</th>
              </thead>
              <tbody>
                <?php 
                  $sql = "SELECT * FROM job_post as A INNER JOIN company as B ON A.id_company = B.id_company";                  
                  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {
                      $sql1 = "SELECT * FROM apply_job_post WHERE id_user='$_SESSION[id_user]' AND id_jobpost='$row[id_jobpost]'";
                      $result1 = $conn->query($sql1);
                      
                     ?>
                      <tr>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['jobtitle']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['companyname']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['description']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;">Rs.<?php echo $row['minimumsalary']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;">Rs.<?php echo $row['maximumsalary']; ?></td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['experience']; ?> Years</td>
                        <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 10%; padding-top: 10px; padding-bottom: 10px;"><?php echo $row['qualification']; ?></td>
  
                        <?php
                        if($result1->num_rows > 0) {
                          ?>
                            <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><strong>Applied!</strong></td>
                          <?php
                        } else {
                       ?>
                       <td style="padding-left: 15px; padding-right: 15px; font-size: 20px; width: 15%; padding-top: 10px; padding-bottom: 10px;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>">Apply</a></td>
                       <?php } ?>
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
          <br><br>

    <div class="footer" style="background-color: #053a5a; height: 80px;bottom: 0;width: 100%;left: 0;padding-top: 5px;padding-bottom: 5px">

    <p style="color:white;font-size: 20px;text-align: center;"> 
      Copyright &copy; 2020-2021 <a href="index.php" style="color:white;">EZrecruit </a>
    </p>
    <p style="color:white; font-size: 20px; text-align: center;"> 
      Any query? Write us down at <a href ="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" style="color:white;">EZrecruit@gmail.com </a>
    </p>

  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(function(){
        $(".successMessage:visible").fadeOut(5000);
      });
    </script>
  </font>
  </body>
</html>