<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class voiture{
        public $marque;
        public $couleur;

        public function __construct($marque, $couleur){
            $this->marque = $marque;
            $this->couleur = $couleur;
        }
    }

    $voiture1 = new voiture("Opel", "Blanche");
    $voiture2 = new voiture("BMW", "Bleu");

    echo "Voiture 1 - Marque : " .$voiture1->marque." - Couleur : ".$voiture1->couleur;
    echo "<br><br>";
    echo "Voiture 2 - Marque : " .$voiture2->marque." - Couleur : ".$voiture2->couleur;
    ?>
</body>
</html>