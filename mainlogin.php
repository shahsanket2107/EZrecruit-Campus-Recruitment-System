<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Login";
    include('templates/head.php');
  ?>
  
  <body>

  <font face="calibri">
    
  <!-- Navigation Bar Start -->

  <?php include('templates/header.php'); ?>

  <!-- Navigation Bar End -->

  <div style="background-color: white; height: 80px;">
    <p style="font-size: 34px; color: #053a5a; text-align: center; line-height: 73px;">Login</p>
  </div>

  <br>
  <br>

  <div class="container" align="center">
    <div class="row">
      <div style="background-color: #3895D3; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="login.php" style="color: white;"> Candidate Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color: #3895D3; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="company-login.php" style="color: white;"> Company Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color: #3895D3; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="admin/index.php" style="color: white;"> Admin Login </a></h1>
      </div>
    </div>
  </div>

  <br>
  <br>

  <!-- Footer Start -->

      <div class="footer" style="background-color: #053a5a; height: 80px;bottom: 0;width: 100%;left: 0;padding-top: 5px;padding-bottom: 5px">

    <p style="color:white;font-size: 20px;text-align: center;"> 
      Copyright &copy; 2020-2021 <a href="index.php" style="color:white;">EZrecruit </a>
    </p>
    <p style="color:white; font-size: 20px; text-align: center;"> 
      Any query? Write us down at <a href ="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" style="color:white;">EZrecruit@gmail.com </a>
    </p>

  </div>

  <!-- Footer End -->

  </font>

  </body>
</html>