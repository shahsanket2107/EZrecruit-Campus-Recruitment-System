<?php 
  session_start();
  if(isset($_SESSION['id_admin'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title="Admin Login";
    include('templates/head.php');
  ?>
  
  <body>

  <font face="calibri">

    <!-- Navigation Bar Start -->

<section>
  <div class="container">
  <div class="row">
  <header>
    <nav class="navbar navbar-default" style="margin-bottom: 0; height: 80px; background-color: white; border-color: transparent;">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" style="font-size: 24px; color: #053a5a; line-height: 42px;" href="index.php">EZrecruit</a>
        </div>
      </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

      <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 73px;">Admin Login</p>
  </div>
  <br>

    <section>
      <div class="container">
        <div class="row" align="center">

            <form method="post" action="checklogin.php">
            <table>
              <tr>
                <td style="font-size: 22px;">Username&nbsp;&nbsp;&nbsp;</td>
                <td style="font-size: 22px;">:&nbsp;&nbsp;&nbsp;</td>
                <td><input type="text" id="username" name="username" placeholder="Username" required="" style="font-size: 20px; padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border:1px solid black;"></td>
              </tr>
              <tr>
                <td colspan="3"><br></td>
              </tr>
              <tr>
                <td style="font-size: 22px;">Password</td>
                <td style="font-size: 22px;">:</td>
                <td><input type="password" id="password" name="password" placeholder="Password" required="" style="font-size: 20px; padding-left: 10px; padding-right: 10px; padding-top: 5px; padding-bottom: 5px; border-radius: 5px; border:1px solid black;"></td>
              </tr>
              <tr>
                <td colspan="3"><br></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><button type="submit" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 70%; height: 45px;">Submit</button></td>
              </tr>

            </table> 

              <br>
              <?php
              if(isset($_SESSION['loginError'])){                
                ?>
              <div>
                <p style="text-align: center; color: red; font-size: 28px;">Invalid Username or Password</p>
              </div>
              <?php
              unset($_SESSION['loginError']);}
              ?>
            </form>

          </div>
        </div>
      </div>
    </section>

    <Br><br>

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