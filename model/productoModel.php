<?php
require_once "../librerias/conexion.php";
class productoModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}


    public function registrar_producto($codigo,$nombre,$detalle,$precio,$stock,
    $categoria,$imagen,$proveedor){

        $sql =$this->conexion->query
        ("CALL insertarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}',
        '{$categoria}','{$imagen}','{$proveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>