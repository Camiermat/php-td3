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
			<?php
			if(!isset($_GET['categorie'])){
				echo '<option value="'.TEXTE_PAGE_ACCUEIL2.'">'.TEXTE_PAGE_ACCUEIL2.'</option>';
				$categories = (new CategorieDAO()) -> __getAllCategorie();
				foreach ($categories as $c)
				{
					echo '<option value="'.$c->__getNomCat().'">'.$c->__getNomCat().'</option>';
				}
			} else {
				echo '<option value="'.$_GET['categorie'].'">'.$_GET['categorie'].'</option>';
				$categories = (new CategorieDAO()) -> __getAllCategorie();
				foreach ($categories as $c)
				{
					if ($c->__getNomCat()!=$_GET['categorie']){
						echo '<option value="'.$c->__getNomCat().'">'.$c->__getNomCat().'</option>';
					}
				}
				if($_GET['categorie']!=TEXTE_PAGE_ACCUEIL2){
					echo '<option value="'.TEXTE_PAGE_ACCUEIL2.'">'.TEXTE_PAGE_ACCUEIL2.'</option>';
				}
			}
			?>
		</select>
	</form>
</div>

<?php
// affichage des photos

if($cat!=TEXTE_PAGE_ACCUEIL2){
	$photos = (new PhotoDAO()) -> __getAllPhotoCat($cat);
} else {
	$photos = (new PhotoDAO()) -> __getAllPhoto();
}
foreach ($photos as &$p)
{
	echo '<a href="index.php?page=detail&id='.$p->__getPhotoId().'"><img  src="'.PATH_IMAGES.$p->__getNomFich().'" alt="Photo"></a>';
}
?>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
