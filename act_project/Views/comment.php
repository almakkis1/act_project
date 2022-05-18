<?php
    require 'style/header.php'; 
    include 'includes/Open-db.php';

    global $Tool;
    $sql = 'SELECT * FROM comment';
    $result = mysqli_query($connect,$sql);
    $comment = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    $Tool = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/cmnt.css">
    <!-- <link rel="stylesheet" href="Style/navbar.css"> -->
</head>
<body>
    <section>
        <div class="container"> 
            <div class="box2">
                
                <div class="user2">user</div>
                <div class="comment">
                
                                      
                    <?php
                    
                    $count = 0;
                    foreach($comment as $comm){
                        if($comm['scamer'] == $_GET['search']){
                        echo '('.$comm['scamer'].') '.$comm['comment'];
                        echo "</br>";
                        echo "</br>";
                        $count++;
                        }
                    }
                    if($count == 0){
                            
                        echo "<h3>"; 
                        echo 'The Number Is  Not Define In Our Record.</br>if you want you can</br> report him just prees on this button';
                        echo "</br>";
                        echo '<button type = "submit"><a href = report.php> Report </a></button>';
                        echo "</h3>";

                        
                    }
                    ?>  
                   
            </div>
                <div class="user"></div>
                <div class="input">
                    <input type="text" placeholder="the comment...">
                    <button type="submit" class="btn">Send</button>
                </div>
            </div> 
        </div>
    </section>
</body>
</html>
