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
require '../html/menu.php'
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
        <a class="nav-link active" href="cadastrar.php" style="color:#0f0f0f aa" ><img src="https://img.icons8.com/ios/40/000000/add-user-group-man-man.png"><font style="text-shadow: 1px 1px orange;" size="6"><strong>BUSCAR EMPREGO</strong></font></a>
  </div>  </div>

  <div class="a" style="position:absolute;top:610px;left:690px;">
    <div class="a" style="position:absolute;top:50px;">
     <p class="p-3 mb-2 text-warning " style="width: 34rem; border-radius: 35px; background-color:#ffffffd9;" >
        <a class="nav-link active" href="cadastrarempresa.php" ><img src="https://img.icons8.com/ios/40/000000/add-user-group-man-man.png"><font  style="text-shadow: 1px 1px orange;"  size="6"><strong>BUSCAR FUNCIONÁRIO</strong></font></a>
  </div>  </div>
</div>
<div id="teste">
  </div>
<div class="b">

    <div class=" d-flex flex-justify-between pt-0 pb-0 mt-0  text-gray border-gray-light ">
      <ul class="">
        <li class="mr-3">© 2019 <span title="0.38096s from unicorn-6bc65b88c6-8xqfm">BuscaEmprego</span>, Inc.</li>
      </ul>
  </a>
     <ul class="list-style-none d-flex flex-wrap ">
       <li class="mr-3"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Termos</a></li>
       <li class="mr-3"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacidade</a></li>
       <li class="mr-3"><a data-ga-click="Footer, go to security, text:security" href="https://github.com/security">Segurança</a></li>
       <li><a data-ga-click="Footer, go to help, text:help" href="https://help.github.com">Ajuda</a></li>
</div>


<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <img src="img/logo.png" alt=""height="25px"><br><br> -->

      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Bem-vindo(a) ao Hígia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form action="" method="get">


          <input placeholder="Email"type="text" name="login" value="" class="form-control"><br>

          <input placeholder="Senha "type="password" name="senha" value="" class="form-control"><br>


          <button type="submit" class="mt-3 btn btn-danger">Entrar</button>
          <br>
          <a href="# btn btn-danger">Recuperar senha</a>

        </form>
    </div>
  </div>
  <!-- <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary">Save changes</button>
</div> -->
  </div>
</div>

</html>
