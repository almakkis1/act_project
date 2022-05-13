<?php
    require 'style/header.php'; 
    include 'includes/Open-db.php';
    
    $sql = 'SELECT * FROM comment';
    $result = mysqli_query($connect,$sql);
    $comment = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);



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
                    
                    if(isset($_GET["searchsubmit"])){

                        $Tool = $_GET["search"];
                    }else{
                        $Tool =" ";
                    }
                    
                    foreach($comment as $comm){
                        if($comm['scamer'] == $Tool){
                        echo '('.$comm['scamer'].') '.$comm['comment'];
                        echo "</br>";
                        echo "</br>";
                        }
                        elseif($comm['scamer'] != $Tool){
                            
                        echo "<h3>"; 
                        echo 'The Number Is  Not Define In Our Record.</br>if you want you can</br> report him just prees on this button';
                        echo $Tool."</br>";
                        echo '<button type = "submit"><a href = report.php> Report </a></button>';
                        echo "</h3>";

                        break;
                        }
                    }
                    ?>  
                   
            </div>
                <div class="user"></div>
                <div class="input">
                    <form action="report.php" method="POST">
                    <input name="scamer" value="<?php echo $Tool?>">
                    <input type="text" name="comment" placeholder="the comment...">
                    <button type="submit" name="send" class="btn">Send</button>
                    <?php


                    ?>
                </form>
                </div>
            </div> 
        </div>
    </section>
</body>
</html>
