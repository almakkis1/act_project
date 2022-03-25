<?php
if(isset($_POST['submit']) ){
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $fullname = $_POST['firstname'].' '.$_POST['lastname'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO users(username,first_name,last_name,phone_number,fullname,pass)
  VALUES ('$username' ,'$firstname' ,'$lastname', '$phone', '$fullname', '$pass')"; 
  if(mysqli_query($connect,$sql)){

    header('Location: login-index.php');
  }else{
      echo 'ERROR'. mysqli_connect_errno();
  }
}
?>