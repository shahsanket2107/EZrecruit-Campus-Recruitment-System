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
    $title = "Job Details";
    include("templates/head.php");
  ?>
  
  <body>

  <font face="calibri">
    
  <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Job Details</p>
  </div>

  <br>
  <br>

<div class="container">
    
    <?php 
      $sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]'";
      $result = $conn->query($sql);
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
        ?>

        <table align="center">

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Job Title</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['jobtitle']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Job Description</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['description']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Minimum Salary</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['minimumsalary']; ?> per Month</td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Maximum Salary</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;Rs.<?php echo $row['maximumsalary']; ?> per Month</td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Experience Required</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['experience']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr style="font-size: 30px;">
            <td style="color: #053a5a;"><strong>Qualification Required</strong></td>
            <td style="color: #053a5a;"> &nbsp;&nbsp;&nbsp;<strong>:</strong> </td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $row['qualification']; ?></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr>
            <td colspan="3"><br></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><a href="apply.php?id=<?php echo $row['id_jobpost']; ?>" style="background-color: #053a5a; border-color: transparent; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 24px; text-decoration: none;">Apply</a></td>
          </tr>

        </table>

        <?php 
        }
      }
    ?>

  </div>

  <br>
  <br>
  <br>

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

  </font>
  </body>
</html>