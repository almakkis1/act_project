<?php

if (isset($_POST["signup-submit"])){

    require 'dbh.inc.php';

    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $number = $_POST['num'];
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($firstname)||empty($lastname)||empty($number)||empty($username)||empty($password)||empty($passwordRepeat)){
        header("location: ../signup.php?error=emptyfields&first=".$firstname."&last=".$lastname."&num=".$number."uid=".$username);
        exit();
    }
    else if (!filter_var($number,FILTER_VALIDATE_EMAIL)){
        header("location: ../signup.php?error=invalidnumber=".$number);
        exit();
    }
    else if (filter_var($username,FILTER_VALIDATE_EMAIL))
    header("location: ../signup.php?error=invalidnumber=".$number);
        exit();
}