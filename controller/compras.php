<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

$objProducto = new productoModel();
$objcategoria = new categoriaModel();
$objpersona = new personaModel();

//instancio el clase modeloproducto
if ($tipo == "listar") {



  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_compras = $objcompras->obtener_compras();
  if (!empty($arr_Productos)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_compras); $i++) {
      $id_compras = $arr_compras[$i]->id_compras;
      $r_compras = $objcompras->obtener_compras($id_compras);
      $arr_compras[$i]->compras = $r_compras;


      $id_compras = $arr_compras[$i]->id; // Obtener el id
      $nombre_compras = $arr_compras[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
      $opciones = '    <button type="button" class="btn btn-success">editar</button>
       <button type="button" class="btn btn-success">eliminar</button>'; 
      // Asignar opciones vacías
      $arr_compras[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_compras;
    #code...
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
 
  if ($_POST) {

    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['id_trabajado'];
  
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
