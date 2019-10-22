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

<div class="alert alert-success" role="alert">
	<?php
		$nbrPhoto = (new PhotoDAO()) -> __getNbrPhotos();
		echo $nbrPhoto[0].' photo(s) selectionnée(s)';
	?>
</div>

<table class="table table-bordered">
<?php
// affichage des photos
$photos = (new PhotoDAO()) -> __getAllPhoto();
foreach ($photos as &$p)
{
	echo '<img src="'.PATH_IMAGES.$p->__getNomFich().'" alt="Photo">';
}
?>
</table>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
