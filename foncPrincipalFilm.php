
<!DOCTYPE html>
<html lang="fr">         
<!--la langue ! -->

<head>
          
		      <meta charset="utf-8"/>
		     <link rel="stylesheet" style="text/css" href="styleCssFilm.css"/> <!--link css-->
			 <title>Film POO  HC</title> 
</head>
<body>
<?php


require_once ("classe/Chanteur.php");  //rappel de mes deux class enfants !!
require_once ("classe/Comedien.php");

$chanteur = new Chanteur(" Prince ", " 'Love Symbole' "," funcky "," Purple Rain ", 1999 ," Parc des Princes à Paris (J'y étais...) ");
$comedien = new Comedien (" Brad "," Pitt ", "l'année des 12 singes ", " Coppola "," Bruce Willis ", 15);
                                            //création de mes 2 chanteur et comédien..

//echo "Le chanteur s'appelle ".$nom->getNom." son prénom est ".$prenom->getPrenom.  //mes echo en concat pour afficher !!
//" son style est funcky ".$style->getStyle." son album fétiche est Purple rain "
//.$disque->getDisque." en ".$annee->getAnnee." et son dernier concert au ".$tournee->getTournee;

//echo "le comdédien s'appelle ".$nom->getNom." son prénom est ".$prenom->getprenom.", il a joué dans ".
//$film->getFilm." avec le réalisateur ".$realisateur->getRealisateur." et joué avec l'acteur ".$comedien->getComedien.
//" Il a joué dans plus de ".$nbreFilm->getFilm;    // synthaxe pour formulaire !!!


echo "<h1>".$chanteur->getInfos()."</h1>"."<br/>";            //affichage objet 1
echo "<h1>".$comedien->getInfos()."</h1>"."<br/>";      //affichage de l'objet 2
echo $chanteur->Image();      //appel de mon image 2 de ma fonction image fichier chanteur !      

?>
</body>
</html>