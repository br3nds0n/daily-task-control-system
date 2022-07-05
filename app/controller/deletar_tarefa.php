<?php

require_once ("../../infra/database/connection.php");
session_start();

$cod_usuario = $_GET['cod'];

$sql = "DELETE FROM tarefas WHERE cod = $cod_usuario";

$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location: ../core/home.php");
}

?>