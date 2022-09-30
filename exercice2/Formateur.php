<?php
namespace raouf;
use Impot;
class Formateur extends Employe{
	protected $heureSup;
	protected $remunierationHSup=7000;
	public function getHSup(){
		return $this->heureSup*$this->remunierationHSup;
	}	
	public function __construct($nom, $ddn, $salaire, $nbHS){
		parent::__construct($nom, $ddn, $salaire);
		$this->heureSup=$nbHS;
	}
	public function setNbHSup($nbh){
		$this->heureSup=$nbh;
	}

	public function SalairePaye(Solution $impot){
		return $this->getSalaire()+($this->heureSup*$this->remunierationHSup)*(1-$impot::getIr($this->getSalaire())).'TND';
	}
	//public function __destruct(){
	//	parent::__destruct();

	//}
	public function toString(){
		return $this->nom.'-'.$this->salaire;
	}
} 
?>