<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  
  <?php
    $title="Register";
    include('templates/head.php');
  ?>

  
  <body>

  <font face="calibri">
    
  <!-- Navigation Bar Start -->

  <?php include('templates/header.php'); ?>

  <!-- Navigation Bar End -->

  <div style="background-color: white; height: 80px;">
    <p style="font-size: 34px; color: #053a5a; text-align: center; line-height: 73px;">Register</p>
  </div>

  <br>
  <br>

  <div class="container" align="center">
    <div class="row">
      <div style="background-color:#3895D3; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: white; line-height: 75px;"><a href="register.php" style="color: white;"> Candidate Register </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color:#3895D3; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: white; line-height: 75px;"><a href="company-register.php" style="color: white;"> Company Register </a></h1>
      </div>
    </div>
  </div>

  <br>
  <br>

  <!-- Footer Start -->
  
  <?php include('templates/footer.php') ?>

  <!-- Footer End -->

  </font>

  </body>
</html>