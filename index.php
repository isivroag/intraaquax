<?php
include_once('bd/cookie.php');


$pagina = "home";

if (isset($_SESSION["s_usuario"])) {
  header("Location:inicio.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grupo Aquax | Entrar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="57x57" href="img/iconos/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/iconos/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/iconos/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/iconos/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/iconos/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/iconos/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/iconos/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/iconos/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/iconos/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/iconos/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/iconos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/iconos/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/iconos/favicon-16x16.png">
  <link rel="manifest" href="img/iconos/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>


<body class="hold-transition login-page bg-navy">
  <div class="login-box bg-white p-4 rounded">
    <div class="login-logo ">
      <img src="img/logogpo.png" alt="" style="width:50%">

    </div>
    <!-- /.login-logo -->

    <div class="login-card-body bg-white">
      <p class="login-box-msg">Inicio de Sesión</p>

      <form id="formlogin" name="formlogin" action="" method="post">
        <div class="row justify-content-center p-1">

          <div class="col-sm-12">
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user  "></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input-group mb-3">

              <select class="form-control custom-select" name="escuela" id="escuela">
                <option id="aquax" value="aquax"> AQUAX</option>
                <option id="aqualandia" value="aqualandia"> AQUALANDIA</option>

              </select>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
    </div>



  </div>







  <!-- /.login-card-body -->


  <!-- /.login-box -->

  <!-- jQuery -->



</body>

</html>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->


<script src="js/adminlte.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="fjs/codigo.js"></script>