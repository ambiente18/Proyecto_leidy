<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>proyecto Leidy | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/temas/adminLTe/plugins/fontawesome-free/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/temas/adminLTe/dist/css/adminlte.css">
</head>

<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">

<?php
include "encabezado.view.php";
include "menu.view.php";



/**validar que ruta se esta pasando por la url para abrir la pagina */

$rutas = new RutasControladores();
$rutas-> Rutas();
//include "./view/dashboard/dashboard.view.php";


?>






<?php
include "piepagina.view.php";

?>

</div>
<!-- /Site wrapper -->

<!-- jQuery -->
<script src="./assets/temas/adminLTe/plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="./assets/temas/adminLTe/plugins/bootstrap/js/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="./assets/temas/adminLTe/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/temas/adminLTe/dist/js/demo.js"></script>

</body>
</html>