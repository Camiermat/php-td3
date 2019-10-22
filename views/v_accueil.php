<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
require(PATH_ENTITY.'Photo.php');
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?php  echo TITRE_PAGE_ACCUEIL;?></h1>

<!--  Formulaire -->

<!--  Table  -->


<table class="table table-bordered">
<?php
// affichage des photos
$photos = __getAllPhoto();
foreach($photos as &$p)
{
	echo '<div class = "col-md-6 col-sm-6 col-xs-12">';
	echo '<img src="'.PATH_IMAGES.$p->getNomFich().'" alt="Photo">';
	echo '</div>';
}
?>
</table>
<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
