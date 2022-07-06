<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Usuário</title>

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
  <form action="../controller/cadastro_user.php" method="post" id="form_cadastro" class="row">
  <div class="col offset-m3 m6 s12">
    <h3 class="indigo-text center">Cadastro</h3>
  </div>
  
  <div class="input-field col offset-m3 m6 s12">
    <input type="text" name="nome" id="nome">
    <label for="nome" class="active">Nome</label> 
  </div>
  
  <div class="input-field col offset-m3 m6 s12">
    <input type="email" name="email" id="email">
    <label for="email" class="active">E-mail</label>
  </div>

  <div class="input-field col offset-m3 m6 s12">
    <input type="password" name="senha" id="senha">
    <label for="senha" class="active">Senha</label>
  </div>

  <div class="input-field col offset-m3 m6 s12">
    <input type="password" name="senha" id="senha2">
    <label for="senha2" class="active">Confirmar senha</label>
  </div>

  <div class="input-field col offset-m3 m6 s12">
    <button class="waves-effect waves-light btn indigo darken-4" onClick="validPassword()">Cadastar</button>
  </div>
    
  <div class="col offset-m3 m6 s12">
      <p>Já tem cadastro ? <a href="./login.php">Login</a></p>
  </div>
  </form>
  </main>

  <script src="../js/script.js"></script>
</body>
</html>