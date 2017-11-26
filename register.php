<?php

require("conexao.php");
if(isset($_POST['Enviar'])){

  $nome = $_POST['nome_Funcionario'];
  $telefone = $_POST['telefone_Funcionario'];
  $email = $_POST['email_Funcionario'];
  $senha = $_POST['senha_Funcionario'];

  $sql = "SELECT * FROM funcionario";
  $query = mysqli_query($con, $sql);
  $de = mysqli_fetch_assoc($query);

    if ($email == $de['email_Funcionario']) {
      echo "<script>alert('Funcionário já existe!')</script>";
    }else{

    $query = mysqli_query($con, $sql);
    if($query){
      header('location:login.php');
      echo "<script>alert('Funcionário Cadastrado!')</script>";
    }else{
      echo "<script>alert('Funcionário não Cadastrado!')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registrar</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div style="margin: 105px;" class="card card-register mx-auto">
        <div class="card-header"><center>Cadastro</center></div>
        <div class="card-body">
          <form method="post" action="cadastra_funcionario.php" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">Nome</label>
                  <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nome" name="nome_Funcionario">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputTelefone">Telefone</label>
                  <input class="form-control" id="exampleInputTelefone" type="text" aria-describedby="nameHelp" placeholder="Telefone" name="telefone_Funcionario">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Email" name="email_Funcionario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha" name="senha_Funcionario">
            </div>
            <div class="form-group">
                <img class="img-responsive" src="fotosPerfil/<?php echo $img?>" width="80">
                <label>Imagem de Perfil do Usuário</label>
                <input class="form-control form-control-file" type="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary form-control" name="Enviar">
                <span class="glyphicon glyphicon-envelope">Cadastrar</span>
            </button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>