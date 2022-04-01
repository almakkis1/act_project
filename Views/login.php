
<?php 

  require 'style/header.php'; 
  include 'includes/Open-db.php';
  include 'includes/fetch.php';

  
?>



<main class="login-main">   
  <div class="center">
    <h1>Login</h1>
    <form action="login.php" method="POST">
       <div class="txt_field">
         <input type="text" required name = "username">
         <span></span>
         <label>Username</label>
       </div>
       <div class="txt_field">
         <input type="password" required name = "pass">
         <span></span>
         <label>Password</label>
       </div>
       <div class="pass">Forgot Password?</div>
       <input type="submit" name = "submit" value = "Login" id="TT">
       <div class="signup_link">
         Not a member? <a href="signup.php">Signup</a>
       </div>
    </form>
  </div>    
</main> 

<?php

require 'style/footer.php';
mysqli_close($connect);
?>