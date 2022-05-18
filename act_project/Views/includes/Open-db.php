<?php

$connect = mysqli_connect('localhost', 'root', '', 'tvtc');

if(!$connect){
  echo 'ERROR' . mysqli_connect_errno();
}

?>