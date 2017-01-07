<!-- #TABLEAU #FOREACH -->

<?php 

//comme vu dans p03 ceci est une manier de plus de creer et d'initialiser un tableau

$table = [];

$table[] = 'element1';
//ajoute 'element1' et calcul automatiquement sa clé

$table[] = 'element2';
$table[] = 'element3';
$table[] = 'element4';

foreach ($table as $cle => $value) { //ici on associe la clé et la valeur a la table 
	echo "pour la clé $cle on a la valeur $value <br>";
}

var_dump($table); 

 ?>