<!DOCTYPE html>
<head>
    <title>Register</title>
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

<form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">number</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>

    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">report</button>
    </div>
  </form>

</body>
</html>