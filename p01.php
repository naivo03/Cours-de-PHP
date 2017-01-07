<!-- #VARIABLES #AFFICHAGE #CONCATENATIONS -->

<?php 

//toutes les variables prennent un '$'
$age = 32; //PHP langage non typé il determine le type en fonction de la valeur donnée

echo "age = $age<br>"; //l'appel d'une variable se fait également avec le $devant le nom de la variable, meme dans les fonctions il n'y a pas de typage la fonction detecte automatiquement le type de la variable 

$phrase = "Ton frere est vieux il a ";

echo "$phrase $age ans, ou ca pique";

//il est interressant de note que l'on ne peut pas mettre de balises HTML dans la balise PHP(par exemple: entre les fonctions), mais l'on peut integre directement des balises HTML dans les chaines de characteres

$reponse = false; //ou false 

echo "<br>$phrase $age? <br> $reponse<br>"; //les booleens sont generalements utilisé dans les conditions, leurs affichages avec echos n'est pas recommandé

var_dump($reponse); //c'est une fonction d'affichage avancé, elle ne sert qu'a faire du débugage, elle affiche le type et la valeur d'une variable

$pourcentage = 0.83; 

echo "<br>le pourcentage est $pourcentage %<br>"; //decimaux avec un '.' et non une virgule
										  //l'utilisation des doubles quotes (") sert a interprétés les variables comprise dans ses doubles quotes cela revient a faire de la concaténation

echo 'le pourcentage est ' . $pourcentage . ' %'; //modele de concaténation

?>