<?php 
  session_start();
  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Candidate Login";
    include('templates/head.php');
  ?>
  
  <body>

  <font face="calibri">

    <!-- Navigation Bar Start -->

    <?php include('templates/header.php'); ?>

  <div style="background-color: white; height: 80px;">
    <p style="font-size: 34px; color: #053a5a; text-align: center; line-height: 75px;">Candidate Login</p>
  </div>

  <br>
  <br>

    <section>
      <div class="container">
        <div class="row" align="center">
            <form method="post" action="checklogin.php">
              <div>

              <table style="border:none;">
              <tr>
                <td><label for="email" style="font-size: 22px; color: #053a5a;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px; " type="email" id="email" name="email" placeholder="Email" required=""></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td><label for="password" style="font-size: 22px; color: #053a5a;">Password</label></td>
                <td style="font-size: 22px; color: #053a5a;">:</td>
                <td><input style="font-size: 20px; padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px;" type="password" id="password" name="password" placeholder="Password" required=""></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><a href="forgot-password.php" style="font-size: 22px; color: red;">Forgot Password? Click Here...</a></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 50%; height: 50px; border-color: transparent; border-radius: 5px;">Submit</button></td>
              </tr>
              </table>
              <br>
              </div>
              <?php
              if(isset($_SESSION['registerCompleted'])){                
                ?>
              <div>
                <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have registered successfully!</p>
              </div>
              <?php
              unset($_SESSION['registerCompleted']);}
              ?>

              <?php
              if(isset($_SESSION['loginError'])){                
                ?>
              <div>
                <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password</p>
              </div>
              <?php
              unset($_SESSION['loginError']);}
              ?>
            </form>
        </div>
      </div>
    </section>
    <br>

  <?php include('templates/footer.php') ?>

    <!-- Navigation Bar End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
      $(function(){
        $("#successMessage:visible").fadeOut(5000);
      });
    </script>

  </font>
  </body>
</html>