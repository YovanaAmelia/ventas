<?php
require_once "../model/proveedorModel.php";
$tipo = $_REQUEST['tipo'];

//instanciar la clase Proveedor molel//
$objProveedor = new proveedorModel();

if ($tipo == "listar") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedor = $objProveedor->obtener_Proveedor();
    if (!empty($arr_Proveedor)) {
        //recorremos el array para agregar las opciones de la proveedor//
        for ($i = 0; $i < count($arr_Proveedor); $i++) {
            $id_proveedor = $arr_Proveedor[$i]->id;
            $razon_Proveedor = $arr_Proveedor[$i]->razon_social;
            $opciones = ' ';
            $arr_Proveedor[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedor;
        #code...
    }
    echo json_encode($arr_Respuesta);
}
?>