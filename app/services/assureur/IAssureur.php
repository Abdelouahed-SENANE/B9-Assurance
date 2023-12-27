
<?php 

    interface IAssureur {

        public function getAllAssureurs($start,$page);
        public function AddAssureur(Assureur $assureur);
        public function deleteAssureur($assureurID);
        public function updateAssureur(Assureur $assureur , $id);


    }


?>
