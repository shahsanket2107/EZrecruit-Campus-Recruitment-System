<?php
session_start();
if(empty($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  
  <?php 
    $title="Create Job Posts";
    include('templates/head.php');
  ?>

  
  <body>

    <font face="calibri">
    
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Create Job Post</p>
  </div>

  <br>
  <br>

    <section>
      <div class="container">
        <div class="row" align="center">
            <form method="post" action="addpost.php">

              <table>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Job Title&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="jobtitle" name="jobtitle" placeholder="Job Title" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Job Description&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><textarea style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" id="description" name="description" placeholder="Job Description" rows="5" cols="21"  required=""></textarea></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Minimum Salary&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="number" id="minimumsalary" name="minimumsalary" placeholder="Minimum Salary" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Maximum Salary&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="number" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Experience Required&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="experience" name="experience" placeholder="Experience Required" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Qualification Required&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="qualification" name="qualification" placeholder="Qualification Required" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 50%; height: 50px; border-color: transparent; border-radius: 5px;">Create</button></td>
                </tr>


              </table>

              </div>
              <?php 
              if(isset($_SESSION['registerError'])) {
                ?>
                <div>
                  <p class="text-center">Email Already Exists! Choose A Different Email!</p>
                </div>
              <?php
               unset($_SESSION['registerError']); }
              ?>     
            </form>
          </div>
        </div>
      </div>
    </section>

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
  </font>
  </body>
</html>