<?php
require_once "../librerias/conexion.php";
class comprasModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}
public function obtener_compras(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM compras");

    while ($objeto = $respuesta->fetch_object()){
      array_push($arrRespuesta, $objeto);
    }
    return $arrRespuesta; 
}

    public function registrar_compras($id_producto,$cantidad,$precio,$id_trabajador){

        $sql =$this->conexion->query
        ("CALL insertarCompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
   

public function vercompras($id){
    $sql = $this->conexion->query("SELECT *FROM compras WHERE id='$id'");
    $sql =$sql->fetch_object();
    return $sql;
}

    public function actualizarCompras($id_producto,$cantidad,$precio,$id_trabajador){
        $sql = $this->conexion->query("CALL actualizarCompras('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>