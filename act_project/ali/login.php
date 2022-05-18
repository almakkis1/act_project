<?php 
    include  'includes/dbh.inc.php';
    $conn;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
    body {
    background-image: url('https://www.soudfa.com/content/blog-articles/en-076.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;

    height: 200px;
    width: 400px;

    position: fixed;
    top: 50%;
    left: 5%;
    right: 10%;
    margin-top: -100px;
    margin-left: -200px;
    color: white;
}
</style>
</head>
<body class="container">
   <div class="row align-items-center">
            <form action="">
                <div class="mb-3">
                  <label for="number" >Mobile number</label>
                  <input type="email" id="number" name="lognumber">
                </div>
                <div class="mb-3">
                  <label for="Password" name="logPassword">Password</label>
                  <input type="password" id="Password">
                </div>
                <button type="submit" name="btnLogin">Login</button>
              </form>
</div>
</body>
</html>