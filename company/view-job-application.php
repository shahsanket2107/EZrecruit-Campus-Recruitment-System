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
    $title="Application Details";
    include('templates/head.php');
  ?>

  <body>
    
    <!-- NAVIGATION BAR -->
   <font face="calibri">
    
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Application Details</p>
  </div>

  <br>
  <br>

    <div class="container">
      <div class="row" align="center">
        <table style="width: 100%;">
          <thead>
            <th style="font-size: 20px; color: #053a5a">Job Post Name</th>
            <th style="font-size: 20px; color: #053a5a">Job Description</th>
            <th style="font-size: 20px; color: #053a5a">User Name</th>
            <th style="font-size: 20px; color: #053a5a">Action</th>
          </thead>
                        <tr>
                <td colspan="8"><hr style="border-color: black;"></td>
              </tr>
          <tbody>
            <?php
              $sql ="SELECT * FROM apply_job_post INNER JOIN job_post ON apply_job_post.id_jobpost=job_post.id_jobpost INNER JOIN users ON apply_job_post.id_user=users.id_user WHERE apply_job_post.id_company='$_SESSION[id_user]' AND apply_job_post.status='0'";
              $result=$conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  ?>
                    <tr>
                      <td style="font-size: 20px;"><?php echo $row['jobtitle']; ?></td>
                      <td style="font-size: 20px;"><?php echo $row['description']; ?></td>
                      <td style="font-size: 20px;"><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                      <td style="font-size: 20px;"><a href="view-application.php?id_user=<?php echo $row['id_user']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>">View</a></td>
                    </tr>
                  <?php
                }
               }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <br><br>

        <?php include('templates/footer.php') ?>

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