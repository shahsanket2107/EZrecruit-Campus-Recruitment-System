<?php
  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }

  require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Company Registration";
    include('templates/head.php');
  ?>
  
  <body>

  <font face="calibri">

  <?php include('templates/header.php'); ?>

  <div style="background-color: white; height: 80px;">
    <p style="font-size: 34px; color: #053a5a; text-align: center; line-height: 73px;">Register as a Company</p>
  </div>

  <br>

  <p style="font-size: 18px; color: red; text-align: center;"> ( Fields marked with * are required. ) </p>

  <br>

  <section>
    <div class="container">
      <div class="row" align="center">
        <form method="post" action="addcompany.php">

          <div>

            <table style="border:none;">

              <tr>
                <td><label for="companyname" style="font-size: 20px; color: #053a5a;">Company Name&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companyname" name="companyname" placeholder="Company Name *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="headofficecity" style="font-size: 20px; color: #053a5a;">Head Office City&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="headofficecity" name="headofficecity" placeholder="Head Office City *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="contactno" style="font-size: 20px; color: #053a5a;">Contact Number&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="Number" id="contactno" pattern=".{10,10}" minlength="10" maxlength="10" name="contactno" placeholder="Contact Number *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="website" style="font-size: 20px; color: #053a5a;">Website&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="website" name="website" placeholder="Website"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="companytype" style="font-size: 20px; color: #053a5a;">Company Type&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="text" id="companytype" name="companytype" placeholder="Company Type"></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="email" style="font-size: 20px; color: #053a5a;">Company Email Address&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="email" id="email" name="email" placeholder="Email Address *" required=""></td>
              </tr>

              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>

              <tr>
                <td><label for="password" style="font-size: 20px; color: #053a5a;">Password&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td style="font-size: 20px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input style="font-size: 20px; padding-left: 15px; padding-right: 15px; border: 1px solid black; border-radius: 5px; width: 100%; height: 40px; " type="password" id="password" name="password" placeholder="Password *" required=""></td>
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
          if(isset($_SESSION['registerError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Email already Exists!</p>
          </div>
          <?php
          unset($_SESSION['registerError']);}
          ?>

        </form>
      </div>
    </div>
  </section>

  <br>
    <div class="footer" style="background-color: #053a5a; height: 80px;bottom: 0;width: 100%;left: 0;padding-top: 5px;padding-bottom: 5px">

    <p style="color:white;font-size: 20px;text-align: center;"> 
      Copyright &copy; 2020-2021 <a href="index.php" style="color:white;">EZrecruit </a>
    </p>
    <p style="color:white; font-size: 20px; text-align: center;"> 
      Any query? Write us down at <a href ="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" style="color:white;">EZrecruit@gmail.com </a>
    </p>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </font>
  </body>
</html>