<!DOCTYPE html>
<head>
    <title>Signup</title>
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
top: 40%;
left: 50%;
right: 10%;
margin-top: -100px;
margin-left: -200px;
color: white;
}
</style>
</head>
<body>

<form class="row g-3" action="icludes/loginindex.php" method="POST">
    <div class="col-md-6">
      <input type="text" class="form-control" name="first" placeholder="First Name">
    </div>
    <div class="col-md-6">
      <input type="password" class="form-control" name="last" placeholder="Last Name">
    </div>
    <div class="col-12">
      <input type="text" class="form-control" name="num" placeholder="Number...">
    </div>
    <div class="col-12">
      <input type="text" class="form-control" name="uid" placeholder="Username">
    </div>
    <div class="col-12">
      <input type="password" class="form-control" name="pwd" placeholder="Password">
    </div>
    <div class="col-12">
      <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
    </div>
  </form>

</body>
</html>