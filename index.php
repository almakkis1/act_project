<?php   include_once "includes/dbh.inc.php"; ?>

<html>
    <head>
        <title>Scammer Book</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
 

    </head>
    
    <body class="container">

        <div class="row align-items-center">
        <form class="row g-3">
    
        <div class="mb-3">
            <input  type="text" placeholder="Scammer's number or link ..." aria-label=".form-control-lg example" name = "textRepSear">
        </div>
        
        <div class="col-auto">
            <button name ="btnSearch" type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
        <div class="col-auto">
            <button name="btnReport" type="submit" class="btn btn-primary mb-3" >Report</button>
        </div>
    
        </form>
    </div>
        <div class="row align-items-center">
            <form class="row g-3">

                <div class="col-auto">
                    <button name ="register" type="submit" class="btn btn-primary mb-3">register</button></br>
                    <button name="Login" type="submit" class="btn btn-primary mb-3" >Login</button>
                </div>

            </form>
        </div>

    </body>
</html>
    
