<?php

require_once ("../../infra/database/connection.php");

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = md5($_POST['senha']);
$perfil = 2;

$sql = "INSERT INTO  usuario (nome, email, senha, perfil_cod) VALUES('$nome', '$email', '$senha', $perfil)";

$result = mysqli_query($con, $sql);

if($result == true){
  header("Location: ../views/login.php");
}

?>