<?php
require("conta.php");
require("conta_mes.php");
?>
<!DOCTYPE html>
<html lang="en">

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
  <!-- Criação do grafico livros alugados no ano-->
  
<?php
         
 error_reporting();
            date_default_timezone_set("America/Fortaleza");
            $sql = "SELECT * FROM livrosalugados";
            $query = mysqli_query($con, $sql);
            //$i = mysqli_num_rows($query);
            $t = array();
            $q = array();
            $a = 0;


            while ($d = mysqli_fetch_assoc($query)) {
              $t = $d['mes'];
              $q = $d['livalugados'];
              $ts[$a] = $t;
              $qs[$a] = $q;
              $a++; 
            }

          ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

       function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Mês', 'quantidade alugada'],

          <?php
           error_reporting();

          $i = $a;
          for ($i = 0; $i < $a; $i++) {

          ?>

           ['<?php echo $ts[$i]?>', <?php echo $qs[$i]?>],

          <?php
            }
          ?>

        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: 'Quantidade'},
          axes: {
            x: {
              0: { side: 'bottom', label: 'Mês'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

      function drawChart() {


        chart.draw(data, options);
      }
    </script>

<!-- tabelas salas-->
 <?php
   error_reporting();
   

            $con = mysqli_connect(HOST, USER, PASS) or die("Não foi possível Conectar!");
            $banco = mysqli_select_db($con, DB);

            $sql = "SELECT * FROM reservas";
            $query = mysqli_query($con, $sql);
            //$i = mysqli_num_rows($query);
            $t = array();
            $q = array();
            $a = 0;


            while ($d = mysqli_fetch_assoc($query)) {
              $t = $d['turma'];
              $q = $d['qnt'];
              $ts[$a] = $t;
              $qs[$a] = $q;
              $a++; 
            }

          ?>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

       function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Turma', 'Porcentagem'],

          <?php
  error_reporting();
          $i = $a;
          for ($i = 0; $i < $a; $i++) {

          ?>

           ['<?php echo $ts[$i]?>', <?php echo $qs[$i]?>],

          <?php
            }
          ?>

        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Reservas',
            subtitle: 'Turmas'},
          axes: {
            x: {
              0: { side: 'bottom', label: 'Turma Destaque'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('salas'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };

      function drawChart() {

      

        chart.draw(data, options);
      }
    </script>

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
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Área de Trabalho</a>
        </li>
        <li class="breadcrumb-item active">Biblioteca Virtual</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Livros alugados em cada mês:</div>
        <div class="card-body">
           <div id="top" style="width: 100%; height: 30;"></div>
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
        </div>
        <div class="card-footer small text-muted">Grafico de 2016</div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Salas que mais alugaram livros:</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                         <div id="salas" style="width: 100%; height: 50;"></div>
                
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">INFO</div>
                  <div class="small text-muted">Informática</div>
                  <hr>
                  <div class="h4 mb-0 text-success">ADM</div>
                  <div class="small text-muted">Administração</div>
                  <hr>
                  <div class="h4 mb-0 text-primary">COM</div>
                  <div class="small text-muted">Comércio</div>
                  <hr>
                  <div class="h4 mb-0 text-success">AGRO</div>
                  <div class="small text-muted">Agronegócio</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Grafico de 2016</div>
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