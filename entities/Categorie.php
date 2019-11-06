<?php
class Categorie {
	private $_catId;
	private $_nomCat;
		
	public function __construct($c, $n){
		$this->_catId = $c;		
		$this->_nomCat = $n;
	}

	public function __getCategorieID(){
		return $this->_catId;
	}
	
	public function __getNomCat(){
		return $this->_nomCat;
	}
}
?>