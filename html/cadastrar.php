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
</style>
<?php
/*$get = isset($_GET['pagina'])? $_GET['pagina']:'';
require '../html/menu.php';*/

//aqui é só um exemplo para não rodar o script abaixo sem necessidade
if ((isset($_POST['email']))&&(!empty($_POST['email']))){

   //porta, usuário, senha, nome data base
   //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
   $conexao = mysqli_connect("localhost", "root", "", "busca");

  //Abaixo atribuímos os valores provenientes do formulário pelo método POST
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $endereco = $_POST['endereco'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $complemento = $_POST['complemento'];
  $ultimo = $_POST['ultimo'];

   $string_sql = "INSERT INTO empregado (id,nome,sobrenome,cpf,rg,email,senha,endereco,cidade,estado,complemento,ultimo) VALUES (null,'$nome,'$sobrenome,'$cpf','$rg','$email','$senha','$endereco','$cidade','$estado','$complemento','$ultimo')";
   $insert_member_res = mysqli_query($conexao, $string_sql);
   if(($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
       echo "<p>Testemunho Registrado</p>";
       echo '<a href="cadastrar.php">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
   } else {
       echo "Erro, não foi possível inserir no banco de dados";
   }
   mysqli_close($conexao); //fecha conexão com banco de dados
}else{
    echo "Por favor, preencha os dados";
}
 ?>
</div>


<div class="formulario ">
<h1>CADASTRO PARA BUSCAR EMPRESA</h1>
<form action="cadastrar.php" method="post">
    Nome: <input type="text" name="nome"/>
    <br>
    Sobrenome: <input type="text" name="sobrenome"/>
    <br>
    cpf: <input type="text" name="cpf"/>
    <br>
    rg: <input type="text" name="rg"/>
    <br>
    email: <input type="text" name="email"/>
    <br>
    senha: <input type="text" name="senha"/>
    <br>
    endereco: <input type="text" name="endereco"/>
    <br>
    cidade: <input type="text" name="cidade"/>
    <br>
    estado: <input type="text" name="estado"/>
    <br>
    complemento: <input type="text" name="complemento"/>
    <br>
    Ultimo Serviço: <textarea name="ultimo" rows="10" cols="80"></textarea> <br/><br/>
    <input type="submit" value="Enviar"/>
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
