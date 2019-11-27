<html>


<head>
	<title>Accueil</title>
	<link href="sources/discussion.css" rel="stylesheet">
</head>

	<body class="accueil">

		<header>
			<ul class="ul4"> 
<?php
session_start();
if(!empty($_POST['deco']))
{
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['profil']);
}


if((isset($_SESSION['login']))&&(isset($_SESSION['password'])))
{
?>
	<li><a href="sources/profil.php">Profil </a></li>
	<li><a href="sources/discussion.php">Discussions </a></li>

<div class="button">
	<form class="déconnexion" method="post" action="index.php">
		<input type="submit" name="deco" value="Déconnexion">
	</form>
</div>
<?php

}       
else
{
?>
	<li><a href="sources/connexion.php">Connexion</a></li>	
	<li><a href="sources/inscription.php">S'inscrire</a></li>
	<li><a href="sources/discussion.php">Discussions</a></li>
	
	

			</ul>
<?php	
}	

?>

		</header>

<div class="hautpage">
	<video class="zoom" width="25%" muted autoplay loop>
		<source src="videos/rodeos.mp4" type="video/mp4" />
	</video>
</div>

<article class="textpresentation">
	<div class="milieupage">
		<p>L’Ouest des États-Unis, une destination mythique, le rêve de beaucoup d’entre nous avec ces parcs légendaires.</p>
		<p> Et une destination qui ne déçoit jamais à tel point qu’à peine rentré,</p>
		<p> on a toujours envie d’y retourner ! Il est impossible de pouvoir tout faire en un seul voyage, tellement il y a de choses à voir et les espaces sont immenses.</p>
		<p> Afin de vous aider à mieux à préparer votre road-trip, vous trouverez différentes cartes touristiques ainsi que notre top des incontournables.</p>
	</div>
</article>


<article class="carte">
	<div class="milieupage2">
		<p>Cap sur le Far West ! L’Ouest américain est un immense territoire regorgeant de merveilles naturelles. Des Rocheuses jusqu’au Pacifique, des plaines</p>
		<p> de volcans de l’Oregon au désert du Grand Canyon. Cette région est d’une telle richesse qu’il vous faudra certainement plus d’un voyage pour la découvrir entièrement !</p>		
		<a href="https://usa.marcovasco.fr/voyage-ouest-americain.html?gclid=EAIaIQobChMI6Oz_uJKI5gIV14TVCh29YQR0EAAYASACEgIdIfD_BwE"><img class="mapus" src="img/carte.jpg"></a>
	</div>
</article>


<article class="basdepage">
	<h1>Mes photos</h1>
	<div class="photos">
		<img class="rotate" src="img/parcyellowstone.jpg">
		<img class="photosus" src="img/parc.jpg">
		<img class="rotate" src="img/saltlake.jpg">
		<img class="photosus" src="img/bisons.jpg">
	</div>
</article>


<footer>
Adrien-Discussion Etats-Unis 
</footer>

	</body>	
</html>