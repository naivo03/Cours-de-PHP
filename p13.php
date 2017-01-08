<!-- #PROGRAMATION ORIENTE OBJET #CLASS #OBJET -->

<?php 

class Robot //toujours une majuscule au nom de la classe
{
 /* une class contient trois types d'element differents:
 constructeur : fonction de construction de l'objet 
 attributs : les variables appartennant a la classe ou objet
 methode : les focntions appartenant a l'objet
 */

public function __construct()
{
	$this->setName("titi");//syntaxe pour acceder a une fonction de la classe elle meme
	echo 'creation d\'un robot<br>';
}

private $nom= null;

public function getName(){
	return($this->nom); //syntaxe pour acceder a une variable de la classe elle meme
}

public function setName($name){ //il faut utiser le camel case en poo pour les noms de methode et attributs
	$this->nom = $name;
}



}

$robot = new Robot(); //ici robot est un objet (non pas Robot dui est une classe!! atention!), un objet est l'instance d'une classe
var_dump($robot);
$robot->setName("toto");
var_dump($robot->getName());
var_dump($robot);
 ?>