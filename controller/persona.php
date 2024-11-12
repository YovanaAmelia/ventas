<?php

require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

$objpersona = new personaModel();

if ($tipo == "registrar") {

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
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $fecha_reg = $_POST['fecha_reg'];

        // Validación de campos vacíos
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" ||
            $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" ||
            $direccion == "" || $rol == "" || $password == "" || $estado == "" || $fecha_reg == ""
        ) {
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
              );
            } else {
              $arrpersona = $objpersona->registrar_persona($nro_identidad,$razon_social,$telefono,$correo,$departamento,
              $provincia,$distrito,$cod_postal,$direccion,$rol,$password,$estado,$fecha_reg);
        
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
        if ($tipo == "listar") {
          #code...
        
          if ($tipo == "ver") {
            #code...
          }
          print_r($_POST);
        }
        