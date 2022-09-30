<?php
namespace raouf;
class Employe implements Iemploye{
	protected static $matricule=0;
	protected $nom;
	protected $ddn;
	protected $ddr;
	protected $salaire;
	protected $age_retraite=63;
	final protected static function incrementer(){
		return self::$matricule++;
	}
		public function __construct($nom,$ddn, $salaire){
		$age=date('Y')-substr($ddn, 0, 4);
		

		if($age<16){
			return 'un age inferieur au 16 ans ';
		}else{
			$this->ddn=$ddn;
			$this->ddr=date('Y-m-d');
		}
		
		self::$matricule=self::incrementer();

		$this->nom=$nom;
		$this->salaire=$salaire;
	}
	public function age(){
		return date('Y-m-d')-$this->ddn;
	}
	public function anciennete(){
		return date('Y-m-d')-$this->ddr;
	}
	public function dateRetrai(){
		return $this->ddn-$this->age_retraite;
	}
	public function getDDN(){
		return $this->ddn;
	}
	public function getDDR(){
		return $this->ddr;
	}
	//public function __destruct(){
	//	echo "cet employer est supprimer";
	//}
	public function getSalaire(){
		return $this->salaire;
	}
	public function getString(){
		return $this->matricule.'-'.$this->nom.'-'.$this->ddn.'-'.$this->ddr.'-'.$this->salaire;
	}
	public function equals(){

	}

 	
}

?>