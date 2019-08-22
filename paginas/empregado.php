<?php
$con = conecta();
$res = mysqli_query ($con, 'SELECT * FROM empregado');
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
    <tr> <td colspan="4" align='center'> Gestão de Empregado!! </td></tr>
    <tr>
        <td> Nome  </td>
        <td> Sobrenome </td>
        <td colspan="2" align="center"> Ações </td>
    </tr>
    <?php while ($empregado= mysqli_fetch_assoc($res)):?>
    <tr>
        <td><?php echo $empregado['nome'];?> </td>
        <td><?php echo $empregado['sobrenome'];?>   </td>
        <td>
          <a href="?pagina=emprealterar&idemp=<?php echo $empregado['idemp'];?>">
            Alterar
          </a>
        </td>
        <td>
          <a href="?pagina=empreexcluir&idemp=<?php echo $empregado['idemp'];?>">
          Excluir
          </a>
        </td>
   </tr>
 <?php endwhile; ?>
    <tr>
    </tr>
</table>
