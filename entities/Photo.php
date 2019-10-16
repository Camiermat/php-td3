<?php
class Photo {
	private $_photoId;
	private $_nomFich
	private $_description;
	private $_catId;
	
	public function __construct($p, $n, $d, $c){
		$_photoId = $p;
		$_nomFich = $n;
		$_description= $d;
		$_catId = $c;
	}

	public function __getPhotoId(){
		echo $this->$_photoId;
	}
	
	public function __getNomFich(){
		echo $this->$_nomFich;
	}
	
	public function __getDescription(){
		echo $this->$_description;
	}	
	
	public function __getCatId(){
		echo $this->$_catId;
	}
}
?>