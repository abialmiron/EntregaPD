<?php
class Archivo{
    private $nombre; 
    private $tipo;
    private $tamanio;
    private $direccionTemp;

    public function cargar($nombre,$tipo,$tamanio,$direccionTemp){
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->tamanio = $tamanio;
        $this->direccionTemp = $direccionTemp;
    }

    public function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setTipo($nuevoTipo){
        $this->tipo = $nuevoTipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTamanio($nuevoTamanio){
        $this->tamanio = $nuevoTamanio;
    }
    public function getTamanio(){
        return $this->tamanio;
    }
    public function setDireccionTemp($nuevaDireccionTemp){
        $this->direccionTemp = $nuevaDireccionTemp;
    }
    public function getDireccionTemp(){
        return $this->direccionTemp;
    }

    public function copiar(){
        if (!copy($this->getDireccionTemp(), 'archivos/'.$this->getNombre())) {
            $resultado= 'ERROR: no se pudo cargar el archivo ';
        }else{
            $resultado ='El archivo '.$this->getNombre().' se ha copiado con Éxito <br />';
           }
        return $resultado;
    }
}
?>