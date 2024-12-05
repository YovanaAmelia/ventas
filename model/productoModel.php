<?php
require_once "../librerias/conexion.php";
class productoModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}
public function obtener_productos(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM producto");

    while ($objeto = $respuesta->fetch_object()){
      array_push($arrRespuesta, $objeto);
    }
    return $arrRespuesta; 
}


    public function registrar_producto($codigo,$nombre,$detalle,$precio,$stock,
    $categoria,$imagen,$proveedor,$tipoArchivo){

        $sql =$this->conexion->query
        ("CALL insertarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}',
        '{$categoria}','{$imagen}','{$proveedor}','{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
/*     public function actualizar_imagen($id,$imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' where id = '{$id}'");
        return 1;
    } */
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT *FROM producto WHERE id='$id'");
        $sql =$sql->fetch_object();
        return $sql;
    }
    public function actualizar_Producto($id,$codigo,$nombre,$detalle,$precio,
    $categoria,$imagen,$proveedor,$tipoArchivo){

        $sql =$this->conexion->query ("CALL actualizarProducto('{$id}','{$codigo}','{$nombre}','{$detalle}','{$precio}',
        '{$categoria}','{$imagen}','{$proveedor}','{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}

?>