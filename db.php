<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'user',
  'Mysql!123456789',
  'dbs'
) or die(mysqli_erro($mysqli));

?>
