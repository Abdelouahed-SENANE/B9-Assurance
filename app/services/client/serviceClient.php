<?php 


    class ServiceClient implements InterfaceClient{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        // Function To add new Client 
        public function addClient(Client $client, $ID_assureur)
        {
            $sql = "
            
            INSERT INTO `client`(`Nom`, `Prénom`, `Adresse`)
            VALUES (:nom , :prenom , :adresse);
            
            SET @ID_Client = LAST_INSERT_ID();

            INSERT INTO `assureurofclient`(`ID_Client`, `ID_Assureur`)
            VALUES (@ID_Client,:ID_Assureur);

            ";
            
            try {
                $this->db->query($sql);
                $this->db->bind(":nom" , $client->nom);
                $this->db->bind(":prenom" , $client->prenom);
                $this->db->bind(":adresse" , $client->adress);
                $this->db->bind(":ID_Assureur" , $ID_assureur);
                $this->db->execute();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                return $error;
            }
        }

        // Delete Client 
        public function deleteClient($clientID)
        {
            $sql = "UPDATE client SET delete_at = CURRENT_DATE WHERE ID_Client = :id";
            $this->db->query($sql);
            try {
                $this->db->bind(":id" , $clientID);
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        // Fetch All Client 
        public function getAllClient() {

            $sql = "SELECT 
            c.ID_Client,
            c.Nom AS Client_Nom,
            c.Adresse AS Client_Adresse,
            a.ID_Assureur,
            c.Prénom AS Client_Prenom,
            a.Nom AS Assureur_Nom,
            a.Adresse AS Assureur_Adresse
            FROM client c
            JOIN assureurofclient aoc ON c.ID_Client = aoc.ID_Client
            JOIN assureur a ON aoc.ID_Assureur = a.ID_Assureur
            WHERE c.delete_at IS NULL";

            $this->db->query($sql);
            try {
                $this->db->execute();
                $clients = $this->db->manyOjects();
                return $clients;
            } catch (PDOException $e) {
                $error = $e->getMessage();
                return $error;
            }



        }


    }
?>