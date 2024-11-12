<?php
require_once "../librerias/conexion.php";
class personasModel {
    private $conexion;

    function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarPersonas($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password, $estado, $fecha_reg) {
        $sql = $this->conexion->query("CALL insertPersonas(
            '{$nro_identidad}', '{$razon_social}', '{$telefono}', '{$correo}', 
            '{$departamento}', '{$provincia}', '{$distrito}', '{$cod_postal}', 
            '{$direccion}', '{$rol}', '{$password}', '{$estado}', '{$fecha_reg}'
        )");
        $sql = $sql->fetch_object();
        return $sql;
    }
}
?>
