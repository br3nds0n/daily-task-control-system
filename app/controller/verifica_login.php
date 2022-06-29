<?php
require_once ("../../infra/database/connection.php");

session_start();

$email = $_POST['login'];
$senha = md5($_POST['senha']);

$query = "select * from $database.usuario where email = '".$email."' and senha = '".$senha."'";

$result = mysqli_query($con, $query);
var_dump($result);
if(mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_array($result);
    
    $_SESSION['cod']   = $dados['cod'];
    $_SESSION['nome']   = $dados['nome'];
    $_SESSION['email']  = $dados['email'];
    $_SESSION['perfil'] = $dados['perfil_cod'];

    header('location:../core/home.php');
} else {
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);

  echo $email;
  echo $senha;

  header("Location:../views/login.php?erro=2");
}
?>