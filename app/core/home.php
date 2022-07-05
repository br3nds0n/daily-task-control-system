<?php
require_once("./bloqueio.php");

$cod = $_SESSION['cod'];
if ($_SESSION['perfil'] != 1) {
  $sql = "SELECT * FROM tarefas WHERE usuario_cod = $cod ORDER BY data ASC";
} else {
  $sql = "SELECT * FROM tarefas t, usuario u WHERE t.usuario_cod = u.cod ORDER BY data ASC";
}

$result_tarefas = mysqli_query($con, $sql);
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
  <a href="../core/sair.php">Sair</a><br>

  <table border = "1">
    <tr>
      <?php 
        if ($_SESSION['perfil'] == 1) {
      ?>
      
      <td>Usuario</td>
      <?php } ?>
      <td>Titulo</td>
      <td>Data</td>
      <td>Hora</td>
      <td>Opções</td>
    </tr>
    <?php foreach ($result_tarefas as $tarefa){ ?>
    <tr>
    <?php 
        if ($_SESSION['perfil'] == 1) {
      ?>
      <td><?= $tarefa['nome'] ?></td>
      <?php } ?>
      <td><?= $tarefa['titulo'] ?></td>
      <td><?= date("d/m/Y", strtotime($tarefa['data'])); ?></td>
      <td><?= $tarefa['hora'] ?></td>
      <td>
        <a href="../views/editar_tarefa.php?cod=<?= $tarefa['cod'] ?>">Editar</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>