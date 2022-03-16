
<?php require 'style/header.php'; ?>
    <form >
      <div>
        <form action="report.php" method="POST">        <label for="number" id="txt">Mobile number</label>
        <label for="Password" id="txt2" >Password</label>
                      
          <input type="email" id="number" name="lognumber">
          <input type="password" id ="password" name="logPassword">
        
          <button type="submit" name="btnLogin" id = "submit">Login</button>
        </form>
      </div>
      <a href="Signup.php">Signup</a>
    </form>


<?php require 'style/footer.php';?>