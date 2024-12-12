<?php
require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

$objcategoria = new categoriaModel();


//instancio el clase modeloproducto
if ($tipo == "listar") {

  $arr_Respuesta = array('status'=>false, 'contenido'=>'');
  $arr_Categorias = $objCategoria->obtener_categorias();
  if (!empty($arr_Categorias)) {
      //recorremos el array para agregar las opciones de las categorias
      for ($i=0; $i < count($arr_Categorias); $i++) { //declara una variable siendo 0 el valor inicial -- define hasta donde sera el bucle -- aumenta +1
          $id_categoria = $arr_Categorias[$i]->id;
          $categoria =  $arr_Categorias[$i]->nombre;
          $opciones = '
           <a href="'.BASE_URL.'editar-categoria/'.$id_categoria.'"><i class="fas fa-edit btn btn-info btn-sm"></i></a>
               <button onclick="eliminar_categoria('.$id_categoria.');"class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          ';
          $arr_Categorias[$i]->options = $opciones;
      }
      $arr_Respuesta['status'] = true;
      $arr_Respuesta['contenido'] =  $arr_Categorias;
  }
  echo json_encode($arr_Respuesta); //convertir en formeato -- 
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