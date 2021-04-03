<?php

Class Teatro{
    
    private $nombre;
    private $direccion;
    private $funciones;

    public function __construct($nombre, $direccion)
    {
        
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = [
            ["nombre" => "", "precio" => 0],
            ["nombre" => "", "precio" => 0],
            ["nombre" => "", "precio" => 0],
            ["nombre" => "", "precio" => 0],
        ];

    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
       
    }

    /**
     * Get the value of funciones
     */ 
    public function getFunciones()
    {
        return $this->funciones;
    }

    /**
     * Set the value of funciones
     */ 
    public function setFunciones($funciones)
    {
        $this->funciones = $funciones;
        
    }

    public function cambiarNombreTeatro($nuevoNombre){

        $this->setNombre($nuevoNombre);

    }

    public function cambiarDireccion($nuevaDireccion){

        $this->setDireccion($nuevaDireccion);

    }

    public function cambiarNombreFuncion($busca, $nuevoNombre){

        $seCambio = false;

        foreach ($this->funciones as $key => $value) {

            if (strtolower($value["nombre"]) == strtolower($busca)) {
            
                $this->funciones[$key] = ["nombre"=> $nuevoNombre,"precio"=> $value["precio"]];
                $seCambio = true;
            }

        }

        return $seCambio;

    }

    public function cambiarPrecioFuncion($busca, $nuevoPrecio){

        $seCambio = false;

        foreach ($this->funciones as $key => $value) {

            if (strtolower($value["nombre"]) == strtolower($busca)) {
            
                $this->funciones[$key] = ["nombre"=>$value["nombre"],"precio"=> $nuevoPrecio];
                $seCambio = true;
            }

        }

        return $seCambio;

    }


    public function __toString()
    {   

       $respuesta= "\n\n <-<-< Teatro ". $this->getNombre()." >->->\n Direccion: ". $this->getDireccion(). "\n. ".$this->mostrarFunciones() ."\n";

        return  $respuesta;
    }


    public function mostrarFunciones(){

        $arreglo="";

        foreach ($this->funciones as $key => $value) {
           
            $arreglo .= "Nombre de funcion: ".$value["nombre"]."\n"."Precio de funcion: ".$value["precio"]."\n\n";
            
        }

        return $arreglo;
    }


}