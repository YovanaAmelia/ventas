<?php
class vistaModel{

    protected static function obtener_vista($vista){
<<<<<<< HEAD
        $palabras_permitidas=['usuarios','nuevo_usuario','usuario','producto','compra1','persona1','editar-producto','editar-categoria','editar-persona','editar-compras','categoria1','productos','nuevo-producto','nuevo-categoria','nuevo-compras','nueva-persona','detalleproduc','caballeros','damas','carrito','niños','niñas','PanelAdministrador'];
=======
        $palabras_permitidas=['usuarios','nuevo_usuario','editar-compras','usuario','producto','compra1','persona1','editar-persona','editar-producto','editar-categoria','categoria1','productos','nuevo-producto','nuevo-categoria','nuevo-compras','nueva-persona','detalleproduc','caballeros','damas','carrito','niños','niñas','PanelAdministrador'];
>>>>>>> c3f765f05265c02dd23501c9a40163ee66feb18e
       
/*         if(!isset($_SESSION['sesion_ventas_id'])) {
          return "login";
        }  */
        if(in_array($vista,$palabras_permitidas)){
            if(is_file("./views/".$vista.".php")){
                $contenido="./views/".$vista.".php";
                  }else{ 
                    $contenido ="404";


            }
        }elseif ($vista=="login" || $vista=="index") {
        $contenido ="login";  
            }else { 

      $contenido ="404";
        }
  return $contenido;
    }
}

?>