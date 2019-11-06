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
require(PATH_ENTITY.'Categorie.php');
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?php  echo TITRE_PAGE_ACCUEIL;?></h1>

<!--  Formulaire -->
<div class="alert alert-success" role="alert">
	<?php
		$nbrPhoto = (new PhotoDAO()) -> __getNbrPhotos();
		echo $nbrPhoto[0].' photo(s) selectionnée(s)';
	?>
</div>
<div>
	<form name="myform" cible="index.php" method="GET">
		<p><?= TEXTE_PAGE_ACCUEIL1 ?></p>
		<select name="categorie" id="cat-id" onchange="myform.submit()">
			<option value=""><?=TEXTE_PAGE_ACCUEIL2?></option>
			<?php
				$categories = (new CategorieDAO()) -> __getAllCategorie();
				foreach ($categories as $c)
				{
					echo '<option value="'.$c->__getNomCat().'">'.$c->__getNomCat().'</option>';
				}
			?>
		</select>
	</form>
</div>

<?php
// affichage des photos

if($cat!=""){
	$photos = (new PhotoDAO()) -> __getAllPhotoCat($cat);
} else {
	$photos = (new PhotoDAO()) -> __getAllPhoto();
}
foreach ($photos as &$p)
{
	echo '<img src="'.PATH_IMAGES.$p->__getNomFich().'" alt="Photo">';
}
?>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
