<html lang="pt-br" dir="ltr"><head>
      <meta charset="utf-8">
      <title>BuscaEmprego</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="..\css\style.css">
      <link rel="shortcut icon" href="..\img\logo_ico.png">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>

<?php
$get = isset($_GET['pagina'])? $_GET['pagina']:'';
require 'template/menu.php'
?>

      <style>
div.a {
        text-align: center;
        font-family: 'Quicksand', sans-serif;

}
</style>
</div>
<div class="conteudeo-centro">
<div class="a" style="position:absolute;top:350px;left:145px;">
  <div class="a" style="position:absolute;top:50px;">
   <p class="p-3 mb-2" style="width: 68rem; border-radius: 35px; background-color:#ffffffd9;" >
      <font size="19" color="#DE6209 " >Esta procurando Emprego <BR> ou um Funcionário para sua Empresa?! <br> <strong>Você está no Lugar Certo!</strong> </font> <br></p>
</div>  </div>
<div class="a" style="position:absolute;top:610px;left:145px;">
  <div class="a" style="position:absolute;top:50px;">
   <p class="p-3 mb-2 text-warning" style="width: 33rem; border-radius: 35px; background-color:#ffffffd9;" >
      <a class="nav-link active" href="?pagina=cadastrar" style="color:#0f0f0f aa" ><img src="https://img.icons8.com/ios/40/000000/add-user-group-man-man.png"><font style="text-shadow: 1px 1px orange;" size="6"><strong>BUSCAR EMPREGO</strong></font></a>
</div>  </div>

<div class="a" style="position:absolute;top:610px;left:690px;">
  <div class="a" style="position:absolute;top:50px;">
   <p class="p-3 mb-2 text-warning " style="width: 34rem; border-radius: 35px; background-color:#ffffffd9;" >
      <a class="nav-link active" href="?pagina=empregado" ><img src="https://img.icons8.com/ios/40/000000/add-user-group-man-man.png"><font  style="text-shadow: 1px 1px orange;"  size="6"><strong>BUSCAR FUNCIONÁRIO</strong></font></a>
</div>  </div>
<div id="fundo-externo">
    <div id="fundo">
        <img src="../img/fundo.jpg" alt="" />
    </div>
</div>


</html>
