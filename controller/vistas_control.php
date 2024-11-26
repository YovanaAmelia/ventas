<?php
require_once "./model/vistas_model.php";
require_once "./model/vistas_model.php";
class vistasControlador extends vistaModel{

    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador(){
        if(isset($_GET['views'])){
            $ruta=explode("/",$_GET['views']);
            $respuesta = vistaModel::obtener_vista($ruta[0]);
             }else {
                $respuesta="login";

        }
        return $respuesta;
    }
}

?>