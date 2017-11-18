<?php

require("conexao.php");

 if(isset($_POST['Enviar'])){

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM funcionario";

  $query = mysqli_query($con,$sql);

  $dados = mysqli_fetch_assoc($query);
  if($email == $dados['email_Funcionario'] && $pass == $dados['senha_Funcionario']){

      header('location:index.php');

    }else{

      echo "<script>alert('Usuário não Cadastrado !!')</script>";

    }

  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .img{
      width: 100px;
      height: 100px;
    }
  </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div style="margin-top: 100px" class="card card-login mx-auto">
      <div class="card-header"><label style="margin-left: 150px">Login</label></div>
      <div class="card-body">
        <form method="post">
          <center><img class="img" src="img/usuario.png"></center>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" name="pass" type="password" placeholder="Senha" required>
          </div>
            <button type="submit" class="btn btn-primary form-control" name="Enviar">
                  <span class="glyphicon glyphicon-send"> Enviar</span>
            </button>
          </form>

        <div class="text-center">
          <a style="text-decoration: none" class="d-block small mt-3" href="register.php">Cadastre-se</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
