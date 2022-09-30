<?php
namespace raouf;
class Rectangle extends Forme{
	private $longueur;
	private $largeur;
	public function __construct($centre,$long, $larg){
		parent::__construct($centre);
		$this->longueur=$long;
		$this->largeur=$larg;
	}
	public function getLongueur(){
		return $this->longueur;
	}
	public function getLargeur(){
		return $this->largeur;
	}
	public function surface(){
		return $this->longueur*$this->largeur;
	}
	public function perimetre(){
		return 2*($this->longueur*$this->largeur);
	}
	public function toString(){
		return 'une description complete de lobjet';
	}

}
?>