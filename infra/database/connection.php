<?php

$server   = "127.0.0.1";
$user     = "root";
$password = "12345678";
$database = "tarefasdiarias";

$con = mysqli_connect($server, $user, $password, $database);

if(!$con){
  echo "Falha na conexao: " . mysqli_connect_error();
}

mysqli_select_db($con, $database);

?>