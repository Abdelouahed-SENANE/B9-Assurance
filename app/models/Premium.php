<?php 

class Claims {
    private $montant;
    private Claims $claim;

    public function __construct()
    {
        
    }




    public function __get($name)
    {
        if (property_exists($this , $name)) {
            return $this->$name;
        }else {
            echo "Proprety Not exists";
            return null;
        }
        
    }
    public function __set($name, $value)
    {
        if (property_exists($this , $name)) {
            return $this->$name = $value;
        }else {
            echo "Proprety Not exists";
            return null;
        }
    }
    public function getClaims() {
        return $this->claim;
    }
    public function setClaims(Claims $objet) {
        return $this->claim = $objet;
    }

}
?>