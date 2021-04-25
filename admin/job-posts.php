<?php
//To Handle Session Variables on This Page
session_start();
//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Job Posts List";
    include('templates/head.php');
  ?>

  <body>
    

  <font face="calibri">
    
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php'); ?>
    
     <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 73px;">Admin Panel</p>
  </div>
  <br>

    <div class="container">
      <div class="row">
        <div class="col-md-12" align="center">
          <div class="list-group" align="center" style="width: 50%; border: 1px solid #053a5a; border-radius: 5px;">
            <a href="dashboard.php" class="list-group-item" style="font-size: 20px;">Dashboard</a>
            <a href="user.php" class="list-group-item" style="font-size: 20px;">Users</a>
            <a href="company.php" class="list-group-item" style="font-size: 20px;">Company</a>
            <a href="job-posts.php" class="list-group-item active" style="font-size: 20px;">Job Posts</a>
          </div>
        </div>
        <br>
         <div class="col-md-12" align="center" style="font-size: 22px;" id="print">
        <?php
          $sql = "SELECT * FROM job_post";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            echo '<h3>Total Number of Job Posts: ' . $result->num_rows . '</h3>'; 
          }
        ?>
        <br>
          <table class="table">
            <thead>
              <th style="font-size: 22px; color: #053a5a; width: 5%">Sr.No</th>
              <th style="font-size: 22px; color: #053a5a; width: 15%">Job Title</th>
              <th style="font-size: 22px; color: #053a5a; width: 20%">Job Description</th>
              <th style="font-size: 22px; color: #053a5a; width: 15%">Minimum Salary</th>
              <th style="font-size: 22px; color: #053a5a; width: 15%">Maximum Salary</th>
              <th style="font-size: 22px; color: #053a5a; width: 20%">Total Users Applied</th>
              <th style="font-size: 22px; color: #053a5a; width: 5%">Action</th>
            </thead>
            <tbody>
              <?php
                $sql = "SELECT * FROM job_post";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  while($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td style="font-size: 20px;"><?php echo ++$i; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['jobtitle']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['description']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['minimumsalary']; ?></td>
                        <td style="font-size: 20px;"><?php echo $row['maximumsalary']; ?></td>
                        <?php
                          $sql1 = "SELECT COUNT(apply_job_post.id_apply) AS totalNo FROM job_post INNER JOIN apply_job_post ON job_post.id_jobpost=apply_job_post.id_jobpost WHERE job_post.id_jobpost='$row[id_jobpost]'";
                          $result1 = $conn->query($sql1);
                          if($result1->num_rows > 0) {
                             while($row1 = $result1->fetch_assoc()) {
                            ?>
                             <td><?php echo $row1['totalNo']; ?></td>
                            <?php
                          }
                        }
                        ?>
                        <td><a href="delete-job-post.php?id=<?php echo $row['id_jobpost']; ?>">Delete</a></td>
                      </tr>
                    <?php
                  }
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><br>
  <div align="center">
  <button onclick="printDiv('print')" style="background-color: #053a5a; width: 120px; height: 50px; padding-left: 10px; padding-right: 10px; font-size: 22px; color:white; border-color: transparent; border-radius: 5px;">Print</button>
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
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

  </body>
</html>