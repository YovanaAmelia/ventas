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
  $arr_persona = $objpersona->obtener_personas();
  if (!empty($arr_persona)) {
    // recordemos el array para agregar las opciones de las categorias
    for ($i = 0; $i < count($arr_persona); $i++) {
      $id_persona = $arr_persona[$i]->id;
      $r_persona = $objpersona->obtener_personas($id_persona);
      $arr_persona[$i]->persona = $r_persona;


      $id_persona = $arr_persona[$i]->id; // Obtener el id
      /* $nombre_personas = $arr_persona[$i]->$nombre_personas; */ // Obtener el nombre (sin sobrescribir el array)
      $opciones = '    <button type="button" class="btn btn-success">editar</button>
       <button type="button" class="btn btn-success">eliminar</button>'; 
      // Asignar opciones vacías
      $arr_persona[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_persona;
    #code...
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo == "registrar") {
  #code...

    if ($_POST) {

        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $cod_postal = $_POST['cod_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $secure_password =password_hash($dni,PASSWORD_DEFAULT);
      

        // Validación de campos vacíos
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
            $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
            $direccion == "" || $rol == ""||$secure_password==""
        ) {
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
              );
            } else {
              $arrpersona = $objpersona->registrar_persona($nro_identidad,$razon_social,$telefono,$correo,$departamento,
              $provincia,$distrito,$cod_postal,$direccion,$rol,$secure_password);
        
              if ($arrpersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso');
                //cargar archivo
                
                 } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
              }
              echo json_encode($arr_Respuesta);
            }
          }
        } 
      ?>