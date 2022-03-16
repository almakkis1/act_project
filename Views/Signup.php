<?php require 'style/header.php'?>
<form  class="rowg-3" action="icludes/loginindex.php" method="POST">
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
  </form>
  <?php require 'style/footer.php'?>