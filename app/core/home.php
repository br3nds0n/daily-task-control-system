<?php
require_once("./bloqueio.php");

$cod = $_SESSION['cod'];

if(isset($_GET['busca'])){
  $busca = $_GET['busca'];
}else{
  $busca = '';
}

if ($_SESSION['perfil'] != 1) {
  $sql = "SELECT *, t.cod AS codt FROM tarefas t WHERE usuario_cod = $cod AND (titulo LIKE '%$busca%' OR descricao LIKE '%$busca%') ORDER BY DATA, hora ASC";
} else {
  $sql = "SELECT *, u.cod AS codu, t.cod AS codt FROM tarefas t, usuario u WHERE t.usuario_cod = u.cod  AND (titulo LIKE '%$busca%' OR descricao LIKE '%$busca%' OR  u.nome LIKE '%$busca%')ORDER BY DATA, hora ASC";
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
  <a href="../core/sair.php">Sair</a><br><br>
  
  <form action="">
    <input type="text" name="busca" placeholder="digite para buscar">
    <button>ir</button>
  </form>

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
      <td>Categoria</td>
      <td>Opções</td>
    </tr>
    <?php foreach ($result_tarefas as $tarefa){ ?>
    <tr>
    <?php 
        if ($_SESSION['perfil'] == 1) {
      ?>
      <td><?= $tarefa['nome'] ?></td>
      <?php } ?>
      <td><a href="../views/visualizar_tarefa.php?cod=<?= $tarefa['codt']?>"><?= $tarefa['titulo'] ?></a></td>
      <td><?= date("d/m/Y", strtotime($tarefa['data'])); ?></td>
      <td><?= $tarefa['hora'] ?></td>
      <?php 
          $cod_tarefa = $tarefa['categoria_cod'];
          $sql = "SELECT * FROM categoria_tarefa WHERE cod = $cod_tarefa";
          $result_cat = mysqli_query($con, $sql);
          $cat_tarefa = mysqli_fetch_array($result_cat);
      ?>
      <td><?= $cat_tarefa['nome']?></td>
      <td>
        <a href="../views/editar_tarefa.php?cod=<?= $tarefa['codt']?>">Editar</a>
        <a href="../controller/deletar_tarefa.php?cod=<?= $tarefa['codt'] ?>">Deletar</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>