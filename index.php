<?php
include('personne.php');
include('agriculteur.php');
include('boulanger.php');
include('infirmier.php');

$pers1 = new agriculteur('Dupire', 'Alain', 38);
echo $pers1->dormir(). '<br/>';

$pers2 = new boulanger('Tighzoui', 'Mahmoud', 19);
echo $pers2->dormir(). '<br/>';


$pers3 = new infirmier('Dos Santos', 'Fatima', 54);
echo $pers3->dormir(). '<br/>';

?>
