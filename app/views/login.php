<?php
if(isset($_GET['msg'])){
    if($_GET['msg'] == 1){
        $msg = "Acesso Negado!";
    }else if($_GET['msg'] == 2){
        $msg = "E-mail ou senha inválidos!";
    }else if($_GET['msg'] == 3){
      $msg = "Logout realizado com sucesso!";
    }
}else{
    $msg = "";
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
  <form action="../core/verifica_login.php" method="post">
    <input type="text" name="login"> <br>
    <input type="password" name="senha"> <br>
    <button>Enviar</button>
    <span><?php echo $msg; ?></span>
  </form>

  <a href="./cadastro.php">Cadastre-se</a>
</body>
</html>