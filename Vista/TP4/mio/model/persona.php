<?php
// CLASE PERSONA 
class Persona{
    // ATRIBUTOS 
    private string $nombre; 
    private string $apellido; 
    private string $fechaNac; 
    private string $telefono;
    private string $domicilio; 
    private int $nroDni; 
    private string $mensaje; 
    
    // CONSTRUCTOR 
    public function __construct(){
        $this->nombre="";
        $this->apellido="";
        $this->fechaNac=""; 
        $this->telefono=""; 
        $this->domicilio="";
        $this->nroDni=0;
        $this->mensaje="";
    }// fin function

    // METODO SETEAR
    public function setear($nombre,$apellido,$fecha,$telefono,$domicilio,$dni){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setFechaNac($fecha);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
        $this->setDni($dni);
    } // fin function


    // METODO GET
    public function getNombre(){
        return $this->nombre; 
    }// fin function

    public function getApellido(){
        return $this->apellido; 
    }// fin function

    public function getDni(){
        return $this->nroDni; 
    }// fin function

    public function getFechaNac(){
        return $this->fechaNac; 
    }// fin function

    public function getTelefono(){
        return $this->telefono; 
    }// fin function

    public function getDomicilio(){
        return $this->domicilio; 
    }// fin function

    public function getMensaje(){
        return $this->mensaje; 
    }// fin function

    // METODO SET
    public function setNombre($name){
        $this->nombre=$name;
    }// fin function
    
    public function setApellido($apell){
        $this->apellido=$apell;
    }// fin function

    public function setTelefono($tel){
        $this->telefono=$tel;
    }// fin function

    public function setDomicilio($dire){
        $this->domicilio=$dire;
    }// fin function

    public function setFechaNac($date){
        $this->fechaNac=$date;
    }// fin function

    public function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }// fin function

    public function setDni($dni){
        $this->nroDni=$dni;
    }// fin function


    /**
     * CARGAR PERSONA 
     * @return boolean
     */
    public function cargar(){
        $salida=false;
        $objBase=new BaseDatos();
        $sql="SELECT * FROM persona WHERE id=".$this->getDni();
        if($objBase->Iniciar()){
            $salida=$objBase->Ejecutar($sql);
            if($salida>-1){
                if($salida>0){
                    $arrRegistro=$objBase->Registro();
                    $this->setear($arrRegistro['Nombre'],$arrRegistro['Apellido'],$arrRegistro['fechaNac'],$arrRegistro['Telefono'],$arrRegistro['Domicilio'],$arrRegistro['NroDni']); 

                }// fin if 

            }// fin 

        }// fin if
        else{
            $this->setMensaje("Error tabla persona ").$objBase->getError(); 
        } 
    }// fin function 

    /**METODO INSERTAR PERSONA 
     * ingersa un registro en la tabla persona
     * @return boolean
     */
    public function insertar(){
        $salida=false; 
        $objBase=new BaseDatos();
        $dni=$this->getDni();
        //var_dump($dni);
        $sql="INSERT INTO persona (NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio) 
        VALUES($dni,'".$this->getApellido()."','".$this->getNombre()."','".$this->getfechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."');";
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true;

            }// fin if 
            else{
                $this->setMensaje("Persona -> Insertar".$objBase->getError());

            }// fin else

        }// fin if 
        else{
            $this->setMensaje("Persona -> Insertar".$objBase->getError());

        }// fin else
        return $salida; 
        
    }// fin function 

    /**
     * Funcion Modificar 
     * @return boolean
     */
    public function modificar(){
        $salida=false;
        $objBase=new BaseDatos(); 
        $sql="UPDATE persona SET Apellido='".$this->getApellido()."', Nombre='".$this->getNombre()."', fechaNac='".$this->getfechaNac()."',Telefono='".$this->getTelefono()."',Domicilio='".$this->getDomicilio()."' WHERE NroDni=".$this->getDni();
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true; 

            }// fin if 
            else{
                $this->setMensaje("Tabla Modificar Persona".$objBase->getError()); 
            }// fin else 

        }// fin if
        else{
            $this->setMensaje("Tabla Modificar ".$objBase->getError());
        } // fin else
        return $salida; 
    
    }// fin function 

    /**
     * METODO ELIMINAR 
     * @return boolean 
     */
    public function eliminar(){
        $salida=false;
        $objBase=new BaseDatos();
        $sql="DELETE FROM  persona WHERE NroDni=".$this->getDni();
        if($objBase->Iniciar()){
            if($objBase->Ejecutar($sql)){
                $salida=true; 
            }// fin if 
            else{
                $this->setMensaje("Tabla persona-> eliminar".$objBase->getError()); 
            }// fin else

        }// fin if 
        else{
            $this->setMensaje("Tabla persona-> eliminar".$objBase->getError());

        }// fin else

        return $salida; 


    }// fin function 

    /**
     * METODO LISTAR
     * @param string parametro 
     * @return array
     */
    public static function listar($parametro){
        $arrayDatos=array();
        $objBase=new BaseDatos();
        $sql="SELECT * FROM persona";

        if($parametro!=""){
            $sql.="WHERE".$parametro;
        }// fin if 
        $res=$objBase->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$objBase->Registro()){
                    $newObjPersona=new Persona(); 
                    $newObjPersona->setear($row['Nombre'],$row['Apellido'],$row['fechaNac'],$row['Telefono'],$row['Domicilio'],$row['NroDni']);
                    array_push($arrayDatos,$newObjPersona);  

                }// fin while
            }// fin if 

        }// fin if 
        return $arrayDatos; 

    }// fin function 

    
    /**
     * METODO PERSONA CON ID
     * Devuelve el obj de la tabla persona con el id dado
     * @param string parametro 
     * @return object
     */
    public  function personaConId($parametro){
        $objPersona=null;
        $objBase=new BaseDatos();
        $sql='SELECT * FROM persona WHERE NroDni="'.$parametro.'"';
        $res=$objBase->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                while($row=$objBase->Registro()){
                    $newObjPersona=new Persona(); 
                    $newObjPersona->setear($row['Nombre'],$row['Apellido'],$row['fechaNac'],$row['Telefono'],$row['Domicilio'],$row['NroDni']);
                    $objPersona=$newObjPersona;  

                }// fin while
            }// fin if 

        }// fin if 
        return $objPersona; 

    }// fin function 



   









}// fin clase persona


?>