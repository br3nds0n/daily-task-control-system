<?php
if (!isset($_SESSION['login']) and !isset($_SESSION['senha'])) {
  header("Location:../views/login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <a href="">Cadastrar Tarefa</a>
  <a href="">Listar Tarefas</a> 
  <a href="">Sair</a><br>

  <table>
    <tr>
      <td>Titulo</td>
      <td>Data</td>
      <td>Hora</td>
      <td>Opções</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</body>
</html>