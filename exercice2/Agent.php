<?php

namespace raouf;
class Agent extends Employe{
	private $primeResp;
	public function __construct($nom, $ddn, $salaire, $pr){
		parent::__construct($nom, $ddn, $salaire);
		$this->primeResp=$pr;
	}
	public function SalaireAPayer(Solution $sol){
		return ($this->getSalaire()+$this->primeResp)*(1-$sol::getIr($this->getSalaire()))."\t TND"; 
	}
}
?>