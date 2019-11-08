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
require(PATH_ENTITY.'Categorie.php');
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?php  echo TITRE_PAGE_DETAIL;?></h1>

<!--  Formulaire -->
<div class="col-md-6 col-sm-6 col-xs-12">
	<img src="<?=PATH_IMAGES.$p->__getNomFich()?>" alt="Photo"/>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
	<table class="table table-bordered">
		<tr>
			<td>
				<?php  echo TITRE_TABLE_1;?>
			</td>
				
			<td>
				<?php  echo $p->__getDescription();?>
			</td>
		</tr>
		<tr>
			<td>
				<?php  echo TITRE_TABLE_2;?>
			</td>
			<td>
				<?php  echo $p->__getNomFich();?>
			</td>
		</tr>
		<tr>
			<td>
				<?php  echo TITRE_TABLE_3;?>
			</td>
			<td>
				<?php  
					$cp = (new PhotoDAO())->__getCatPhoto($id);
					echo '<a href="index.php?categorie='.$cp.'">'.$cp.'</a>';
				?>
			</td>
		</tr>
	</table>
</div>

<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
