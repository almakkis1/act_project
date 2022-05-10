<?php
  //  require 'style/header.php'; 
   include 'includes/Open-db.php'; 

?>

<?php

if(isset($_POST['submit'])){

  $scamer = $_POST['scamer'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO `comment`(`scamer`,`comment`) VALUES ('$scamer','$comment')"; 

  if(mysqli_query($connect,$sql)){

  header('Location: comment.php');
}else{
    echo 'ERROR'. mysqli_connect_errno();
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/report.css">
</head>
<body>
      
        <div class="container">
          <div class="wrapper">
            <section class="post">
              <header>Report</header>
              <form action="report.php" method='POST'>
                <div class="content">
                  <img src="icons/images.jpg" alt="logo">
                  <div class="details">
                    <p>@theuser</p>
                    <!-- <div class="privacy">
                      <i class="fas fa-user-friends"></i>
                      <span>Friends</span>
                      <i class="fas fa-caret-down"></i>
                    </div> -->
                  </div>
                </div>
                <textarea type="number" placeholder="The scammer number" spellcheck="false" name='scamer' required></textarea>
                <textarea type="text" placeholder="The report..." spellcheck="false" name='comment' required ></textarea>
                <div class="theme-emoji">
                  <img src="icons/theme.svg" alt="theme">
                  <img src="icons/smile.svg" alt="smile">
                </div>
                <div class="options">
                  <p>Add to Your Post</p>
                  <ul class="list">
                    <li><img src="icons/gallery.svg" alt="gallery"></li>
                    <li><img src="icons/tag.svg" alt="gallery"></li>
                    <li><img src="icons/emoji.svg" alt="gallery"></li>
                    <li><img src="icons/mic.svg" alt="gallery"></li>
                    <li><img src="icons/more.svg" alt="gallery"></li>
                  </ul>
                </div>
                <button type="submit" value ='submit' name='submit'>Submit</button>
              </form>
            </section>
          </div>
        </div>
</body>

</html>
