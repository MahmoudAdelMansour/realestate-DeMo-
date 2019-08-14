<?php @session_start(); ?>
<?php require 'header.php';  ?>
  <?php
      if (isset($_SESSION["loginuser"])) {
        header("LOCATION:dashe.php");
      }
    ?>
    <main class="index-main">
          <div class="wrapper fadeInDown">
              <div id="formContent">
                    <!-- Icon -->
                    <div class="fadeIn first">
                      <img src="https://img.icons8.com/dusk/64/000000/admin-settings-male.png" id="icon" alt="User Icon" />
                    </div>
                    <!-- Login Form -->
                    <form action="inc/check.php" method="post">
                      <input type="text" id="login" class="fadeIn third " name="login" placeholder="login">
                      <input type="password" id="password" class="fadeIn third" name="loginpass" placeholder="password">
                      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
                    </form>
              </div>
              <?php if ($_GET['error'] == "errAdmin"){echo "<div class=\"alert alert-danger\" role=\"alert\">This is a danger Wrong username or Password</div>";} ?>
            </div>
    </main>
<?php require 'footer.php'; ?>
