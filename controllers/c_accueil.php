<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */



//appel de la vue
require_once(PATH_MODELS.'PhotoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');

$cat = "";
if (isset($_GET["categorie"])){
	$cat =  htmlspecialchars($_GET['categorie']);
}
require_once(PATH_VIEWS.$page.'.php');