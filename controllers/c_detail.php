<?php

require_once(PATH_MODELS.'PhotoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');

if (isset($_GET["id"])){
	$id =  htmlspecialchars($_GET['id']);
}
require_once(PATH_VIEWS.$page.'.php');