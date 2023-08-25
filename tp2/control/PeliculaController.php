<?php

class Pelicula{

    private $titulo;
    private $director;
    private $produccion;
    private $nacionalidad;
    private $duracion;
    private $sinopsis;
    private $actores;
    private $guion;
    private $año;
    private $genero;
    private $restriccionDeEdad;    

    public function __construct($titulo, $director, $produccion, $nacionalidad, $duracion, $sinopsis, $actores, $guion, $año, $genero, $restriccionDeEdad)
    {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->produccion = $produccion;
        $this->nacionalidad = $nacionalidad;
        $this->duracion = $duracion;
        $this->sinopsis = $sinopsis;
        $this->actores = $actores;
        $this->guion = $guion;
        $this->año = $año;
        $this->genero = $genero;
        $this->restriccionDeEdad = $restriccionDeEdad;
    }

    

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of director
     */ 
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set the value of director
     *
     * @return  self
     */ 
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get the value of produccion
     */ 
    public function getProduccion()
    {
        return $this->produccion;
    }

    /**
     * Set the value of produccion
     *
     * @return  self
     */ 
    public function setProduccion($produccion)
    {
        $this->produccion = $produccion;

        return $this;
    }

    /**
     * Get the value of nacionalidad
     */ 
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set the value of nacionalidad
     *
     * @return  self
     */ 
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get the value of sinopsis
     */ 
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     *
     * @return  self
     */ 
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get the value of actores
     */ 
    public function getActores()
    {
        return $this->actores;
    }

    /**
     * Set the value of actores
     *
     * @return  self
     */ 
    public function setActores($actores)
    {
        $this->actores = $actores;

        return $this;
    }

    /**
     * Get the value of guion
     */ 
    public function getGuion()
    {
        return $this->guion;
    }

    /**
     * Set the value of guion
     *
     * @return  self
     */ 
    public function setGuion($guion)
    {
        $this->guion = $guion;

        return $this;
    }

    /**
     * Get the value of año
     */ 
    public function getAño()
    {
        return $this->año;
    }

    /**
     * Set the value of año
     *
     * @return  self
     */ 
    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of restriccionDeEdad
     */ 
    public function getRestriccionDeEdad()
    {
        return $this->restriccionDeEdad;
    }

    /**
     * Set the value of restriccionDeEdad
     *
     * @return  self
     */ 
    public function setRestriccionDeEdad($restriccionDeEdad)
    {
        $this->restriccionDeEdad = $restriccionDeEdad;

        return $this;
    }

    function __toString(){

    $cad = '';
    $titulo = "";
    $director = "";
    $titulo = "";
    $director = "";
    $produccion = "";
    $nacionalidad = "";
    $duracion = "";
    $sinopsis = "";
    $actores = "";
    $guion = "";
    $año = "";
    $genero = "";
    $restriccionDeEdad = "";
    $n = count($datos);


    for ($i = 0; $i < $n; $i++) {
        $funcion = $datos[$i];
        $cad = $cad . "Titulo: " . $titulo . "Director: " . $director;
    }
    }
}