<?php

class MvcControlador{

public function inicio(){
   include "vista/plantilla.php";
}

public function linkPageControlador(){


   $linkControl=$_GET['action'];
   $answer=linkPage::linkPageModel($linkControl);

}

}


?>
