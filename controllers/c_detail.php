<?php

require_once(PATH_MODELS.'PhotoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');

if (isset($_GET["id"])){
	$id =  htmlspecialchars($_GET['id']);
	$nb = (new PhotoDAO())->__existPhoto($id);
	if ($nb<=0){
		$alert = choixAlert('url_non_valide');
		$page = "404";
	} else {
		$p = (new PhotoDAO())->__getPhoto($id);
	}
}
require_once(PATH_VIEWS.$page.'.php');