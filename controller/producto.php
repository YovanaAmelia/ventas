<?php
require_once('./model/productoModel.php');
$tipo = $_REQUEST['tipo'];

if($tipo=="registrar"){
    //print_r($_POST);
    if ($_POST){

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $fecha_v = $_POST['fecha_v'];
        $imagen = $_POST['imagen'];
        $proveedor = $_POST['proveedor'];
        if ($codigo==""|| $nombre==""|| $detalle==""|| $precio==""|| $stock==""||
        $categoria==""|| $fecha_v==""|| $imagen==""|| $proveedor==""||){
  //respuesta
  $arr_Respuesta = array
  ('status'=>false,
  'mensaje'=>'Error, campos vacios');
  
}else{  
    #code...
    }
      }
    print_r($_POST);
}
if($tipo=="registrar"){
    print_r($_POST);
}
?>