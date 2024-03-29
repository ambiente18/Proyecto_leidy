<?php
    /* incluir controladores requeridos*/
    require_once "./Controladores/rutas.controladores.php";

    /* incluir archivos de modelos requeridos*/
require_once "Modelos/rutas.modelos.php";
    /* iniciar clases*/

    $rutas = new rutasControladores();

     /* ejecutar funcion iniciar plantilla*/
     $rutas -> IniciarPlantilla();
?>