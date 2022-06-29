<?php
if(isset($_GET['erro'])){
    if($_GET['erro'] == 1){
        $erro = "Acesso Negado!";
    }else if($_GET['erro'] == 2){
        $erro = "E-mail ou senha inválidos!";
    }
}else{
    $erro = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle de Tarefas</title>
</head>
<body>
  <h3>Login</h3>
  <form action="../controller/verifica_login.php" method="post">
    <input type="text" name="login"> <br>
    <input type="password" name="senha"> <br>
    <button>Enviar</button>
    <span><?php echo $erro; ?></span>
  </form>

  <a href="./cadastro.php">Cadastre-se</a>
</body>
</html>