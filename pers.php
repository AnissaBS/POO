<?php

class Pers{
    public $prenom;
    private $nom;
    private $age; 
    
    public function __construct($prenom,$nom,$age){       //utilise tiret de 8 (2*)
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->age=$age;    // L'âge ne s'affichera pas si la variable $age est en privé (= private (pareil si protected))
    }
    // setter : pour but de modifier la fonction mais ne l'affiche ensuite qu'avec le get
    public function setNom($nom){
        $this->nom=$nom;
    }
    // getter : affiche la fonction privé en public
    public function getAge(){   // On crée une public function de sorte à rendre la variable age public
        return $this->age;
    }
    public function getNom(){
        return $this->nom;
    }
    public function saluer(){
        echo "Salut les amis !";
    }
    
}

$emi = new Pers("Emilienne ", "MAILLARD ", 27);
echo $emi->prenom;
echo $emi->getNom();
echo $emi->getAge()."ans";



?>