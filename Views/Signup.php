<?php require 'style/header.php'?>
<main class="signup">
<div class="container">
  <div class="title">Registration</div>
  <form action="">
    <div class="user-details">
      <div class="input-box">
        <span class="details">Full name</span>
        <input type="text" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <span class="details">First name</span>
        <input type="text" placeholder="Enter your first name" required>
      </div>      <div class="input-box">
        <span class="details">Last name</span>
        <input type="text" placeholder="Enter your last name" required>
      </div>      <div class="input-box">
        <span class="details">Username</span>
        <input type="text" placeholder="Enter your username" required>
      </div>      <div class="input-box">
        <span class="details">Phone Number</span>
        <input type="text" placeholder="Enter your number" required>
      </div>      <div class="input-box">
        <span class="details">Password</span>
        <input type="text" placeholder="Enter your password" required>
      </div>      <div class="input-box">
        <span class="details">Repeat Password</span>
        <input type="text" placeholder="Repeat your password" required>
      </div>
    </div>
    <div class="gender-details">
      <span class="gender-title">Gender</span>
      <div class="category">
        <label for="">
          <span class="dot one"></span>
          <span class="gender">Male</span>
        </label>
        <label for="">
          <span class="dot one"></span>
          <span class="gender">Female</span>
      </div>
    </div>
    <div class="btn">
      <input type="submit" value="Register">
    </div>
  </form>
</div>
</main>
<!-- <form  class="rowg-3" action="icludes/loginindex.php" method="POST">
    <div id="a1">
      <input type="text" class="form-control" name="first" placeholder="First Name">
    </div>
    <div id="a2">
      <input type="password" class="form-control" name="last" placeholder="Last Name">
    </div>
    <div id="a3">
      <input type="text" class="form-control" name="num" placeholder="Number...">
    </div>
    <div id="a4">
      <input type="text" class="form-control" name="uid" placeholder="Username">
    </div>
    <div id="a5">
      <input type="password" class="form-control" name="pwd" placeholder="Password">
    </div>
    <div id="a6">
      <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
    </div>
    <div id="btn">
      <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
    </div>
  </form> -->
  <?php require 'style/footer.php'?>