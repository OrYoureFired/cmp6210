<?php
  $host='db:3306';
  $user= 'db-user';
  $pass='password';
  $db='photographic';
  
  $conn= new mysqli($host, $user, $pass, $db) or die ("Failed to Connect to DB: %s\n". $conn -> error);

?>