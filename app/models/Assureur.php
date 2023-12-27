<?php 

class Assureur {

    private $nom;
    private $adress;

    public function __construct()
    {
        
    }

    // <agic Getters 
    public function __get($name) {
        if (property_exists($this , $name)) {
           return $this->$name;
        }else {
            echo "Proprety not Exists";
            return null;
        }
    }
    // Magic Setters
    public function __set($name, $value)
    {
        if (property_exists($this , $name)) {
            return $this->$name = $value;
        }else {
            echo "Proprety not Exists";
        }
    }

}