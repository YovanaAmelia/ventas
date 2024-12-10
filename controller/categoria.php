<?php
require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

$objcategoria = new categoriaModel();


//instancio el clase modeloproducto
if ($tipo == "listar") {



  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_categoria = $objcategoria->obtener_Categorias();
  if (!empty($arr_categoria)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_categoria); $i++) {
      $id_categoria = $arr_categoria[$i]->id;
      $r_categoria = $objcategoria->obtener_categorias($id_categoria);
      $arr_categoria[$i]->categoria = $r_categoria;


    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_categoria;
    #code...
  }
  echo json_encode($arr_Respuesta);
}
if ($tipo == "registrar") {
    #code...
  //print_r($_POST);
    //echo$_FILES['imagen']['tmp_name'];
  if ($_POST) {
   $nombre = $_POST['nombre'];
   $detalle = $_POST['detalle'];
     if (
       $nombre == "" || $detalle == ""
      ) {
        //respuesta
        $arr_Respuesta = array(
          'status' => false,
          'mensaje' => 'Error, campos vacios'
        );
      } else {
        $arr_categorias = $objcategorias->registrar_categoria($nombre, $detalle);
  
        if ($arrProducto->id > 0) {
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
      $id_categoria = $_POST['id_categorias'];
      $arr_Respuestas = $objCategoria->verCategoria($id_categoria);
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
      $nombre = $_POST['nombre'];
      $detalle = $_POST['detalle'];
 
      if ($nombre == "" || $detalle == "") {
          //repuesta
          $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
      } else {
          $arrProducto = $objProducto->actualizarProducto($nombre, $detalle);
          if ($arrProducto->p_id > 0) {
              $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
    

          } else {
              $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
          }
      }
      echo json_encode($arr_Respuesta);
    }
    ?>