<?php   
    // include_once 'icludes/dbh.inc.php';
    require "header.php";  
        ?>
    <main class="body">
        
    <div>
        <form class="row g-3">
            <div class="mp-3" id="scam1">
                <input type="text" class="form-control"name="scammer" id = "scam" placeholder="Scammer's number or link ..." >
            </div>
        <div class = "text">
            <div class="col-auto">
            <button name ="btnSearch" type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
        <div class="col-auto">
            <button name="btnReport" type="submit" class="btn btn-primary mb-3" id="rep"><a href="login1.php">Report</a> </button>
        </div>
        </div>
        </form>
    </div>

    </main>
<?php 
    require "footer.php";
        ?>