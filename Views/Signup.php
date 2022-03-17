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
      <input type="radio" name="gender" id="dot-1">
      <input type="radio" name="gender" id="dot-2">
      <span class="gender-title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span class="gender">Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span class="gender">Female</span>
      </div>
    </div>
    <div id="btn">
      <input type="submit" value="Register">
    </div>
  </form>
</div>
</main>
  <?php require 'style/footer.php'?>