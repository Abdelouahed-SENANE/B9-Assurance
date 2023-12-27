<?php 


    interface InterfaceClient {

        public function addClient(Client $client , $ID_assureur);
        public function deleteClient($clientID);
        public function getAllClient();



    }


?>