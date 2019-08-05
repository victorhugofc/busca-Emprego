<html lang="pt-br" dir="ltr"><head>
      <meta charset="utf-8">
      <title>Cadastrar Funcionário</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="..\css\style.css">
      <link rel="shortcut icon" href="..\img\logo_ico.png">
      <script src="..\js\jquery-3.4.1.js" charset="utf-8"></script>
      <script src="..\js\validacao.js" charset="utf-8"></script>
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
</style><div class="a p-0 mb-0" style="position:absolute;top:0px;left:0px; width: 100%; background-color:#f0f2f4;">
   <p class="" style= > </p>
       <div class="menu">
         <div class="logo">
           <a class="nav-link" href="..\html\index.html"><img src="..\img\logo.png" alt="" width="200" height="75" ></a>
         </div>
             <ul class="nav justify-content-end">
               <li class="nav-item">
                 <a class="nav-link active" href="index.html"><img src="https://img.icons8.com/ios/25/000000/home.png"> Home</a>
               </li>
         <li class="nav-item">
           <a class="nav-link active" href="cadastrar.html"><img src="https://img.icons8.com/ios/25/000000/add-user-group-man-man.png"> Cadastrar</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"><img src="https://img.icons8.com/ios/25/000000/enter-2.png"> Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="https://img.icons8.com/ios/25/000000/new-post.png"> SAC</a>
         </li>
       </ul> </div>
</div>  </div>

<div class="formulario ">
<h1>CADASTRO PARA BUSCAR EMPRESA</h1>
<form action="cadastrar.php" method="post" id="formulariocad">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control obrigatorio" value="">
        <span class="text-danger"></span><br>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Sobrenome</label>
        <input type="text" name="nome" class="form-control obrigatorio" value="">
        <span class="text-danger"></span><br>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">CPF:</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="...">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">RG:</label>
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
  <div class="form-group">
    <label for="inputAddress2">Complemento</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Casa, apartamento...">
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
      <label for="inputAddress">Últimos Empregos</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Empresa - 2000/2000">
    </div>
  </div>
  <div class="form-row">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
          Definir Salário Desejado
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
