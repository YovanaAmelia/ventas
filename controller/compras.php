<?php
require_once('../model/comprasModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new comprasModel();
//instancio el clase modeloproducto
if ($tipo == "registrar") {
  //print_r($_POST);
  //echo$_FILES['imagen']['tmp_name'];

 
  if ($_POST) {

    $id_producto = $_POST['codigo'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['precio'];
  
    if (
      $id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "" ) {
      //respuesta
      $arr_Respuesta = array(
        'status' => false,
        'mensaje' => 'Error, campos vacios'
      );
    } else {
      $arrcompras = $objcompras->registrar_compras($id_producto,$cantidad,$precio,$id_trabajador);

      if ($arrcompras->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        //cargar archivo
       
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
