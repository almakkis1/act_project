<?php



if(isset($_POST['submit']) ){
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $fullname = $_POST['firstname'].' '.$_POST['lastname'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];


  $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
  $fullname = mysqli_real_escape_string($connect, $_POST['firstname'].' '.$_POST['lastname']);
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $pass = mysqli_real_escape_string($connect, $_POST['pass']);
  $phone = mysqli_real_escape_string($connect, $_POST['phone']);

  foreach($users as $user){
   echo $user['username'];
  }

  $sql = "INSERT INTO users(username,first_name,last_name,phone_number,fullname,pass)
  VALUES ('$username' ,'$firstname' ,'$lastname', '$phone', '$fullname', '$pass')"; 
  if(mysqli_query($connect,$sql)){

    header('Location: login.php');

  }else{
      echo 'ERROR'. mysqli_connect_errno();
  }
}

mysqli_close($connect);
?>