<?php 

    require 'style/header.php';


?>


<div class="searchcontainer">
    <form action="comment.php" method = "GET">
            <input type="text" name="search" placeholder="SCAMMER NUMBER OR LINK ..." id="input"><br>
            <button class="searchbtn line" type="submit" name="searchsubmit" value="succ"><a href="comment.php" id="link">Search</a></button>
            <button class="searchbtn line" type="submit" name="reportsubmit"><a href="report.php" id="link">Report</a> </button>
            <?php global $Tool ?>
        </form>
</div>


<?php 

require 'style/footer.php';
?>