<!-- #STRUCTURE D UNE PAGE WEB DE BLOG -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Mes articles</h1>
	<?php
		include('p07.php');
		foreach ($articles as $article) {
		 	echo '<h2>' . $article['title'] . '</h2>';
		 	echo '<p>' . $article['content'] . '</p><br>';
		 } 
 	?>
</body>
</html>