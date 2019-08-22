<?php
function navega($pagina){
  switch ($pagina) {
    case 'empregado':
      require 'paginas/empregado.php';
      break;
    case 'cadastrar':
      require 'paginas/cadastrar.php';
      break;
    case 'cadempr':
      require 'controle/cadempr.php';
      break;
    case 'emprealterar':
      require 'paginas/emprealterar.php';
      break;
    case 'alterarempre':
      require 'controle/alterarempre.php';
      break;
    case 'empreexcluir':
      require 'paginas/empreexcluir.php';
      break;
    case 'excluirempre':
      require 'controle/excluirempre.php';
      break;
    default:
      require 'paginas/home.php';
      break;
  }
}

function conecta() {
  return mysqli_connect(HOST, USER, PASS, BANCO);
}

?>
