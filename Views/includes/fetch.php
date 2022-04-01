<?php

  $sql1 = 'SELECT * FROM users';
  $result = mysqli_query($connect,$sql1);
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

?>