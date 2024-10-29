<?php
require_once "../model/categoriaModel.php";
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria molel//
$objCategoria =new categoriaModel();

if ($tipo=="listar") {
    //respuesta
    $arr_Respuesta = array('status'=>false,'contenido'=>'');
   $arr_Categorias = $objCategoria->obtener_categorias();
   if(!empty($arr_Categoria)){
    //recorremos el array para agregar las opciones de la categorias//
    for ($i=0; $i < count($arr_Categorias); $i++){
   $id_categoria = $arr_Categorias[$i]->id;
   $arr_Categoria = $arr_Categorias[$i]->nombre;
   $opciones = ' ';
   $arr_Categorias[$i]->options = $opciones;
   
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Categorias;
    #code...
   }
   echo json_encode($arr_Respuesta);

   print_r($arr_Categorias);
}
?>