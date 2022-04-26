<?php
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
    <link rel="stylesheet" href="Style/comment.css">
    <link rel="stylesheet" href="Style/navbar.css">
</head>
<body>
    <section>
        <div class="container"> 
            <div class="box1"></div>   
                <div class="user1">User</div>
                <div class="report">scammer</div>
                <div class="contant">
                <?php
                    foreach($comment as $comm){

                        echo $comm['scamer'];
                        echo "</br>";
                        echo "</br>";

                    }
                    ?> 
                </div>
            <div class="box2"></div>
                <div class="user2">user</div>
                <div class="comment">
                    <?php
                    foreach($comment as $comm){

                        echo $comm['comment'];
                        echo "</br>";
                        echo "</br>";

                    }
                    ?>
                </div>
                <div class="user"></div>
                <div class="input">
                    <input type="text" placeholder="the comment...">
                    <button type="submit" class="btn">Send</button>
                </div>
        </div> 
    </section>
</body>
</html>