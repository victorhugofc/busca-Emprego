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



<form action="cadastrar.php" method="post">
    Nome: <input type="text" name="nome"/>
    <br>
    Sobrenome: <input type="text" name="sobrenome"/>
    <br>
    Cpf: <input type="text" name="cpf"/>
    <br>
    <input type="submit" value="Enviar"/>
</form>


<?php
/*$get = isset($_GET['cadastrar'])? $_GET['cadastrar']:'';
require '../html/menu.php';*/


if ((isset($_POST['email']))&&(!empty($_POST['email']))){

   //porta, usuário, senha, nome data base
   //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
   $conexao = mysqli_connect("localhost", "root", "", "buscaemprego") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));

  //Abaixo atribuímos os valores provenientes do formulário pelo método POST
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cpf = $_POST['cpf'];

   $string_sql = "INSERT INTO bempresa (id,nome,sobrenome,cpf) VALUES (null,'$nome','$sobrenome','$cpf')";
   $insert_member_res = mysqli_query($conexao, $string_sql);
   if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
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
</body></html>
