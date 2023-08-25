<?php
class Archivos {
    public function tipoArchivo($fileType) {
        // Verificar si el archivo es un .doc o .pdf
        $uploadOk = 1; // Inicializar la variable como válida por defecto
        if ($fileType != "doc" && $fileType != "pdf") {
            $uploadOk = 0;
        }
        return $uploadOk;
    }

    public function tamaño($tamaño) {
        // Verificar el tamaño del archivo
        $uploadOk = 1; // Inicializar la variable como válida por defecto
        if ($tamaño > 2 * 1024 * 1024) {
            $uploadOk = 0;
        }
        return $uploadOk;
    }

    public function tipoText($fileType)
    { if ($fileType != 'txt') {
            $uploadOk = 0;
            return $uploadOk;
        }
        

    }

    public function tipo($fileType){ 
        if ($fileType != "img" && $fileType != "jpg" && $fileType !="jpeg") 
        {  $uploadOk = 0;
        return $uploadOk;}
    }
}
?>
