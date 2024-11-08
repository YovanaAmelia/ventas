<?php
require_once "../librerias/conexion.php";
class  proveedorModel
{

  private $conexion;
  function __construct()
  {
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion->connect();
  }
  public function obtener_Proveedor()
  {
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM persona where rol='proveedor'");

    while ($objeto = $respuesta->fetch_object()){
      array_push($arrRespuesta, $objeto);
    }
    return $arrRespuesta;
  }
}
?>
