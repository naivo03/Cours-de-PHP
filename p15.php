<?php 

/* Ce fichier sert à illustrer les methodes statiques */

//un attribut static est un attribut qui peut s'appeler sans l'instantiation d'un classe


class ControlTower
{
	public function __construct()
	{
		echo 'instanciation de l\'objet<br>';
	}

	public static function light() //ici nous avons une fonction static qui pourra s'appeler sans l'instantiation d'une class
	{
		echo 'J\'éclaire<br>';
	}
}

ControlTower::light(); //ici sans instancier la classe on a bien fait appel a la fonction

$c = new ControlTower();
$c->light(); //en ayant instancier la classe on a le meme resultat que ControlTower::light

 ?>