<?php   
    // include_once 'icludes/dbh.inc.php';
    require "header.php";  
        ?>
    <main class="body">
        
    <div>
        <form class="row g-3">
            <div class="col-12">
                <input type="text" class="form-control"name="scammer"  placeholder="Scammer's number or link ..." >
            </div>
        <div class = "text">
            <div class="col-auto">
            <button name ="btnSearch" type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
        <div class="col-auto">
            <button name="btnReport" type="submit" class="btn btn-primary mb-3" id="rep">Report</button>
        </div>
        </div>
        </form>
    </div>

    </main>
<?php 
    require "footer.php";
        ?>