<?php
    require_once '../Model/daoSeguranca.php';
    $user = verificarLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KeyLabepi</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">KeyLabepi</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          
        <!GERENCIAR USUÁRIOS>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="GerenciarUser">
          <a class="nav-link" href="gerenciarUser.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Gerenciar usuários</span>
          </a>
        </li>
        
        <!-- ACESSOS EM GRÁFICOS -->
        
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Acessos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Gráficos</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Todos</a>
                </li>
                <li>
                  <a href="#">Data</a>
                </li>
                <li>
                  <a href="#">Permitidos</a>
                </li>
                <li>
                  <a href="#">Negados</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3">Tabelas</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti3">
                <li>
                  <a href="#">Todos</a>
                </li>
                <li>
                  <a href="#">Data</a>
                </li>
                <li>
                  <a href="#">Permitidos</a>
                </li>
                <li>
                  <a href="#">Negados</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>-->
      </ul>
      
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
      <!-- PARTE SUPERIOR DIREITA -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
      
   <!-- PARTE INTERNA -->
   <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Gerenciar Usuários - Labepi</div>
        <div class="card-body">
            <div class="button" align=right>
                <a href="gerenciarUserAdd.php" class="btn btn-primary pull-right h2">Cadastrar</a>
            </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Cartão</th>
                  <th>Matrícula</th>
                  <th>Permissão</th>
                  <th>Ações</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Cartão</th>
                  <th>Matrícula</th>
                  <th>Permissão</th>
                  <th>Ações</th>
                  
                </tr>
              </tfoot>
                <tbody>
                    <?php
                        require_once '../Model/user_acoes.php';
                        acoesUsers();
                    ?>
		</tbody>
            </table>
          </div>
        </div>
        
      </div>
  
   </div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Labepi 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Deseja sair realmente?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Logout" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../Model/user_logout.php">Logout</a>
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
    
    <script>function excluirUser(idUser){
        var conf=confirm("Você tem certeza disso?");
        if(conf){
            location.replace("../Model/user_delete.php?idUser="+idUser);
        }else{
            href="#";
        }
        
    }</script>
</body>

</html>


