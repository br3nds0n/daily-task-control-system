<?php

$server    = "127.0.0.1";
$user     = "root";
$password = "12345678";
$database = "tarefasdiarias";

$con = mysqli_connect($server, $user, $password, $database);

if (mysql_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db($con, $database);

?>