<?php
require_once(PATH_MODEL,'DAO.php');

class PhotoDAO extends DAO {
	
	public function __getPhoto($i){
		$res = $this->queryAll('SELECT * FROM Photo where photoId = ?',array($i));
		if ($res){
			require_once(PATH_UTILITIES,'Photo.php');
			return new Photo($res['photoId'],$res['nomFich'],$res['description'],$res['catId']);
		} else return null;
	}
	public function __getAllPhoto(){
		$res = $this->queryAll('SELECT * from Photo');
		if ($res){
			require_once(PATH_UTILITIES,'Photo.php');
			
			for ($p : $res) {
				return new Photo($p['photoId'],$p['nomFich'],$p['description'],$p['catId']);
			}
		} else return null;
	}
}
?>