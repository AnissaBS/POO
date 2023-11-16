<?php
include('Eleve.php');
include('EleveFille.class.php');

$eleveN1 = new Eleve();
$eleveN2 = new EleveFille();

$eleveN1->setPrenom('Alain');
$eleveN2->setPrenom('juline');
$eleveN2->setAge(22);

echo $eleveN1->getPrenom(). '<br/>';
echo $eleveN2->getPrenom(). ' qui a' .$eleveN2->getAge(),'ans';
?>