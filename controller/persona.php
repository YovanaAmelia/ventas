<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];


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
      $opciones ='<a href="'.BASE_URL.'editar-persona/'.
      $id_persona. '">Editar</a> <button onclick="eliminar_persona('.$id_persona.');">Eliminar</button>';
      // Asignar opciones vacías
      $arr_persona[$i]->options = $opciones; // Agregar las opciones al objeto actual
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_persona;
    #code...
  }
  echo json_encode($arr_Respuesta);
}


if ($tipo="registrar") {
  //print_r($_POST);
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

      $secure_password = password_hash($nro_identidad,PASSWORD_DEFAULT);

<<<<<<< HEAD
      if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
          //repuesta
          $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
      } else {
          $arrpersona = $objpersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);
=======
      if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
          //repuesta
          $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
      } else {
          $arrpersona = $objpersona->registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $cod_postal, $direccion, $rol, $secure_password);
>>>>>>> c3f765f05265c02dd23501c9a40163ee66feb18e
          if ($arrpersona->id > 0) {
              $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
          } else {
              $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona');
          }
          echo json_encode($arr_Respuesta);
      }
  }
}
        if ($tipo == "ver") {
          //print_r($_POST);
          $id_persona = $_POST['id_persona'];
          $arr_Respuestas = $objPersona->verPersona($id_persona);
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

          if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
          $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
          $direccion == "" || $rol == ""||$secure_password=="") {
              //repuesta
              $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
          } else {
              $arrPersona = $objPersona->actualizarPersona($nro_identidad,$razon_social,$telefono,$correo,$departamento,
              $provincia,$distrito,$cod_postal,$direccion,$rol,$secure_password);
              if ($arrPersona->p_id > 0) {
                  $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        
                 
              } else {
                  $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar producto');
              }
          }
          echo json_encode($arr_Respuesta);
        }
      ?>