<?php
require_once "../librerias/conexion.php";
class categoriaModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}


    public function registrar_categoria($nombre,$detalle){

        $sql =$this->conexion->query
        ("CALL insertarCategoria('{'{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
}

?>