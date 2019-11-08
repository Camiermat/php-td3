<?php
require_once('DAO.php');

class PhotoDAO extends DAO {
	
	public function __getPhoto($i){
		$res = $this->prepareCat('SELECT * from Photo where photoId = ?');
		$res -> execute(array(htmlspecialchars($i)));
		if ($res){
			require_once(PATH_ENTITY.'Photo.php');
			foreach ($res as $p){
				$result = new Photo($p['photoId'],$p['nomFich'],$p['description'],$p['catId']);
			}
			return $result;
		} else return null;
	}
	
	public function __getAllPhoto(){
		$res = $this->queryAll('SELECT * from Photo');
		if ($res){
			require_once(PATH_ENTITY.'Photo.php');
			foreach ($res as $p) {
				$tab[] = new Photo($p['photoId'],$p['nomFich'],$p['description'],$p['catId']);
			}
			return $tab;
		} else return null;
	}
	
	public function __getAllPhotoCat($c){
		$res = $this->prepareCat('SELECT * from Photo, Categorie where Categorie.catId=Photo.catId and nomCat=?');
		$res -> execute(array(htmlspecialchars($c)));
		if ($res){
			require_once(PATH_ENTITY.'Photo.php');
			foreach ($res as $p) {
				$tab[] = new Photo($p['photoId'],$p['nomFich'],$p['description'],$p['catId']);
			}
			return $tab;
		} else return null;
	}
	
	public function __getNbrPhotos(){
		$res = $this->queryRow('SELECT count(*) from Photo');
		if ($res){
			return $res;
		} else return null;
	}
	
	public function __existPhoto($i){
		$res = $this->prepareCat('SELECT * from Photo where photoId=?');
		$res -> execute(array(htmlspecialchars($i)));
		if ($res){
			$mdrclememenomqueleparametre=0;
			foreach ($res as $p){
				$mdrclememenomqueleparametre+=1;
			}
			return $mdrclememenomqueleparametre;
		} else return null;
	}
	
	public function __getCatPhoto($id){
		$res = $this->prepareCat('SELECT nomCat from Photo, Categorie where Categorie.catId=Photo.catId and photoId=?');
		$res -> execute(array(htmlspecialchars($id)));
		if ($res){
			foreach($res as $pp){
				$result = $pp['nomCat'];
			}
			return $result;
		} else return null;
	}
}
?>