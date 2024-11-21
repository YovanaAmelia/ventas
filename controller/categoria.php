<?php
require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

//instanciar la clase Proveedor molel//
$objcategoria = new categoriaModel();

if ($tipo == "listar") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_categoria = $objcategoria->obtener_categorias();
    if (!empty($arr_categoria)) {
        //recorremos el array para agregar las opciones de la proveedor//
        for ($i = 0; $i < count($arr_categorias); $i++) {
            $id_categoria = $arr_categoria[$i]->id;
            $id_categoria = $arr_categoria[$i]->nombre;
            $opciones = ' ';
            $arr_categoria[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_categorias;
        #code...
    }
    echo json_encode($arr_Respuesta);
}
?>