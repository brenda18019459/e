<?php
require 'includes/header.php';
?>



<section class="signup-form">
  <h2 class="text-centre text-white">Sign Up</h2>
  <div class="signup-form-form">
    <form action="includes/register.inc.php" method="post">
      <input type="text" name="full_name" placeholder="Full name...">
      <input type="text" name="username" placeholder="Username...">
      <input type="text" name="email" placeholder="Email...">
      <input type="password" name="password" placeholder="Password...">
      <input type="password" name="pwdRepeat" placeholder="Repeat password...">
      <button type="submit" name="signup-submit">Sign up</button>
    </form>
  </div>
  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords doesn't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
</section>

<div class="footer">
  <div class="container white-text text-centre" >
    <p> All rights are reserved 2021. Designed By <a href="#">Brenda Kuekia</a></p>
</div>

</div>


</body>
</html>
