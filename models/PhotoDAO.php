<?php
require_once('DAO.php');

class PhotoDAO extends DAO {
	
	public function __getPhoto($i){
		$res = $this->queryRow('SELECT * FROM Photo where photoId = ?',array($i));
		if ($res){
			require_once(PATH_ENTITY.'Photo.php');
			return new Photo($res['photoId'],$res['nomFich'],$res['description'],$res['catId']);
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
		
		$res = $this-> prepare('SELECT * from Photo where nomCat=?');
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
}
?>