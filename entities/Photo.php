<?php
class Photo {
	private $_photoId;
	private $_nomFich;
	private $_description;
	private $_catId;
	
	public function __construct($p, $n, $d, $c){
		$this->_photoId = $p;
		$this->_nomFich = $n;
		$this->_description= $d;
		$this->_catId = $c;
	}

	public function __getPhotoId(){
		return $this->_photoId;
	}
	
	public function __getNomFich(){
		return $this->_nomFich;
	}
	
	public function __getDescription(){
		return $this->_description;
	}	
	
	public function __getCatId(){
		return $this->_catId;
	}
}
?>