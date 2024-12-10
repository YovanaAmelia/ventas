<?php
require_once('../model/comprasModel.php');


$tipo = $_REQUEST['tipo'];

$objcompra = new comprasModel();


//instancio el clase modeloproducto
if ($tipo == "listar") {



  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_compra= $objcompra->obtener_compras();
  if (!empty($arr_compra)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_compra); $i++) {
      $id_compra = $arr_compra[$i]->id;
      $r_compra = $objcompra->obtener_compras($id_compra);
      $arr_compra[$i]->compra = $r_compra;


      $id_compra = $arr_compra[$i]->id; // Obtener el id
      // Obtener el nombre (sin sobrescribir el array)
      $opciones = '    <button type="button" class="btn btn-success">editar</button>
       <button type="button" class="btn btn-success">eliminar</button>'; 
      // Asignar opciones vacías
      $arr_compra[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_compra;
    #code...
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
 
  if ($_POST) {

    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['id_trabajador'];
  
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
if ($tipo == "ver") {
  //print_r($_POST);
  $id_compras = $_POST['id_compras'];
  $arr_Respuestas = $objCompras->verCompras($id_compras);
 // print_r($arr_Respuestas);
 if(empty($arr_Respuestas)){
 $response = array('status'=>false,'mensaje'=>"Error, no hay informacion");
 }else{  
   $response =array('status'=>true,'contenido'=>$arr_Respuestas);
 }
 echo json_encode($response);
 }


 if ($tipo == "actualizar") {
  //print_r($_POST);
  //print_r($_FILES['imagen']['tmp_name']);

  $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $id_trabajador = $_POST['id_trabajador'];

  if ($id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "" ) {
      //repuesta
      $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
  } else {
      $arrCompras = $objCompras->actualizarCompras($id_producto,$cantidad,$precio,$id_trabajador);
      if ($arrCompras->p_id > 0) {
          $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');

          
      } else {
          $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
      }
  }
  echo json_encode($arr_Respuesta);
}