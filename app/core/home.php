<?php
require_once("../controller/bloqueio.php");
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
  <a href="../views/cadastro_tarefa.php">Cadastrar Tarefa</a>
  <a href="../core/home.php">Listar Tarefas</a> 
  <a href="../controller/sair.php">Sair</a><br>

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