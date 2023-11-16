<?php
    class boulanger extends Personne{
        public function __construct($nom, $prenom, $age){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setAge($age);
        }
        public function dormir(){
            // return $this->getPrenom();
            return $this->getNom().' '.$this->getPrenom()." le boulanger, âgé de ".$this->getAge()." ans, se couche à 06h00. <br><br>";
        }
    }
?>