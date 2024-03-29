<?php
    class rutasControladores{
        public function IniciarPlantilla (){
            include "./view/plantilla/plantilla.view.php";
        }
/** armar la ruta del formulario */
public function Rutas()
{
if(isset($_GET["ruta"])){
    $ruta = $_GET["ruta"];
}
else {
    $ruta = "Dashboard/dashboard";
}
$rutaformulario = RutasModelos::RutasModelos($ruta);
include $rutaformulario;

}


    }
?>