<?php 
class Admin extends Controller {
    private $SAssureur;
    private $serviceClient;
    public function __construct()
    {
        $this->SAssureur = new SAssureur();
        $this->serviceClient = new ServiceClient();
    }
    



    public function dashboard() {
        $data = [
            'page' => 'dashboard'
        ];
        
        $this->view('admin/dashboard' , $data);
    }
    public function assureur() {
        $data = [
            'page' => 'assureur'
        ];
        
        $this->view('admin/assureur' , $data);
    }

    // fetch All Assureur
    public function fetchAssureurs() {
        $dropdownAssureur = $this->SAssureur->getAllAssureur();
        $countRow = $this->SAssureur->getNumRows();
        $limit = 10;
        $start = 0;
        $pagination = ceil($countRow / $limit);
        if (isset($_POST['check'])) {
            $start = ($_POST['page'] - 1) * $limit;
        }

        $assureurs = $this->SAssureur->getAllAssureurs($start,$limit);

        $data = [
            'dropAssureur' => $dropdownAssureur,
            'pagination' => $pagination,
            'assureurs' => $assureurs
        ];
        
        try {
            echo json_encode($data);
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    // SEARCH   Assureur
    public function searchAssureur() {


        if (isset($_POST['search'])) {
            $request = $_POST['search'];

            $result = $this->SAssureur->searchAssureur($request);
            echo json_encode($result);
        }
    }

    public function addAssureur() {

        if (isset($_POST['assureur'])) {
            
            $nomAssureur  = $_POST['nom'];
            $adressAssureur  = $_POST['adress'];

            $assureur = new Assureur();
            $assureur->nom = $nomAssureur;
            $assureur->adress = $adressAssureur;

            try {
                $this->SAssureur->addAssureur($assureur);
                echo "Data Added Succesfully";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
            
        }
    }
    // Delete Assureur
    public function deleteAssureur() {

        if (isset($_POST['check_delete'])) {
            $assureurID = $_POST['ID_Assureur'];
            try {
                $this->SAssureur->deleteAssureur($assureurID);
                echo  "Deleted Succefully";
            } catch (PDOException $e) {
                print_r($e->getMessage());
            }
        }


    }
    public function updateAssureur() {

        if (isset($_POST['check_update'])) {

            $id = $_POST['edit_id'];
            $newNom = $_POST['nom'];
            $newAdress = $_POST['adress'];

            $updateAssureur = new Assureur();
            $updateAssureur->nom = $newNom;
            $updateAssureur->adress = $newAdress;

            try {
                $this->SAssureur->updateAssureur($updateAssureur , $id);
                echo "Update Seccufully";
            } catch (PDOException $e) {
                return $e->getMessage();
            }



        }


    }
    public function client() {
        $data = [
            'page' => 'client'
        ];
        
        $this->view('admin/client' , $data);
    }
    // ========== ADD NEW CLIENT =============
    public function addClient() {

        $data =[
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'adress' => $_POST['adress'],
            'assureurId' => $_POST['assureurId'],
        ]; 
        $newClient = new Client();

        $newClient->nom = $data['nom'];
        $newClient->prenom = $data['prenom'];
        $newClient->adress = $data['adress'];

        $this->serviceClient->addClient($newClient, $data['assureurId']);
        echo "Client Added succefully";

    }

    // Function Geet All Client 

    public function deleteClient(){

        if (isset($_POST['check_delete'])) {
            $this->serviceClient->deleteClient($_POST['clientID']);
            echo "Client Deleted Succefully";
        }

    }
    public function getAllClient(){

        
        $clients = $this->serviceClient->getAllClient();

        echo json_encode($clients);

    }



}