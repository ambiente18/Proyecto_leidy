<?php
class RutasModelos{

    /**funcion que arma las rutas del menu */
static public function RutasModelos($ruta)
{

if($ruta == "Beneficiario/Nuevo/nuevo" 
||$ruta == "Beneficiario/Lista/listabeneficiarios"
||$ruta == "Predios/Nuevopredio/nuevopredio"

||$ruta == "Predios/Listapredio/listapredio"
||$ruta == "Predios/Cultivo/cultivo"
||$ruta == "Proyecto/Nuevo/proyecto"
||$ruta == "Proyecto/Listasproyecto/listaproyecto"
||$ruta == "Busqueda/Bpredio/bpredio"
||$ruta == "Busqueda/Bsuelo/bsuelo"
||$ruta == "Busqueda/Bproyecto/bproyecto"
||$ruta == "Reportes/Rbeneficiario/rbeneficiario"
||$ruta == "Reportes/Rpredio/rpredio"
||$ruta == "Reportes/Rproyecto/rproyecto"
||$ruta == "Reportes/Rsuelo/rsuelo"
||$ruta == "Seguridad/Roles/roles"
||$ruta == "Seguridad/Usuario/usuario"
||$ruta == "panelnavegacion"
||$ruta == "Dashboard/dashboard")
{
/** Crear variable para guardar la ruta al archivo php que se va abrir  */
$pagina = "./view/" . $ruta . ".view.php";

return $pagina;

/**.view/Beneficiario/Nuevo */
}
}


}


?>