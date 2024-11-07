<?php
require_once('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new productoModel();
//instancio el clase modeloproducto
if ($tipo == "registrar") {
  //print_r($_POST);
  //echo$_FILES['imagen']['tmp_name'];

 
  if ($_POST) {

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $imagen = $_POST['imagen'];
    $proveedor = $_POST['proveedor'];
    if (
      $codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" ||
      $categoria == "" || $imagen == "" || $proveedor == ""
    ) {
      //respuesta
      $arr_Respuesta = array(
        'status' => false,
        'mensaje' => 'Error, campos vacios'
      );
    } else {
      $arrProducto = $objProducto->registrar_producto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$imagen,$proveedor);

      if ($arrProducto->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        //cargar archivo
        $archivo = $_FILES['imagen']['tmp_name'];
       
        $destino ='./assets/img_productos/';
        $tipoArchivo=strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
        
        $nombre = $arrProducto->id.".".$tipoArchivo;
if(move_uploaded_file($archivo,$destino.$nombre)){
$arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
} else {
  $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso , error al subir imagen');
}
      } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
      }
      echo json_encode($arr_Respuesta);
    }
  }
} 
if ($tipo == "listar") {
  #code...

  if ($tipo == "ver") {
    #code...
  }
  print_r($_POST);
}
