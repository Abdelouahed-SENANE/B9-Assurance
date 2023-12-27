<?php 

class AssureurOfClient {

    private Client $client;
    private Assureur $assureur;

    public function __construct()
    {
        
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
?>