<?php
    class infirmier extends Personne{
        public function __construct($nom, $prenom, $age){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setAge($age);
        }
        public function dormir(){
            // return $this->getPrenom();
            return $this->getNom().' '.$this->getPrenom()." l'infirmière, âgée de ".$this->getAge()." ans, se couche à 23h00. <br><br>";
        }
    }
?>