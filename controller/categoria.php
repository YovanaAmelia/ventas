<?php
require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];
$objProducto = new productoModel();
$objcategoria = new categoriaModel();
$objpersona = new personaModel();

//instancio el clase modeloproducto
if ($tipo == "listar") {



  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_categoria = $objcategoria->obtener_Categorias();
  if (!empty($arr_categorias)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_categorias); $i++) {
      $id_categoria = $arr_Productos[$i]->id_categoria;
      $r_categoria = $objcategoria->obtener_categoria($id_categoria);
      $arr_categoria[$i]->categoria = $r_categoria;


      $id_categoria = $arr_categorias[$i]->id; // Obtener el id
      $nombre_categoria = $arr_categoria[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
      $opciones = '<button type="button" class="btn btn-success">editar</button>
       <button type="button" class="btn btn-success">eliminar</button>'; // Asignar opciones vacías
      $arr_categorias[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_categorias;
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
      #code...
    }