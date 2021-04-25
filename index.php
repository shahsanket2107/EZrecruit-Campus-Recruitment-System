<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>

      .container1 {
        position: relative;
        width: 100%;
        margin-top: 0;
      }

      .container1 img {
        width: 100%;
        height: auto;
      }

      .container1 .btn1 {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: black;
        color: silver;
        font-size: 24px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }

    </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>

  <body style="background-color: #D3D3D3">

  <font face="calibri">

<section>

  <div class="row">
  <header>
    <nav class="navbar-navbar default" style="margin-bottom: 0; height: 80px; background-color: #053a5a; border-color: transparent; padding-left: 40px ;padding-right: 40px ">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="mask flex-center rgba-blue-light">
          <a class="navbar-brand" style="font-size: 24px; color: white; line-height: 42px;" href="index.php">EZrecruit</a>
        </div>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
            <li style="padding-right: 25px;"><a href="user/dashboard.php" style="font-size: 24px; color:white; line-height: 42px;">Dashboard</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: white; line-height: 42px;">Logout</a></li>
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <li style="padding-right: 25px;"><a href="company/dashboard.php" style="font-size: 24px; color: white; line-height: 42px;">Dashboard</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color:white; line-height: 42px;">Logout</a></li>
            <?php } else { 
            ?>
            <li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: white; line-height: 42px;">Search for Jobs</a></li>
            <li style="padding-right: 25px;"><a href="mainregister.php" style="font-size: 24px; color: white; line-height: 42px;">Register</a></li>
            <li style="padding-right: -25px;"><a href="mainlogin.php" style="font-size: 24px; color: white; line-height: 42px;">Login</a></li>
          <?php } ?>
          </ul>
        </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

<!--   <section>
    <div class="container1">
      <img src="img/tp3.jpg" style="width: 100% ; height:400px"  alt="Snow">
      <a href="search.php"><button class="btn1">Search for Jobs</button></a>
    </div>
  </section> -->

<section>
<div class="container" style="width: 100%; height: 20%">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">
      <div class="item active">
        <img src="img/ezr1.png" alt="image1" style="width:100%;height:500px">
      </div>

      <div class="item">
        <img src="img/ezr2.png" alt="image2" style="width:100%;height:500px">
      </div>
    
      <div class="item">
        <img src="img/ezr3.jpeg" alt="image3" style="width:100%;height:500px">
      </div>

      <div class="item">
        <img src="img/ezr4.jpg" alt="image3" style="width:100%;height:500px">
      </div>
      <div class="item">
        <img src="img/ezr5.jpg" alt="image3" style="width:100%;height:500px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
  <br>

  <div align="center">

    <form action ="" method = "post">

      <input style="font-size: 18px; color: black; padding: 7px; border: 1px solid black; border-radius: 5px;" name="search" type="text" size="30" placeholder="Search for Jobs"/>

      <input type="submit" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 150px; height: 45px;" value="Search" />

    </form> 

    <br>

    <?php 

    $output = '';

    if(isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = mysqli_query($conn,"SELECT * FROM job_post WHERE jobtitle LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);

    if($count == 0){
    ?>
    <p style="font-size: 22px; color: #053a5a;">No Results Found!</p> 
    <?php
    }else{

    ?>

    <div class="container">
      <div class="row">
        <table style="width: 100%;">
          <tr>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Title</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Description</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Minimum Salary</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Maximum Salary</td>
          </tr>
        </table>
      </div>
    </div>

  </div>

  <?php

  while ($row = mysqli_fetch_array($query)) {
  ?>

  <div class="container">
    <div class="row">
      <table style="width: 100%;" border="1" class="table-striped">

        <tr>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['description']; ?></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['minimumsalary']; ?> per Month</td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['maximumsalary']; ?> per Month</td>
        </tr>

      </table>
    </div>
  </div>

        <?php 
      }
    }
  }
  ?>

  <br>
  </div>
  </div>

  <section>
    <div class="container">
      <div class="row">

        <h2 class="text-center" style="color: black; font-size: 30px;">Latest Job Posts</h2>

        <br>

        <?php 

        $sql = "SELECT * FROM job_post ORDER BY id_jobpost DESC limit 5";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
        $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) 
        {

        ?>

        <div align="left">

        <h4 style="font-size: 28px;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a><span class="pull-right" style="font-size: 20px;">Rs. <strong><?php echo $row['maximumsalary']; ?> per Month</span></strong></h4>

        <div style="font-size: 19px;">
        <div><strong>Company Name : </strong><?php echo $row1['companyname']; ?> | <strong>Head Office : </strong><?php echo $row1['headofficecity']; ?> | <strong>Experience Required : </strong><?php echo $row['experience']; ?> Years</div>
        </div>

        <hr style="border-color:black;">

        </div>

        <?php
        }
        }
        }
        }
        ?>

      </div>
    </div>
  </section>

  <br><br>


  <div class="footer" style="background-color: #053a5a; height: 80px ;bottom: 0;width: 100%;left: 0;padding-top: 5px;padding-bottom: 5px">

    <p style="color:white;font-size: 20px;text-align: center;"> 
      Copyright &copy; 2020-2021 <a href="index.php" style="color:white;">EZrecruit </a>
    </p>
    <p style="color:white; font-size: 20px; text-align: center;"> 
      Any query? Write us down at <a href ="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" style="color:white;">EZrecruit@gmail.com </a>
    </p>

  </div>

  </body>
</html>