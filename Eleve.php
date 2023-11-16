<?php
class Eleve{
    protected $_prenom;
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }

}

// $eve= new Eleve();
// echo $eve->_prenom;

?>