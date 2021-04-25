<?php
//To Handle Session Variables on This Page
session_start();
//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if(empty($_SESSION['id_user'])) {
  header("Location: ../index.php");
  exit();
}
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    $title = "Upload Resume";
    include("templates/head.php");
  ?>
  
  <body>

    <font face="calibri">
    
    <!-- NAVIGATION BAR -->
  <?php include('templates/header.php') ?>

      <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Upload Resume</p>
  </div><br><br>

    <div class="container">      
      <div class="row" align="center">

      <?php if(isset($_SESSION['uploadError'])) { ?>
      <div class="row">
        <div class="col-md-12 successMessage">
          <div class="alert alert-danger">
            <?php echo $_SESSION['uploadError']; ?>
          </div>
        </div>
      </div>
      <?php unset($_SESSION['uploadError']); } ?>





              <form action="upload-resume.php" method="post" enctype="multipart/form-data">
                <div>
                  <label style="font-size: 22px;">Upload Resume (PDF or DOC allowed!)</label>
                  <br><br>
                  <input type="file" name="resume" class="form-control" required="" style="width: 35%; border:2px solid black;">
                </div><br>
                <div>
                  <input type="submit" value="Upload" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 12%; height: 45px;">
                </div>
              </form>
    
      </div>
    </div>
    <br><br>

<?php include('templates/footer.php') ?>s

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </font>
  </body>
</html>