<?php
require_once "../librerias/conexion.php";
class personaModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}
public function obtener_personas(){
    $arrRespuesta = array();
    $respuesta = $this->conexion->query("SELECT * FROM persona");

    while ($objeto = $respuesta->fetch_object()){
      array_push($arrRespuesta, $objeto);
    }
    return $arrRespuesta; 
}

public function registrarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $codpostal, $direccion, $rol, $password){
    $sql = $this->conexion->query("CALL insertarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$codpostal}','{$direccion}','{$rol}','{$password}')");
    $sql = $sql->fetch_object();
    return $sql;
}
    public function buscarPersonaPorDNI($dni){
        $sql = $this->conexion->query("SELECT*FROM persona where nro_identidad='{$dni}'");
        $sql=$sql->fetch_object();
        return $sql;
    }
    public function verPersona($id){
        $sql = $this->conexion->query("SELECT *FROM persona WHERE id='$id'");
        $sql =$sql->fetch_object();
        return $sql;
    }
    public function actualizarPersona($nro_identidad,$razon_social,$telefono,$correo,$departamento,
    $provincia,$distrito,$cod_postal,$direccion,$rol,$password){

        $sql =$this->conexion->query ("CALL actualizarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}',
        '{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
}

?>