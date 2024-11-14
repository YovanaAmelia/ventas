<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new productoModel();
//instancio el clase modeloproducto
if ($tipo == "registrar") {
  //print_r($_POST);
  //echo$_FILES['imagen']['tmp_name'];

 
  if ($_POST) {

   
    $nombre = $_POST['nombre'];
    $detalle = $_POST['detalle'];
   
    if (
       $nombre == "" || $detalle == "" ) {
      //respuesta
      $arr_Respuesta = array(
        'status' => false,
        'mensaje' => 'Error, campos vacios'
      );
    } else {
      $arrcategoria = $objcategoria->registrar_categoria($nombre,$detalle);

      if ($arrcategoria->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        //cargar archivo
        
      } else {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar categoria');
      }
      echo json_encode($arr_Respuesta);
    }
  }
} 
