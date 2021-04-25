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
    $title = "Resume";
    include("templates/head.php");
  ?>
  
  <body>
    
      <font face="calibri">
  <?php include('templates/header.php') ?>

      <div style="background-color: #053a5a; height: 80px;">
    <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Upload / Download Resume</p>
  </div>

    <div class="container" align="center">      
      <div class="row">
        <br><br><br>
        <div>
          <a href="resume-upload.php" class="btn btn-success" style="background-color: #3895D3; border:2px solid black; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 20px; text-decoration: none;">Upload Resume</a>
        </div>
        <br><br>
        <?php
        $sql = "SELECT resume FROM users WHERE id_user='$_SESSION[id_user]' AND resume IS NOT NULL";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          ?>
        <div>
          <a href="../uploads/resume/<?php echo $row['resume']; ?>" style="background-color: #3895D3; border:2px solid black; border-radius: 5px; padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 13px; color: white; font-size: 20px; text-decoration: none;" download="Resume">Download Resume</a>
        </div>
        <?php } ?>
      </div>
    </div>

    <br><br><br>

<?php include('templates/footer.php') ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </font>
  </body>
</html>