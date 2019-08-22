<?php
$get = isset($_GET['pagina'])? $_GET['pagina']:'';
require 'template/menu.php'
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="img/logo_ico.png">
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<div class="formulario" style="position:fixed;top:180px;left:35px; width: 100%;">
  <table border="0" cellpadding=0 cellspacing=0>
    <tr> <td colspan="2" align='center'> Cadastro para Buscar Emprego! </td></tr>
    <form action="?pagina=cadempr" method="post">
    <tr>
        <td width="100px"> Nome: </td>
        <td> <input id="nome" name="nome" type="text" required> </td>
    </tr>
    <tr>
        <td> Sobrenome: </td>
        <td> <input id="sobrenome" name="sobrenome" type="text" required> </td>
    </tr>
    <tr>
        <td> cpf: </td>
        <td> <input id="cpf" name="cpf" type="text" required> </td>
    </tr>
    <tr>
        <td> Rg: </td>
        <td> <input id="rg" name="rg" type="text" required> </td>
    </tr>
    <tr>
        <td>Email: </td>
        <td> <input id="email" name="email" type="text" required> </td>
    </tr>
    <tr>
        <td>senha: </td>
        <td> <input id="senha" name="senha" type="text" required> </td>
    </tr>
    <tr>
        <td>Endereço: </td>
        <td> <input id="endereco" name="endereco" type="text" required> </td>
    </tr><tr>
        <td>Cidade: </td>
        <td> <input id="cidade" name="cidade" type="text" required> </td>
    </tr><tr>
        <td>Estado: </td>
        <td> <input id="estado" name="estado" type="text" required> </td>
    </tr><tr>
      <td>Complemento: </td>
      <td> <input id="complemento" name="complemento" type="text" required> </td>
  </tr><tr>
        <td>Ultimos Empregos: </td>
        <td> <input id="ultimo" name="ultimo" type="text" required> </td>
    </tr>
    <tr align="center">
        <td> <button type="submit">Gravar</button> </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table>

</div>
