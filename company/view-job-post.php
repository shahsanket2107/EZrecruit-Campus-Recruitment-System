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
    $title="View Job Posts";
    include('templates/head.php');
  ?>

  <body>
    
   <font face="calibri">
    
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">All Job Posts</p>
  </div>

  <br>
  <br>

    <div class="container">
      <div class="row" align="center">
            <table style="width: 100%;">
              <thead align="center">
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Job Name</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Job Description</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Minimum Salary</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Maximum Salary</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Experience</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Qualification</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Created At</th>
                <th style="font-size: 20px; color: #053a5a; padding-right: 15px; padding-left: 15px;">Action</th>
              </thead>
              <tr>
                <td colspan="8"><hr style="border-color: black;"></td>
              </tr>
              <tbody>
                <?php 
                  $sql = "SELECT * FROM job_post WHERE id_company='$_SESSION[id_user]'";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                    {
                     ?>
                      <tr>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['jobtitle']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['description']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['minimumsalary']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['maximumsalary']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['experience']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo $row['qualification']; ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></td>
                        <td style="font-size: 20px; padding-right: 15px; padding-left: 15px;"><a href="edit-job-post.php?id=<?php echo $row['id_jobpost']; ?>">Edit</a>|<a href="delete-job-post.php?id=<?php echo $row['id_jobpost']; ?>">Delete</a></td>
                      </tr>
                      <tr>
                        <td colspan="8"><br></td>
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
  </body>
</html>