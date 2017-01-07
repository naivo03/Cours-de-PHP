<!-- #DATA #LIAISON PHP MYSQL -->

<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', ''); //creation d'une classe PHP le PDO
	$sql = 'SELECT * FROM articles';
	$stmt = $pdo->query($sql); //query est une methode de la classe PDO qui execute la requete SQL demander
	$articles = $stmt->fetchAll(PDO::FETCH_OBJ); //fetchall methode extrait donnée sous forme d objet logiue PHP
	//var_dump($articles);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
