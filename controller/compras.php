<?php
require_once('../model/comprasModel.php');


$tipo = $_REQUEST['tipo'];

$objcompra = new comprasModel();


//instancio el clase modeloproducto
if ($tipo == "listar") {



  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_compra= $objcompra->obtener_compras();
  if (!empty($arrCompras)) {
    for ($i = 0; $i < count($arrCompras); $i++) {
        $id_compra = $arrCompras[$i]->id;
        $id_producto = $arrCompras[$i]->id_producto;
        $cantidad = $arrCompras[$i]->cantidad;
        $precio = $arrCompras[$i]->precio;
        $id_trabajador = $arrCompras[$i]->id_trabajador;

        $id_producto = $arrCompras[$i]->id_producto;
        $r_producto = $objProducto->obtener_producto_id($id_producto);
        $arrCompras[$i]->producto=$r_producto;

        $id_trabajador = $arrCompras[$i]->id_trabajador;
        $r_trabajador = $objPersona->obtener_trabajador_id($id_trabajador);
        $arrCompras[$i]->trabajador=$r_trabajador;

        $opciones = '
         <a href="'.BASE_URL.'editar-compras/'.$id_compra.'"><i class="fas fa-edit btn btn-info btn-sm"></i></a>
             <button onclick="eliminar_compra('.$id_compra.');"class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
        ';
        $arrCompras[$i]->options = $opciones;
        
    }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] =  $arrCompras;
}
echo json_encode($arr_Respuesta); //convertir en formato -- 
}


if ($tipo == "registrar") {
 
  if ($_POST) {

    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio']; 
    $id_trabajador = $_POST['id_trabajador'];
    if (
        $id_producto == "" || $cantidad == "" || $precio == "" || $id_trabajador == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
    } else {
        $arrProducto = $objCompras->registrarCompras($id_producto,$cantidad,$precio,$id_trabajador);
        if ($arrProducto->id>0) {
        $arr_Respuesta = array('status'=>true, 'mensaje'=>'Registro exitoso');
    }else{
        $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar compra');
    }
}
        echo json_encode($arr_Respuesta);

    }
  }

if ($tipo == "ver") {
  //print_r($_POST);
  $id_compra = $_POST['id_compras'];
  $arr_Respuestas = $objCompras->verCompras($id_compra);
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