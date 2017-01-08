<!-- #REQUETES #HTTP #INTERFACE GRAPHIQUE #LAISON PHP HTML -->

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un article</title>
</head>
<body>

<h1>Ajouter un article</h1>

<form method="GET" action="p1200.php"> <!-- en HTML on utilise deux types de requetes HTTP: GET et POST (GET rend les données visibles car les données sont comprises dans l'URL POST rend les données masqués car elle sont dans le coeur de la requete), action est l'URL du fichier PHP dans lequel je vais envoyer ma data -->

<input type="text" name="title" value="Mon titre par defaut"> <!-- input est la balise qui va faire rentrer la data
																description de la syntaxe:
																-input = le type de balise
																-type,name,etc... = attribut de la balise -->
<br>
<textarea name="content" rows='4' cols="50"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </textarea>
	
<br>
<input type="submit" value="Ajouter"> <!-- submit est la balise qui permet de valider tout le formulaire dans lequel il est-->

</form>

</body>
</html>