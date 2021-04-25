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
    $title = "User Profile";
    include("templates/head.php");
  ?>
  
  <body>

  <font face="calibri">

    <!-- Navigation Bar Start -->
  <?php include('templates/header.php') ?>

    <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">View / Update Profile</p>
  </div>

  <br>

      <div class="container">
        <div class="row">

            <form method="post" action="updateprofile.php">
                        <div class="col-md-6">
              <?php 
                $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
               ?>
              <div class="form-group">
                <label for="fname" style="font-size: 20px; color: #053a5a;">First Name :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black;" type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $row['firstname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="lname" style="font-size: 20px; color: #053a5a;">Last Name :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $row['lastname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email" style="font-size: 20px; color: #053a5a;">Email Address :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="email" class="form-control" id="email"  placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="address" style="font-size: 20px; color: #053a5a;">Address :</label>
                <textarea style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; color: black; " id="address" name="address" class="form-control" rows="4" placeholder="Address"><?php echo $row['address']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="city" style="font-size: 20px; color: #053a5a;">City :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $row['city']; ?>">
              </div>
              <div class="form-group">
                <label for="state" style="font-size: 20px; color: #053a5a;">State :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="state" name="state" placeholder="State" value="<?php echo $row['state']; ?>">
              </div>
                  </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="contactno" style="font-size: 20px; color: #053a5a;">Contact Number :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="number" class="form-control" id="contactno" minlength="10" maxlength="10" name="contactno" placeholder="Contact Number" value="<?php echo $row['contactno']; ?>">
              </div>

              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="qualification">Highest Qualification :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification" value="<?php echo $row['qualification']; ?>">
              </div>
              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="stream">Stream :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="stream" name="stream" placeholder="Stream" value="<?php echo $row['stream']; ?>">
              </div>
              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="passingyear">Passing Year :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="date" class="form-control" id="passingyear" name="passingyear" placeholder="Passing Year" value="<?php echo $row['passingyear']; ?>">
              </div>
              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="dob">Date of Birth :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>">
              </div>
              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="age">Age :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="age" name="age" placeholder="Age" value="<?php echo $row['age']; ?>">
              </div>
              <div class="form-group" style="font-size: 20px; color: #053a5a;">
                <label for="designation">Designation :</label>
                <input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; color: black; " type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo $row['designation']; ?>">
              </div>          </div>
            <div class="col-md-12">
              <br>
            </div>
            <div class="col-md-12">
              <div class="text-center">
                <button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 15%; height: 50px; border-color: transparent; border-radius: 5px;">Update</button>
              </div>
            </div>
              <?php 
                }
              }
            ?>

            </form>
          </div>
        </div>
      </div>

      <br>

    <div class="footer" style="background-color: #053a5a; height: 80px;bottom: 0;width: 100%;left: 0;padding-top: 5px;padding-bottom: 5px">

    <p style="color:white;font-size: 20px;text-align: center;"> 
      Copyright &copy; 2020-2021 <a href="index.php" style="color:white;">EZrecruit </a>
    </p>
    <p style="color:white; font-size: 20px; text-align: center;"> 
      Any query? Write us down at <a href ="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" style="color:white;">EZrecruit@gmail.com </a>
    </p>

  </div>

    <!-- Navigation Bar End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</font>
  </body>
</html>