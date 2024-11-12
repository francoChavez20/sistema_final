<?php
require_once('../model/categoriaModel.php');
$tipo =$_REQUEST['tipo'];

$objCategoria = new  categoriaModel();

if ($tipo=="listar") {
     //respuesta
     $arr_Respuesta = array('status'=>false, 'contenido'=>'');
     $arr_Categorias = $objCategoria->obtener_categorias();
     if (!empty($arr_Categorias)) {
          for ($i=0; $i <count($arr_Categorias); $i++) {
               $id_categoria = $arr_Categorias[$i]->id;
               $id_categoria = $arr_Categorias[$i]->nombre;
               $opciones = '';
               $arr_Categorias[$i]->options =  $opciones;
          }
          $arr_Respuesta['status'] = true;
          $arr_Respuesta['contenido'] = $arr_Categorias;
     }
     echo json_encode($arr_Respuesta);
}

$objRCategoria= new RCategoriaModel();
if($tipo=="registrar"){
    if($_POST){
    
        $nombre  =$_POST['nombre'];
        $detalle  =$_POST['detalle'];
       

        if ( $nombre=="" || $detalle=="") {
            $arr_Respuestas =array ('status'=>false,'mensaje'=>'error,campos vacios');
           } else{
                $arrRCategoria =$objRCategoria-> registrarCategorias
                ($nombre,$detalle);

      if ($arrRCategoria->id>0){
               $arr_Respuestas = array('status'=>true,'mensaje'=>'Registro Exitoso');
               
               
          }else{
              $arr_Respuestas = array('status'=>false,'mensaje'=>'Error al Registrar categoria');
              }
             echo json_encode($arr_Respuestas);
           }
    }
}


?>