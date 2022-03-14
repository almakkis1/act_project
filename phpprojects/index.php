<?php   include_once "icludes/dbh.inc.php";
    require "header.php";  
        ?>
    <main class="body">
        
    <div>
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

    </main>
<?php 
    require "footer.php";
        ?>