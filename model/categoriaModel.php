<?php
require_once "../librerias/conexion.php";
class  categoriaModel
{

  private $conexion;
  function __construct()
  {
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion->connect();
  }
  public function obtener_categorias()
  {
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM categoria");

    while ($objeto = $respuesta->fetch_object()){
      array_push($arrRespuesta, $objeto);
    }
    return $arrRespuesta;
  }
  public function registrar_categoria($nombre,$detalle){

      $sql =$this->conexion->query("CALL insertarCategoria('{'{$nombre}','{$detalle}')");
      $sql = $sql->fetch_object();
      return $sql;
  }
}
?>
