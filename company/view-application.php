<?php
//To Handle Session Variables on This Page
session_start();
//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title="User Application";
    include('templates/head.php');
  ?>

  <body>
    
<font face="calibri">
    
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">View User Application</p>
  </div>

  <br>
  <br>

    <div class="container">
      <div class="row">
        <div class="panel panel-info">
          <div class="panel-body" style="font-size: 20px; border: 2px solid #053a5a;">
            <?php
              $sql ="SELECT * FROM apply_job_post INNER JOIN users ON apply_job_post.id_user=users.id_user WHERE apply_job_post.id_user='$_GET[id_user]' AND apply_job_post.id_jobpost='$_GET[id_jobpost]'";
              $result=$conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
              ?>

              <table>

                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><?php echo $row['email']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Address</td>
                  <td>:</td>
                  <td><?php echo $row['address']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>City</td>
                  <td>:</td>
                  <td><?php echo $row['city']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>State</td>
                  <td>:</td>
                  <td><?php echo $row['state']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Contact No</td>
                  <td>:</td>
                  <td><?php echo $row['contactno']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Qualification</td>
                  <td>:</td>
                  <td><?php echo $row['qualification']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Stream</td>
                  <td>:</td>
                  <td><?php echo $row['stream']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Passing Year</td>
                  <td>:</td>
                  <td><?php echo $row['passingyear']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Date Of Birth&nbsp;&nbsp;&nbsp;</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?php echo $row['dob']; ?></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td>Designation</td>
                  <td>:</td>
                  <td><?php echo $row['designation']; ?></td>
                </tr>

              </table>

              <br>

                <?php
                if(isset($row['resume'])) {
                  ?>
                  <a href="../uploads/resume/<?php echo $row['resume']; ?>" class="btn btn-success" download="<?php echo $row['firstname']; ?>" style="font-size: 20px;">Download Resume</a>
                  <?php
                }
                ?>
                <a href="reject-user.php?id_user=<?php echo $_GET['id_user']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" class="btn btn-danger" style="font-size: 20px;">Reject User</a>

              <?php } } ?>

          </div>
        </div>
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
      $(function() {
        $(".successMessage:visible").fadeOut(2000);
      });
    </script>
  </body>
</html>