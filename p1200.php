<?php 

/*il existe des variables globales (dizaines) (ce sont tous des tableaux = array)
$_GET : contient toutes les données tramises en --get--
$_POST : contient toutes les données transmises en --post--
$_SESSION : contient toutes les données présente en session
etc

*/

//var_dump($_GET);

$title = $_GET["title"]; //recuperation de la valeur de la clé : "title" dans mon tableau $_GET (qui est une array)
$content = mysql_real_escape_string($_GET["content"]);

//la ligne 13 et 14 est ce qu'on appel communement une extraction

//var_dump("<br>", $title, "<br>", $content); 


try
{
	$pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
	$sql = "INSERT INTO `articles`(`id`, `title`, `content`, `date`) VALUES (null, '$title', '$content', NOW())";
	//--articles-- table dans laquel je vais inserer mes donnée, --id,title,etc...-- se sont les noms des champs de ma table
	//echo $sql; die; // technique de debugage, le die arrete l'execution du script
	$pdo->exec($sql);
	echo 'L\'article a bien été ajouté !';
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}





 ?>