
<?php 
  require 'style/header.php'; 
  include 'includes/Open-db.php';
  include 'includes/fetch.php';
  include 'form/fsginup.php';
?>

<?php

if (isset($_POST["submit"])){
  
  $account_number = $_POST['Phone'];
  foreach($users as $user){

    if($_POST['Phone'] == $user['phone_number']){


      

      if($_POST['pass'] == $user['pass']){

        header("location: login-index.php");
      }   
    }
  }
}

?>


<main class="login-main">   
  <div class="center">
    <h1>Login</h1>
    <form action="login.php" method="POST">
       <div class="txt_field">
         <input type="text" required name = "Phone">
         <span></span>
         <label>Phone</label>
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

?>