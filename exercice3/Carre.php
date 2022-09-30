<?php
namespace raouf;
final class Carre extends Forme
{
	private $longueur;
	private $largeur;
	public function __construct($centre, $long, $larg){
		parent::__construct($centre);
		$this->longueur=$long;
		$this->largeur=$larg;
	}
	public function surface(){
		return 'hh';
	}
	public function  perimetre(){
		return 'jj';
	}
	public function toString(){
		return 'description';
	}

}
?>