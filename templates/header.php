  <section>

  <div class="row">

  <header>
    <nav class="navbar-navbar default" style="margin-bottom: 0; height: 80px; background-color: #053a5a; border-color: transparent; padding-left: 40px ;padding-right: 40px ">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" style="font-size: 24px; color: white; line-height: 42px;" href="index.php">EZrecruit</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
            <li style="padding-right: 25px;"><a href="user/dashboard.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Dashboard</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Logout</a></li>
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <li style="padding-right: 25px;"><a href="company/dashboard.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Dashboard</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Logout</a></li>
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