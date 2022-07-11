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

  <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
  />

</head>
<body>
  <main class="container">
  <form action="../core/verifica_login.php" method="post" class="row container">
    <div class="col offset-m3 m6 s12">
     <h3 class="indigo-text center">Login</h3>
    </div>

    <div class="input-field col offset-m3 m6 s12">
      <input type="text" name="login" id="login">
      <label for="login" class="active">E-mail</label> 
    </div>

    <div class="input-field col offset-m3 m6 s12">
      <input type="password" name="senha" id="senha">
      <label for="senha" class="active">Senha</label>   
    </div>

    <div class="input-field col offset-m3 m6 s12">
      <span id="error"><?php echo $erro; ?></span> <br>
      <button class="waves-effect waves-light btn indigo darken-4">Enviar</button> 
      
    </div>

    <div class="col offset-m3 m6 s12">
      <p>Ainda não tem cadastro ? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
  </form>
  </main>
</body>
</html>