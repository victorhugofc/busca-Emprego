<?php
//print_r($_POST);

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);
$idemp = trim($_POST['idemp']);



//Gravando os dados no BD
$con = conecta();
$update = "update empregado set nome='$nome', sobrenome='$sobrenome' where idemp=$idemp";
//echo $update;
$res = mysqli_query($con, $update);

if ($res){
  echo "Estado alterado com sucesso!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
} else {
  echo "Estado Não foi alterado, por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
}
?>
