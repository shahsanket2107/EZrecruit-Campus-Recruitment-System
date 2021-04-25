<?php
session_start();
if(empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Dashboard";
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
            <a href="dashboard.php" class="list-group-item active" style="font-size: 20px;">Dashboard</a>
            <a href="user.php" class="list-group-item" style="font-size: 20px;">Users</a>
            <a href="company.php" class="list-group-item" style="font-size: 20px;">Company</a>
            <a href="job-posts.php" class="list-group-item" style="font-size: 20px;">Job Posts</a>
          </div>
        </div>
        <div class="col-md-12" align="center">
          <h3 style="font-size: 30px;">Welcome To Dashboard, Admin!</h3>
        </div>
      </div>
    </div>
    <br><Br>

    <?php include('templates/footer.php') ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </font>
  </body>
</html>