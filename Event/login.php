<?php require 'includes/header.php';
 ?>

  <section class="signup-form">
    <h2 class="text-centre text-white">Log in</h2>
    <div class="signup-form-form">
      <form action="" method="post">
        <input type="text" name="emailusername" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="login-submit">Log in</button>
      </form>
    </div>


//includes/login.inc.php

</section>
<br>
<div class="footer">
  <div class="container white-text text-centre" >
    <p> All rights are reserved 2021. Designed By <a href="#">Brenda Kuekia</a></p>
</div>

</div>


</body>
</html>

<?php
// Here we check whether the user got to this page by clicking the proper login button.
if (isset($_POST['login-submit'])) {


  // We grab all the data which we passed from the signup form so we can use it later.
  $emailusername = $_POST['emailusername'];
  $password = $_POST['password'];

 /************** Validation Part *******/

  if(empty($emailusername))
  {

    echo "Please Eneter Username";
    exit();
  }

  else if(empty($password))
  {

    echo "Please Enter Password";
    exit();
  }

  else
  {
    /* Login User Part ****/

     $sql = "SELECT * FROM users WHERE username='$emailusername' OR email='$emailusername'";

     $user=mysqli_query($conn,$sql);
     $user=mysqli_fetch_assoc($user);

     $password_db = $user['password'];
     $password_form= $password;

     if(password_verify($password_form, $password_db))
     {

         $_SESSION['username'] = $user['username'];

         header('Location:admin/manage.events.php');

     }
     else
     {
       echo "Invalid Username or password";

     }


  }



}
