<?php

class AmbPersona{

    /** MEODOS DE LA CLASE */
    /**
     * Espera un Array asociativo del obj de la tabla persona
     * @param array $datos
     * @return object
     */
    private function cargarObjeto($datos){
        $obj=null;
        if(array_key_exists('nombre',$datos) && array_key_exists('apellido',$datos) && array_key_exists('fechaNac',$datos) && array_key_exists('telefono',$datos) && array_key_exists('domicilio',$datos) && array_key_exists('nroDni',$datos)){
            $obj=new Persona($datos);
            $obj->setear($datos['nombre'],$datos['apellido'],$datos['fechaNac'],$datos['telefono'],$datos['domicilio'],$datos['nroDni']);

        }// fin if
        return $obj; 
    }// fin function 
    
    /**
     * ESPERA UN ARRAY ASOCIATIVO DONDE LAS CLAVES SON LAS CAMPOS DE LA TABLA
     * @param array $datos
     * @return object
     */
    private function cargarObjetoConClave($datos){
        $obj=null;
        if(isset($datos['NroDni'])){
            $obj=new Persona();
            $obj->setear($datos['nombre'],$datos['apellido'],$datos['fechaNac'],$datos['telefono'],$datos['domicilio'],$datos['nroDni']);
            
            
        }// fin
        
        return $obj; 
    }// fin function 
    
    /**
     * Corrobora que dentro del array asociativo esten seteados los campos
     * @param array $datos
     * @return boolean
     */
    private function seteadosCamposClaves($datos){
        $resp=false;
        if(isset($datos['nombre']) && isset($datos['apellido']) && isset($datos['fechaNac']) && isset($datos['telefono']) && isset($datos['domicilio']) && isset($datos['nroDni'])){
            $resp=true; 
        }// fin if 
        
        return $resp; 
    }// fin function 
    
    /**
     * ALTA
     * @param array $datos
     * @return boolean
     */
    public function alta($datos){
        $resp=false;
        $objPersona=$this->cargarObjeto($datos);
        if($objPersona!=null && $objPersona->insertar()){
            $resp=true;
            
        }// fin if 
        
        return $resp;
    }// fin function 
    
    /**
     * METODO BAJA PERSONA 
     * @param array $datos
     * @return boolean
     */
    public function baja($datos){
        $resp=false;
        if($this->seteadosCamposClaves($datos)){
            $objPersona=$this->cargarObjetoConClave($datos);
            if($objPersona!=null && $objPersona->eliminar()){
                $resp=true;
                
            }// fin if 
            
        }// fin if
        
        return $resp;
        
    }// fin function
    
    /**
     * METODO MODIFICAR PERSONA 
     * @param array $datos
     * @return boolean
     */
    public function modificacion($datos){
        $resp=false;
        if($this->seteadosCamposClaves($datos)){
            $objPersona=$this->cargarObjeto($datos);
            if($objPersona!=null && $objPersona->modificar()){
                $resp=true; 
                
            }// fin if 
            
        }// fin if 
        
        return $resp; 

    }// fin function 

    /**
     * METODO BUSCAR
     * @param array $param
     * @return array / 
     */
    public function buscar($param){
        $where=""; 
        $arreglo=array();
        if($param<>null){
            if(isset($param['NroDni'])){
                $where.="and NroDni=".$param['NroDni'];
            }// fin if
            if(isset($param['Apellido'])){
                $where.="and Apellido='".$param['Apellido']."'";
                
            }// fin if 
            if(isset($param['Nombre'])){
                $where.="and Nombre='".$param['Nombre']."'";
                
            }// fin if 
            if(isset($param['fechaNac'])){
                $where.="and fechaNac='".$param['fechaNac']."'";
                
            }// fin if 
            if(isset($param['Telefono'])){
                $where.="and Telefono='".$param['Telefono']."'";
                
            }// fin if 
            if(isset($param['Domicilio'])){
                $where.="and Domicilio='".$param['Domicilio']."'";
            }// fin if
            
        }// fin if
         
        $arreglo=Persona::listar($where);

        return $arreglo; 
        
    }// fin function 

    /**
     * METODO RECUPERAR PERSONA CON DNI DADO
     * @param int $dni
     * @return obj
     */
    public function personaConDni($dni){
        $objPersona=new Persona();
        $arrayPersona=$objPersona->personaConId($dni);
        return $arrayPersona; 
    }// fin function

}// fin clase 


?>