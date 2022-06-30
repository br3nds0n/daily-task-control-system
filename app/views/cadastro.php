<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Usuário</title>
</head>
<body>
  <form action="../controller/cadastro_user.php" method="post" id="form_cadastro">
    nome:
    <input type="text" name="nome"> <br>

    e-mail:
    <input type="email" name="email"> <br>

    senha:
    <input type="password" name="senha" id="senha" > <br>
    
    confirmar senha:
    <input type="password" name="senha2" id="senha2" > <br>
    <button onClick="validPassword()">Cadastar</button>
  </form>

  <script src="../js/script.js"></script>
</body>
</html>