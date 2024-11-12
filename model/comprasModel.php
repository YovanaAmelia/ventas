<?php
require_once "../librerias/conexion.php";
class comprasModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}


    public function registrar_compras($id_producto,$cantidad,$precio,$id_trabajador){

        $sql =$this->conexion->query
        ("CALL insertarCompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
   
}

?>