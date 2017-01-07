<!-- #CONDITIONS #BOUCLES -->

<?php 

$age = 17;

if ($age < 18) {
	echo 'tu es mineur<br>';
} else {
	echo 'tu es majeur<br>';
} //attention a la syntaxe il faut respecter le meme modele que ci-dessus


$nom = 'gaara';
$villageDOrigine = 'Sable';

if ($nom == 'sasuke' || $nom =='itachi'){
	echo 'tu ne peut pas rentrer dans Konoha';
} elseif ($villageDOrigine != 'Konoha') {
	echo 'casse toi de Konoha'; 	
} else {
	echo 'tu peut rentrer dans Konoha';
}

for ($i = 0; $i < 20 ; $i++) {

	echo $i;
	if (($i % 2) == 0){
		echo ' pair<br>';
	} else {
		echo ' impair<br>';
	}
}

//faire attention a la syntaxe, veuillez a respecter la syntaxe comme ci-dessus

 ?>