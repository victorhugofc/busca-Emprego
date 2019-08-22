<?php
$idemp = trim($_GET['idemp']);
$con = conecta();
$res = mysqli_query($con, "SELECT * FROM empregado WHERE idemp=$idemp");
$empregado = mysqli_fetch_assoc($res);
 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/style.css">
 <link rel="shortcut icon" href="img/logo_ico.png">
 <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<table class="bordered striped centered highlight responsive-table">
    <tr> <td colspan="2" align='center'> Gestão de Empregados!! </td></tr>
    <form action="?pagina=excluirempre" method="post">
    <tr>
        <td width="80 px"> Nome: </td>
        <td> <input id="nome" name="nome" type="text"
             value="<?php echo $empregado['nome'];?>" required> </td>
    </tr>
    <tr>
        <td> Sobrenome: </td>
        <td> <input id="sobrenome" name="sobrenome" type="text"
             value="<?php echo $empregado['sobrenome'];?>" required> </td>
    </tr>
    <tr align="center">
        <td>
          <input id="idemp" name="idemp" value="<?php echo $empregado['idemp'];?>"
          type="hidden" >
          <button type="submit">Confirma Excluir</button>
        </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table>
