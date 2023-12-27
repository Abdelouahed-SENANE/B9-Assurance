<?php

    class SAssureur implements IAssureur {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        // ============== GEt All AssurPafinationeurs
        public function getAllAssureurs($start,$page)
        {
            
            $sql = "SELECT * FROM assureur WHERE Delete_at IS NULL LIMIT $start,$page ";

            $this->db->query($sql);
            try {
                $this->db->execute();
                $assureurs = $this->db->manyOjects();
                return $assureurs;
            } catch (PDOException $e) {
                $error = $e->getMessage();
                return $error;
            }
        }
        public function getAllAssureur()
        {
            
            $sql = "SELECT * FROM assureur WHERE Delete_at IS NULL";

            $this->db->query($sql);
            try {
                $this->db->execute();
                $assureurs = $this->db->manyOjects();
                return $assureurs;
            } catch (PDOException $e) {
                $error = $e->getMessage();
                return $error;
            }
        }
        // Function Find Assureur

        public function searchAssureur($request) {
            
            $sql = "SELECT * FROM assureur WHERE Delete_at IS NULL AND Nom LIKE '{$request}%'";

            $this->db->query($sql);
            try {
            $this->db->execute();
            $findAssureur = $this->db->manyOjects();
            return $findAssureur;
            } catch (PDOException $e) {
                return $e->getMessage();
            }


        }

        // Add Assureur 
        public function AddAssureur(Assureur $assureur) {

            $sql = "INSERT INTO assureur (Nom , Adresse) VALUES (:nom , :adress)";

            $this->db->query($sql);
            try {
                $this->db->bind(":nom" , $assureur->nom);
                $this->db->bind(":adress" , $assureur->adress);
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        // Delete Assureur 
        public function deleteAssureur($assureurID)
        {
            $sql = "UPDATE assureur SET Delete_at = CURRENT_DATE WHERE ID_Assureur = :id";
            $this->db->query($sql);
            try {
                $this->db->bind(":id" , $assureurID);
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function updateAssureur(Assureur $assureur , $id)
        {
            $sql = "UPDATE assureur SET Nom = :nom , Adresse = :adress WHERE ID_Assureur = :id";
            $this->db->query($sql);
            try {
                $this->db->bind(":id" , $id);
                $this->db->bind(":nom" , $assureur->nom );
                $this->db->bind(":adress" , $assureur->adress);
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function getNumRows() {
            $sql = "SELECT * FROM assureur WHERE Delete_at IS NULL";

            $this->db->query($sql);
            try {
                $assureurs = $this->db->manyOjects();
                return count($assureurs);
            } catch (PDOException $e) {
                $error = $e->getMessage();
                return $error;
            }
        }

    }

?>
