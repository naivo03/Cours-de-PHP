<?php 

/* Exemple pour illustrer l'heritage avec le MC extends ; un Samurai est un guerrier */

class Warrior
{
	private $nom = null; //private signifier que je ne peut acceder a cette variable que dans la classe
	protected $prenom = null; 
	public $legend = null;

	public function attack()
	{
		echo 'Je suis un Guerrier donc j\'attaque !';
	}
}

class Samurai extends Warrior //Warrior est la class mere de Samurai donc samourai herite de tout les attributs de warrior
{

}

$samurai = new Samurai();
var_dump($samurai);

echo '<br>';
$samurai->attack(); //sans avoir creer un methode attack dans Samurai on peut quand meme faire appel a attack car elle est heriter de Warrior.

?>
