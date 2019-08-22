<?php

$nome = trim($_POST['nome']);
 $sobrenome = trim($_POST['sobrenome']);
 $cpf = trim($_POST['cpf']);
 $rg = trim($_POST['rg']);
 $email = trim($_POST['email']);
 $senha = trim($_POST['senha']);
 $endereco = trim($_POST['endereco']);
 $cidade = trim($_POST['cidade']);
 $estado = trim($_POST['estado']);
 $complemento = trim($_POST['complemento']);
 $ultimo = trim($_POST['ultimo']);

//Gravando os dados no BD
$con = conecta();
$insert = "insert into empregado (nome, sobrenome, cpf, rg, email, senha, endereco, cidade, estado, complemento, ultimo) values ('$nome', '$sobrenome', '$cpf', '$rg', '$email', '$senha', '$endereco', '$cidade', '$estado', '$complemento', '$ultimo')";
$res = mysqli_query($con, $insert);

if ($res){
  echo "Cadastro Realizado com sucesso!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
} else {
  echo "Erro por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
}
?>
