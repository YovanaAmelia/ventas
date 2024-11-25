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
  $arr_Productos = $objProducto->obtener_productos();
  if (!empty($arr_Productos)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_Productos); $i++) {
      $id_categoria = $arr_Productos[$i]->id_categoria;
      $r_categoria = $objcategoria->obtener_categoria($id_categoria);
      $arr_Productos[$i]->categoria = $r_categoria;


      $id_producto = $arr_Productos[$i]->id; // Obtener el id
      $nombre_producto = $arr_Productos[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
      $opciones = '    <button type="button" class="btn btn-success">editar</button>
       <button type="button" class="btn btn-success">eliminar</button>'; 
      // Asignar opciones vacías
      $arr_Productos[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Productos;
    #code...
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
  #code...


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
      $arrProducto = $objProducto->registrar_producto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor);

      if ($arrProducto->id > 0) {
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        //cargar archivo
        $archivo = $_FILES['imagen']['tmp_name'];

        $destino = './assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

        $nombre = $arrProducto->id . "." . $tipoArchivo;
        if (move_uploaded_file($archivo, $destino . $nombre)) {
          $arr_imagen = $objProducto->actualizar_imagen($id, $nombre);
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


if ($tipo == "ver") {
  #code...
}

