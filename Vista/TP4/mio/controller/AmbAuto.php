<?php

class AmbAuto{

    /** METODOS DE LA CLASE */

    /**
     * Espera un Array asociativo y devuelve el obj de la tabla
     * @param array $datos
     * @return object
     */
    private function cargarObjeto($datos){
        $obj=null; 
        if(array_key_exists('Patente',$datos) && array_key_exists('Marca',$datos) && array_key_exists('Modelo',$datos) && array_key_exists('DniDuenio',$datos) ){
            $obj=new Auto();
            $objPersona=new Persona();
            $objPersona=$objPersona->personaConId($datos['DniDuenio']);// obtiene el obj persona relacionado con el auto 
            $obj->setear($datos['Patente'],$datos['Marca'],$datos['Modelo'],$objPersona);
        }// fin if 
        return $obj; 
    }// fin function 


    /**
     * Espera como parametro un array asociativo donde las claves coinciden  con los atributos 
     * @param array $datos
     * @return obj
     */
    private function cargarObjetoConClave($datos){
        $obj=null;
        if(isset($datos['Patente'])){
            $obj=new Auto();
            $obj->setear($datos['Patente'],$datos['Marca'],$datos['Modelo'],$datos['DniDuenio']);

        }// fin if 
        return $obj;

    }// fin function 

    /**
     * corrobora que dentro del array asociativo estan seteados los campos
     * @param array $datos
     * @return booelan
     */
    private function setadosCamposClaves($datos){
        $resp=false;
        if(isset($datos['Patente']) && isset($datos['Modelo']) && isset($datos['Marca']) && isset($datos['DniDuenio'])){
            $resp=true;

        }// fin if 

        return $resp;

    }// fin function 

    /**
     * METODO ALTA
     * @param array $datos
     * @return boolean
     */
    public function alta($datos){
        $resp=false;
        $objAuto=$this->cargarObjeto($datos);
        if($objAuto!=null && $objAuto->insertar()){
            $resp=true;

        }// fin if 
        return $resp;

    }// fin function 

    /**
     * PERMITE ELIMINAR UN OBJ AUTO
     * @param array $datos
     * @return booelan
     */
    public function baja($datos){
        $resp=false;
        if($this->setadosCamposClaves($datos)){
            $objAuto=$this->cargarObjetoConClave($datos);
            if($objAuto!=null && $objAuto->eliminar()){
                $resp=true;

            }// fin if 


        }// fin if 

        return $resp; 

    }// fin function 

    /**
     * MOFICAR EL OBJ AUTO
     * @param array $datos
     * @return boolean
     */
    public function modificacion($datos){
        $resp=false;
        if($this->setadosCamposClaves($datos)){
            $objAuto=$this->cargarObjeto($datos);
            if($objAuto!=null && $objAuto->modificar()){
                $resp=true; 

            }// fin if 

        }// fin if 

        return $resp; 

    }// fin function 

 /**
     * METODO BUSCAR
     * @param array $param
     * @return array
     */
    public function buscar ($param){
        $where="";
        if($param<>null){
            // Va preguntando si existe los campos de la tabla 
            if(isset($param['Patente'])){ // evalua si existe el auto con la primary key
                $where.="and Patente='".$param['Patente']."'";
                if(isset($param['Marca'])){// identifica si esta la clave (atributo de la tabla)
                    $where.="and Marca ='".$param['Marca']."'";
                }// fin if 
                if(isset($param['Modelo'])){
                    $where.="and Modelo=".$param['Modelo'];
                }// fin if 
                if(isset($param['DniDuenio'])){
                    $where.="and DniDuenio".$param['DniDuenio'];

                }// fin if 


            }// fin if 


        }// fin if
        
        $arreglo=Auto::listar($where);

        return $arreglo; 

    }// fin funcion     


    /**
     * METODO AUTOS CON MISMO DUENIO
     * @param int $dni
     * @return array
     */
    public function autosConMismoDuenio($dni){
        $autos=array(); // almacena los autos con el mismo dueño
        $arrayAutos=$this->buscar(null);
        $k=0; // contador
        foreach($arrayAutos as $unAuto){
            if($dni==$unAuto->getDuenio()){
                $autos[$k]=$unAuto;
                $k++;

            }// fin if 

        }// fin for 

        return $autos; 


    }// fin function

    /**
     * METODO RECUPERAR AUTO CON PATENTE DADO
     * @param string $patente
     * @return obj
     */
    public function autoConPatente($patente){
        $objAuto=new Auto();
        $arrayAuto=$objAuto->autoConPatente($patente);
        return $arrayAuto; 
    }// fin function


}// fin clase 


?>