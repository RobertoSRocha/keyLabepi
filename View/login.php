<?php

require_once '../Model/daoSeguranca.php';

if (isset($_POST['login'])) {

    startLogin(htmlspecialchars($_POST['matricula'], ENT_QUOTES, 'UTF-8'), htmlspecialchars(base64_encode($_POST['senha']), ENT_QUOTES, 'UTF-8'));
}
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
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
        <center><h4><div class="card-header">Login</div></h4></center>
      <div class="card-body">
          <form class="form-signin" action="" method="post">
          <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input class="form-control" type="number" placeholder="Enter matrícula" 
                   id="matricula" name="matricula" required="">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input class="form-control" type="password" placeholder="Password" 
                   id="senha" name="senha" required="">
          </div>
          
            <input class="btn btn-primary btn-block" value="Login" type="submit" name="login">
        </form>
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
