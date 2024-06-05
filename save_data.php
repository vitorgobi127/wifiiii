<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $data = "$username|$password\n";

  $fp = fopen("user_data.txt", "a");
  fwrite($fp, $data);
  fclose($fp);
?>