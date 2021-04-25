<?php
  //To Handle Session Variables on This Page
  session_start(); 
  //If user is already logged in then redirect them back to dashboard. 
  //This is required if user tries to manually enter login.php in URL.
  if(isset($_SESSION['id_user'])) {
    header("Location: company/dashboard.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Forgot Password";
    include('templates/head.php');
  ?>

  <body>

  <font face="calibri">

   <?php include('templates/header.php'); ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Forgot Password</p>
  </div>

  <br>
  <br>
        <section>
      <div class="container">
        <div class="row" align="center">
            <form method="post" action="companypasswordreset.php">
              <div>

              <table style="border:none;">
              <tr>
                <td><label for="email" style="font-size: 22px; color: #053a5a;">Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px;  padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px; " type="email" id="email" name="email" placeholder="Email" required=""></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td><label for="newpassword" style="font-size: 22px; color: #053a5a;">New Password</label></td>
                <td style="font-size: 22px; color: #053a5a;">:</td>
                <td><input style="font-size: 20px;  padding:4px; padding-left: 10px; padding-right: 10px; border: 1px solid black; border-radius: 5px; " type="password" id="newpassword" name="newpassword" placeholder="New Password" required=""></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 75%; height: 50px; border-color: transparent; border-radius: 5px;">Reset Password</button></td>
              </tr>
              </table>
              <br>
              </div>
              <?php 
              //If User have successfully registered then show them this success message
              //Todo: Remove Success Message without reload?
              if(isset($_SESSION['emailNotFoundError'])) {
                ?>
                <div>
                  <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">This Email does not exist In Database!</p>
                </div>
              <?php
               unset($_SESSION['emailNotFoundError']); }
              ?>   
            </form>
        </div>
      </div>
    </section>
    <br>
  <?php include('templates/footer.php') ?>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(function() {
        $("#successMessage:visible").fadeOut(10000);
      });
    </script>
  </font>
  </body>
</html>