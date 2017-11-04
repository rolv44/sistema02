<?php

class linkPage{

   public function linkPageModel($link){

     if($link=="inicio"||$link=="nosotros"||$link=="servicios"||$link=="contactenos"){
         $module="vistas/modulos/".$link.".php";
     }

     return $link;
   }

}


?>
