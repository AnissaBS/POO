<?php
class Personne{
    protected $_nom;
    protected $_prenom;
    protected $_age;

    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function getNom(){
        return strtoupper($this->_nom);     // Mettre en majuscule les noms
    }

    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }

    public function setAge($age){
        $this->_age=$age;
    }
    public function getAge(){
        return $this->_age;
    }
}
?>
