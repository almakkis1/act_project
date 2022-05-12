<html>
    <head>
        
        <title>Scammer Book</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style/navbar.css">   
        <link rel="stylesheet" href="style/login.css">
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="style/signup.css">
        <link rel="stylesheet" href="style/login-index.css">
        <link rel="stylesheet" href="style/comment.css">

        
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="brand">Scammer book</div>
                <div class = "navbar-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="profile.php">Contact us</a></li>
                        <div class="navlog">
                            <form action="loginindex" method="POST">
                                <div class="navinpout">
                                    <input type="text" name="uid" placeholder="Username">
                                    <input type="password" name="pass" placeholder="Password">
                                </div>
                                <button type="submit" name="login" id="navbtn">Login</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>