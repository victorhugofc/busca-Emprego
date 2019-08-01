<html lang="pt-br" dir="ltr"><head>
      <meta charset="utf-8">
      <title>Cadastrar Empresa</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="..\css\style.css">
      <link rel="shortcut icon" href="..\img\logo_ico.png">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Lilita+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>
      <style>
div.a {
        text-align: center;
        font-family: 'Quicksand', sans-serif;
}
</style>
  <?php
  $get = isset($_GET['cadastrar'])? $_GET['cadastrar']:'';
  require '../html/menu.php';
   ?>
<div class="formulario ">
<h1>CADASTRO PARA BUSCAR FUNCIONÁRIO</h1>
<form>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome Fantasia</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="José">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Razão Social</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="da Silva">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">CNPJ:</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="...">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Inscrição Estadual:</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="...">
      </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua, 00">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control">
        <option selected>Paraná</option>
        <option>São Paulo</option>
      </select>
    </div>
    <div class="form-group col-md-12 ">
      <label for="inputAddress">Área para Serviço</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Setor Administrativo">
    </div>
  </div>
  <div class="form-row">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
          Definir Salário:
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Salário Inicial:</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="R$">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Salário Final:</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="R$">
            </div>
          </div>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <button type="submit" class="btn btn-primary">Cancelar</button>
</form>



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
</body></html>
