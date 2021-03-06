<?php

require("conexao.php");

$prod_id = $_GET['prod_id'];

$sql = "SELECT * FROM funcionario WHERE id_funcionario = '$prod_id'";
$query = mysqli_query($con, $sql);
while ($dados = mysqli_fetch_assoc($query)) {
  $nome = $dados['nome_Funcionario'];
  $tele = $dados['telefone_Funcionario'];
  $email = $dados['email_Funcionario'];
  $img = $dados['imagem_Funcionario'];
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Editar Livro</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
      .n {
        background: #212529;
        color: white;
      }
      .t {
        background: #343a40;
        color: white;
      }
      .m {
        margin: 20px 180px 28px 220px;
      }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExampleReservas" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Reservas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExampleReservas">
            <li>
              <a href="reserva.php">Reserva Livro</a>
            </li>
            <li>
              <a href="mostra_reserva.php">Mostra Reserva</a>
            </li>
            <li>
              <a href="atrasados.php">Mostra Atrasados</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExampleBooks" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Livros</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExampleBooks">
            <li>
              <a href="tables.php">Mostra Livros</a>
            </li>
            <li>
              <a href="cadastra_livro.php">Cadastra Livros</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link " href="funcionarios.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Funcionarios</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="card card-register m">
          <div class="card-header n"><center>Mudar Informações do Funcionario</center></div>
          <div class="card-body t">
            <form enctype="multipart/form-data" action="modificar_funcionario.php?prod_id=<?php echo $prod_id;?>" method="post">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputName">Nome</label>
                    <input class="form-control" id="exampleInputName" type="text" name="nome" aria-describedby="nameHelp" value="<?php echo $nome; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Telefone</label>
                <input class="form-control" id="exampleInputName" type="text"  name="tele" aria-describedby="nameHelp" value="<?php echo $tele; ?>">
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputName">Email</label>
                    <input class="form-control" id="exampleInputName" type="text" name="mail" value="<?php echo $email; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputName">Foto Perfil</label>
                    <input class="form-control" id="exampleInputName" type="file" name="file" value="<?php echo $img; ?>">
                  </div>
                </div>
              </div>
              <input class="btn btn-primary btn-block" type="submit" name="Enviar">
            </form>
          </div>
        </div>
    </div>
  </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tem certeza do que deseja fazer?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.php">Sair</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>