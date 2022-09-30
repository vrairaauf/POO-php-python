<?php
namespace raouf;
class Cercle extends Forme
{
	private $rayon;
	public function __construct($centre, $rayon){
		parent::__construct($centre);
		$this->rayon=$rayon;
	}
	public function surface(){
		return $this->rayon*$this->rayon*parent::PI;
	}
	public function perimetre(){
		return $this->rayon*parent::PI*2;
	}
	public function toString(){
		return 'descriptioon';
	}

}

?>