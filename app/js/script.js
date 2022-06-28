function validPassword() {
  $senha = document.getElementById("senha").value;
  $senha2 = document.getElementById("senha2").value;
  if($senha != $senha2){
    alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS"); 
  } else {
    document.form_cadastro.submit();
  }
}
