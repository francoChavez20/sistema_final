<?php
require_once "../librerias/conexion.php";


class categoriaModel
{
    private $conexion;
    function __construct()
    {

        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_categoria($id){
        $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id = '$id'");
        $objeto = $respuesta->fetch_object();
        return $objeto;

    }
}

class RCategoriaModel{
    private $conexion ;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrarCategorias($nombre,$detalle){
    $sql = $this->conexion->query("CALL insertCategorias('{$nombre}','{$detalle}')");

           $sql = $sql->fetch_object() ;
           return $sql;                                         
    }
   // public function ver_categoria($id){
     //   $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id = '$id'");
       // $objeto = $respuesta->fetch_object();
        //return $objeto;

    //}
}
?>