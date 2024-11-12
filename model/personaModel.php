<?php
require_once "../librerias/conexion.php";
class personaModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}


    public function registrar_persona($nro_identidad,$razon_social,$telefono,$correo,$departamento,
    $provincia,$distrito,$cod_postal,$direccion,$rol,$password,$estado,$fecha_reg){

        $sql =$this->conexion->query
        ("CALL insertarPersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}',
        '{$provincia}','{$distrito}','{$cod_postal}','{$direccion}','{$rol}','{$password}','{$estado}','{$fecha_reg}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
}

?>