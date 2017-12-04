<?php
require("conexao.php");

if(isset($_GET['Enviar'])){
date_default_timezone_set('America/Fortaleza');
$nomeL = $_GET['nomeL'];
$nomeP = $_GET['nomeP'];
$end = $_GET['end'];
$email = $_GET['email'];
$curso = $_GET['curso'];
$dia = date('d');
$mes = date('m');
$ano = date('Y');

$dataR = $ano."-".$mes."-".$dia;

if($mes == '1'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;

    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;
  }

}
if($mes == '2'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 28){

       $mesE = $mes + 1;

        $diaEE = $diaE - 28;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '3'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '4'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '5'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '6'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '7'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }
    
    }

if($mes == '8'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '9'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '10'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '11'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;



      }

    }
if($mes == '12'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;

    if($diaE > 31){

       $mesE = 1;

       $anoP = $ano + 1;

       $diaEE = $diaE - 31;

       $dataE = $anoP."-".$mesE."-".$diaEE;

    }
  }

$sql = "SELECT * FROM livro WHERE nome_Livro = '".$nomeL."'";
$query = mysqli_query($con, $sql);

// $d= mysqli_fetch_assoc($query);

if($query){

    if(mysqli_num_rows($query) == 0){

        echo "<script>alert('Livro Não Esta no Sistema')</script>";

    }else{
        $sql = "INSERT INTO reserva (nome_Livro, nome_Pessoa, endereco_Pessoa, email_Pessoa, curso_Pessoa, mes, data_Recebimento, data_Entrega) VALUES ('$nomeL','$nomeP','$end','$email','$curso','$mes', '$dataR','$dataE')";

        $query = mysqli_query($con,$sql);

        if($query){
              echo "<script>alert('Livro Reservado $nomeL')</script>";
             header('location:mostra_reserva.php');
        }else{
            echo "<script>alert('Livro Não Reservado')</script>";
        }
    }
}else{
  echo "<script>alert('Livro Não Reservado else')</script>";
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
  <title>Biblioteca</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
      .n{
        background: #212529;
        color: white;
      }
      .t{
        background: #343a40;
        color: white;
      }
      .m{
        margin: 8px 180px 28px 220px;
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
          <div class="card-header n"><center>Reservar</center></div>
          <div class="card-body t">
            <form method="get">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputName">Nome do Livro</label>
                    <input class="form-control" id="exampleInputNameL" type="text" name="nomeL" aria-describedby="nameHelp" placeholder="Nome do Livro">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nome da Pessoa</label>
                <input class="form-control" id="exampleInputNameP" type="text"  name="nomeP" aria-describedby="emailHelp" placeholder="Nome Completo">
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1">Endereço</label>
                    <input class="form-control" id="exampleInputEnd" type="text" name="end" placeholder="Cidade, Rua, Nº Casa">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1">Email Pessoa</label>
                    <input class="form-control" id="exampleInputEmail" type="email" name="email" placeholder="exemplo@seudominio.com">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1">Curso</label>
                    <input class="form-control" id="exampleInputEmail" type="text" name="curso" placeholder="Informe seu curso">
                  </div>
                </div>
              </div>
              <input class="btn btn-primary btn-block" type="submit" name="Enviar">
            </form>
          </div>
        </div>
    </div>
          <!-- /Card Columns-->
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Sair</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>