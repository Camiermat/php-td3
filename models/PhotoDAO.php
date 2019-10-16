<?php
require_once(PATH_MODEL,'DAO.php');

class PhotoDAO extends DAO {
	
	public function __getPhoto($i){
		$res = $this->queryRow('SELECT * FROM Photo where photoId = ?',array($i));
		if ($res){
			require_once(PATH_UTILITIES,'Photo.php');
			return new Photo($_res['photoId'],$_res['nomFich'],$_res['description'],$_res['catId']);
		} else return null;
	}
}
?>