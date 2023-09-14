<?php 
function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}
function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

// NUEVA FORMA DE USAR EL METODO AUTOLOAD
spl_autoload_register(function ($clase) {
    // echo "Cargamos la clase  ".$clase."<br>" ;
     $directorys = array(
         $GLOBALS['ROOT'].'Model/',
         $GLOBALS['ROOT'].'Controller/',
         $GLOBALS['ROOT'].'Model/conector/',
         $GLOBALS['ROOT'].'Model/otrasclases/',
     );
     // print_r($directorys) ;
     foreach($directorys as $directory){
         if(file_exists($directory.$clase . '.php')){
             // echo "se incluyo".$directory.$class_name . '.php';
             require_once($directory.$clase . '.php');
             return;
         }
     }
 
 
 });

/** 
function __autoload($class_name){
    $directorys = array(
        $_SESSION['ROOT'].'model/',
        $_SESSION['ROOT'].'model/conector/',
        $_SESSION['ROOT'].'controller/',
    );
    foreach($directorys as $directory){
        if(file_exists($directory.$class_name . '.php')){
            require_once($directory.$class_name . '.php');
            return;
        }
    }
}
*/

?>