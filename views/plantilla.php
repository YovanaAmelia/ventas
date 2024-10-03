<?php
require_once "./controller/vistas_control.php";

$mostrar =new vistasControlador();

$vistas = $mostrar->obtenerVistaControlador();
if($vista=="login" ||$vistas =="404"){
    require_once "./views/".$vista.".php";
      }else{
        include_once "./views/include/header.php";
      include $vista;
        include_once "./views/include/footer.php";
}

?>