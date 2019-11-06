<?php
require_once('DAO.php');

class CategorieDAO extends DAO {
	
	public function __getAllCategorie(){
		$res = $this->queryAll('SELECT * from Categorie');
		if ($res){
			require_once(PATH_ENTITY.'Categorie.php');
			foreach ($res as $c) {
				$tab[] = new Categorie($c['catId'],$c['nomCat']);
			}
			return $tab;
		} else return null;
	}
}
?>