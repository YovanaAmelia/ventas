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
      $r_categoria = $objcategoria->obtener_categorias($id_categoria);
      $arr_Productos[$i]->categoria = $r_categoria;


      $id_producto = $arr_Productos[$i]->id; // Obtener el id
      $nombre_producto = $arr_Productos[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)

      //localhost/editar-producto/4
      $opciones =   '<a href="'.BASE_URL.'editar-producto/'.
      $id_producto. '">Editar</a> <button onclick="eliminar_producto('.$id_producto.');">Eliminar</button>';
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
//cargar archivo
        $archivo = $_FILES['imagen']['tmp_name'];

        $destino = './assets/img_productos/';
        $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));

      $arrProducto = $objProducto->registrar_producto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $imagen, $proveedor,$tipoArchivo);

      if ($arrProducto->id_n > 0) {
        $newid = $arrProducto->id_n;
        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
        

       
        $nombre = $arrProducto->id_n . "." . $tipoArchivo;
        if (move_uploaded_file($archivo, $destino .''. $nombre)) {
          
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
 //print_r($_POST);
 $id_producto = $_POST['id_producto'];
 $arr_Respuestas = $objProducto->verProducto($id_producto);
// print_r($arr_Respuestas);
if(empty($arr_Respuestas)){
$response = array('status'=>false,'mensaje'=>"Error, no hay informacion");
}else{  
  $response =array('status'=>true,'contenido'=>$arr_Respuestas);
}
echo json_encode($response);
}
?>
