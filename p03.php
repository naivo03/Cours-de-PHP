<!-- #TABLEAU #FOREACH -->

<?php 

$tab = array();
$tab[0.36] = 0; //les tableaux sont dites a syteme de #clé -> #valeur , usuellement on utilise soit des int soit des strings comme #clé 

//var_dump($tab);


/* Utilisation des clés textuelles */
$sasuke = array();
$sasuke['age'] = 17;
$sasuke['village'] = 'Konoha';
var_dump($sasuke);
/* fin utilisation des clés textuelles */

/* Utilisation des clés nombres */

$table = array(
		0 => 'toto',
		1 => 'titi',
		2 => 'tata'
	);

foreach ($table as $nom) { //foreach de base qui va boucler de maniere tableau -> valeur
	echo "$nom<br>";
}

//traduction du foreach avec un for

//documentation PHP : PHP.net la meilleur au monde

for ($i = 0 ; $i < sizeof($table); $i++){ //sizeof est un alias de count
 	echo "$table[$i]<br>";
}

/* fin utilisation des clés nombres */

$tests = []; //ajouter dans la derniere version de PHP ceci equivaut a # $tests = array(); # 

$ages = [10, 11, 12]; //ici ne pas mettre de clés équivaut a donné automatiquement et par ordre croissant des clés numériques

var_dump($ages);

 ?>