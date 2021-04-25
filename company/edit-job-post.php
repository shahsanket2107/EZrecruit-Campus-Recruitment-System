<?php
session_start();
if(empty($_SESSION['id_user'])) {
    header("Location: user/dashboard.php");
    exit();
  }
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    $title="Edit Job Post";
    include('templates/head.php');
  ?>

  <body>
     <font face="calibri">
    <!-- NAVIGATION BAR -->
    <?php include('templates/header.php') ?>

  <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Update Job Post</p>
  </div>

  <br>
  <br>

    <section>
      <div class="container">
        <div class="row" align="center">
            <form method="post" action="editpost.php">
            <?php
            $sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]' AND id_company='$_SESSION[id_user]'";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                {
            ?>

            <table>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Job Title&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="jobtitle" name="jobtitle" value="<?php echo $row['jobtitle']; ?>" placeholder="Job Title" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Job Description&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><textarea style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" id="description" name="description" placeholder="Job Description" required=""><?php echo $row['description']; ?></textarea></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Minimum Salary&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="number" id="minimumsalary" value="<?php echo $row['minimumsalary']; ?>" name="minimumsalary" placeholder="Minimum Salary" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Maximum Salary&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="number" id="maximumsalary" name="maximumsalary" value="<?php echo $row['maximumsalary']; ?>" placeholder="Maximum Salary" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Experience Required&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="experience" name="experience" value="<?php echo $row['experience']; ?>" placeholder="Experience Required" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td style="font-size: 22px; text-align: right; color: #053a5a;">Qualification Required&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td style="font-size: 22px; color: #053a5a;">:&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td><input style="font-size: 20px; padding-right: 15px; padding-left: 15px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border: 1px solid #053a5a;" type="text" id="qualification" name="qualification" value="<?php echo $row['qualification']; ?>" placeholder="Qualification Required" required=""></td>
                </tr>

                <tr>
                  <td colspan="3"><br></td>
                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td><button type="submit" style="font-size: 18px; background-color: #053a5a; color: white; width: 50%; height: 50px; border-color: transparent; border-radius: 5px;">Update</button></td>
                </tr>


              </table>

              <input type="hidden" name="target_id" value="<?php echo $_GET['id']; ?>">

              <?php 
                }
              } else {
                header("Location: dashboard.php");
                exit();
              }
              ?>     
            </form>
          </div>
        </div>
      </div>
    </section>
    <br><br>
  <?php include('templates/footer.php') ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>