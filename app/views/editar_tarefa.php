<?php
require_once("../core/bloqueio.php");

$sql = "SELECT * FROM categoria_tarefa";
$result_cat = mysqli_query($con, $sql);

$cod = $_GET['cod'];
$sql2 = "SELECT * FROM tarefas WHERE cod = $cod";

$result_tarefas = mysqli_query($con, $sql2);
$tarefa = mysqli_fetch_array($result_tarefas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar | Tarefa</title>
</head>
<body>
  <a href="cadastro_tarefa.php">Cadastrar Tarefa</a>
  <a href="../core/home.php">Listar Tarefas</a> 
  <a href="../core/sair.php">Sair</a><br>

  <h3>Editar - Tarefa</h3>
  <form action="../controller/editar_tarefa.php" method="post" id="form_cadastro">
    <input type="hidden" value="<?= $cod ?>" name="cod">
    Titulo:
    <input type="text" name="titulo" value="<?= $tarefa['titulo'] ?>"> <br>

    Data:
    <input type="date" name="data" value="<?= $tarefa['data'] ?>"> <br>

    Hora:
    <input type="time" name="hora" value="<?= $tarefa['hora'] ?>"> <br>

    Categoria:
    <select name="categoria" id="">
        <?php 
        foreach($result_cat as $dados){ ?>
            <option value="<?php echo $dados['cod']?>"
                <?php
                    if($dados['cod'] == $tarefa['categoria_cod']){
                        echo "selected";
                    }
                ?>
            >
                <?php echo $dados['nome']?>
            </option>
        <?php } ?>
    </select> <br>
    
    Descrição:
    <textarea name="descricao" id="" cols="30" rows="10"><?= $tarefa['descricao']?></textarea> <br>
    <button>Salvar</button>
  </form>
</body>
</html>