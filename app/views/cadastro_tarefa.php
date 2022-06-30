<?php
require_once("../core/bloqueio.php");

$sql = "SELECT * FROM categoria_tarefa";
$result_cat = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Tarefa</title>
</head>
<body>
  <a href="cadastro_tarefa.php">Cadastrar Tarefa</a>
  <a href="../core/home.php">Listar Tarefas</a> 
  <a href="../core/sair.php">Sair</a><br>

  <h3>Tarefa</h3>
  <form action="../controller/cadastro_tarefa.php" method="post" id="form_cadastro">
    Titulo:
    <input type="text" name="titulo"> <br>

    Data:
    <input type="date" name="data"> <br>

    Hora:
    <input type="time" name="hora"> <br>

    Categoria:
    <select name="categoria" id="">
      <?php 
        foreach($result_cat as $dados){ 
      ?>   
      <option value="<?php echo $dados['cod']?>"><?php echo $dados['nome']?></option>
      <?php 
      }  
      ?>
    </select> <br>
    
    Descrição:
    <textarea name="descricao" id="" cols="30" rows="10"></textarea><br>
    <button>Cadastar</button>
  </form>
</body>
</html>