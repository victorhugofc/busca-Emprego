<?php

$idemp = trim($_POST['idemp']);


$con = conecta();
$delete = "delete from empregado where idemp=$idemp";

$res = mysqli_query($con, $delete);

if ($res){
  echo "Estado excluído com sucesso!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
} else {
  echo "Estado Não foi excluir, por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=estado'>Voltar</a>";
}
?>
