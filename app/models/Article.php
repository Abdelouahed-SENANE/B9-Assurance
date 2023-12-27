<?php 
class Article {
    private $titre;
    private $contenu;
    private Client $client;
    private Assureur $assureur;

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
    public function getClient() {
        return $this->client;
    }
    public function setClient(Client $objet) {
        return $this->client = $objet;
    }
    public function getAssureur() {
        return $this->assureur;
    }
    public function setAssureur(Assureur $objet) {
        return $this->assureur = $objet;
    }
}