<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Visualizar Livro</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top:30px;
      }
      .glyphicon {
        margin-bottom: 10px;
        margin-right: 10px;
      }
      small {
        display: block;
        line-height: 1.428571429;
        color: #999;
      }
    </style>
  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
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
          </ul>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-book"></i>
              <span class="nav-link-text">Livros</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseExamplePages">
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
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="well well-sm">
            <div class="row">
              <?php
              require("conexao.php");

                  $prod_id = $_GET['prod_id'];

                  $sql = "SELECT * FROM livro WHERE codigo_Livro = '$prod_id'";
                  $query = mysqli_query($con, $sql);
                  $dados = mysqli_fetch_array($query);
                ?>
              <div class="col-sm-6 col-md-4">
                <img style="width: 150px;" src="foto/<?php echo $dados['imagem_Livro']; ?>" alt="" class="img-rounded img-responsive">
              </div>
              <div class="col-sm-6 col-md-8">
                <h4><?php echo $dados['nome_Livro']; ?></h4>
                <small><cite title="Autor da Obra"><?php echo $dados['autor_Livro']; ?><i class="glyphicon glyphicon-map-marker">
                </i></cite></small>
                  <i class="glyphicon glyphicon-envelope"><?php echo $dados['genero_Livro']; ?></i><br><br>
                  <i class="glyphicon glyphicon-envelope"><?php echo "Pratileira: ".$dados['pratileira_Livro']; ?></i><br>
                  <i class="glyphicon glyphicon-envelope"><?php echo "Fila: ".$dados['fila_Livro']; ?></i><br><br>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="tables.php"><i class="fa fa-arrow-left"></i> Voltar</a>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <span style="font-size: 14px; ">Copyright © Your Website 2017</span>
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