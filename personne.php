<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Personne{
public $prenom;
public $nom;
public $age; 

    public function __construct($prenom,$nom,$age){//utilisetiret de 8 (2*)
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->age=$age;


    }
    public function nomComplet(){
        //return $this->nom . '' . $this->prenom.''.$this->age . PHP_EOL;
        return sprintf('%s %s %d', $this->nom, $this->prenom, $this->age);
    }
    public function danser(){
        echo $this->prenom. " est entrain de danser".PHP_EOL;
    }

}

$magne = new Personne('Magne','Jean',102);
$Isaac = new Personne('Isaac','jacques',89);

// echo $magne->prenom . PHP_EOL;
// echo $magne->nom . PHP_EOL;
// echo $magne->age . PHP_EOL;
echo $magne->danser();
$ToutLeNom= $magne->nomComplet();
echo "le nom complet est ici ".$ToutLeNom . PHP_EOL;


//creation d'une nouvel objet à partir de la classe personne ou création d'une nouvelle instance de la classe personne.


// echo $magne->prenom . PHP_EOL;
// echo $Isaac->prenom . PHP_EOL;

?>

</body>
</html>