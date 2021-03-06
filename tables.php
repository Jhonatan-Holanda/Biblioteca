<?php
require("conexao.php");

if(isset($_GET['Enviar'])){

$nome = $_GET['nome_Livro'];
$genero = $_GET['genero_Livro'];
$autor = $_GET['autor_Livro'];

$sql = "SELECT * FROM livro";

$query = mysqli_query($con,$sql);

$d = mysqli_fetch_assoc($query);

  if($query){

    $sql = "INSERT INTO livro (nome_Livro, genero_Livro, autor_Livro) VALUES ('$nome','$genero','$autor')";

    $query = mysqli_query($con,$sql);

    if($query){
        header('location:visualizar.php');
        echo "<script>alert('Livro Cadastrado!')</script>";
        
    }else{
        echo "<script>alert('Livro não Cadastrado!')</script>";
    }

  }
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
  <title>Livros</title>
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
          <a class="nav-link" href="reserva.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Reserva</span>
          </a>
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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categorias">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCategorias" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Categorias</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseCategorias">
            <li>
              <a href="#">Ação</a>
            </li>
            <li>
              <a href="#">Aventura</a>
            </li>
            <li>
              <a href="#">Comedia</a>
            </li>
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
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
       <div class="card mb-3">
          <div class="card-header">
          <center><div><i class="fa fa-book"></i> Livros</div></center>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Autor</th>
                    <th>Visualizar</th>
                    <th>Modificar</th>
                    <th>Deletar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  error_reporting(0);
                  require("conexao.php");

                  $sql = "SELECT * FROM livro";
                  $query = mysqli_query($con, $sql);
                  while($dados = mysqli_fetch_assoc($query)){
                    echo "
                      <tr>
                        <td><label>".$dados['codigo_Livro']."</label></td>
                        <td><label>".$dados['nome_Livro']."</label></td>
                        <td><label>".$dados['genero_Livro']."</label></td>
                        <td><label>".$dados['autor_Livro']."</label></td>
                        <td>
                        <a href='visualizar.php?prod_id=".$dados['codigo_Livro']."'>
                        <button type='submit' class='btn btn-warning'>
                          <i class='fa fa-eye'></i> Visualizar
                        </button> 
                        </td>
                        <td>
                        <a href='editar_livro.php?prod_id=".$dados['codigo_Livro']."'>
                        <button type='submit' class='btn btn-primary'>
                          <i class='fa fa-edit'></i> Editar
                        </button> 
                        </td>
                        <td>
                        <a href='deletar.php?prod_id=".$dados['codigo_Livro']."'>
                        <button type='submit' class='btn btn-danger'>
                          <i class='fa fa-trash'></i> Deletar
                        </button> 
                        </td>
                      </tr>
                    ";
                }
                ?>
                </tbody>
              </table>
            </div>
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