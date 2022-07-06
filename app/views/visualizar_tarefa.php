<?php
require_once("../core/bloqueio.php");

$codu = $_SESSION['cod'];
$sql = "SELECT * FROM categoria_tarefa";
$result_cat = mysqli_query($con, $sql);
$cod = $_GET['cod'];

if($_SESSION['perfil'] != 1) {
    $sql2 = "SELECT *, t.cod AS codt FROM tarefas t WHERE usuario_cod = $codu AND cod = $cod";
} else {
    $sql2 = "SELECT *, u.cod AS codu, t.cod AS codt FROM tarefas t, usuario u WHERE t.usuario_cod = u.cod AND t.cod = $cod";
}

$result_tarefas = mysqli_query($con, $sql2);
$tarefa = mysqli_fetch_array($result_tarefas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarefa | Controle de Tarefas</title>
</head>
<body>
<a href="cadastro_tarefa.php">Cadastrar Tarefa</a>
  <a href="../core/home.php">Listar Tarefas</a> 
  <a href="../core/sair.php">Sair</a><br>

  <h3>Tarefa</h3>
  <?php 
        if($_SESSION['perfil'] == 1){
    ?>
    Usuário: <?= $tarefa['nome']?> <br>
    <?php } ?>
    Título: <?= $tarefa['titulo']?> <br>
    Data: <?= date("d/m/Y", strtotime($tarefa['data']));?> <br>
    Hora: <?= $tarefa['hora']?> <br>
    <?php 
        $cod_tarefa = $tarefa['categoria_cod'];
        $sql = "SELECT * FROM categoria_tarefa WHERE cod = $cod_tarefa";
        $result_cat = mysqli_query($con, $sql);
        $cat_tarefa = mysqli_fetch_array($result_cat);
    ?>
    Categoria:<?= $cat_tarefa['nome']?><br>
    Descrição: <?= $tarefa['descricao']?>

</body>
</html>