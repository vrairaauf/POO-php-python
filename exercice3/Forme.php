<?php
namespace raouf;
use raouf\Point2D;
abstract class Forme{
	protected const PI=3.14;
	private static $cmpt;
	protected $id;
	protected $centre;
	public function __construct(Point2D $centre){
		self::$cmpt++;
		$this->id=self::$cmpt;
		$this->centre=$centre;
	}
	abstract protected function surface();
	abstract protected function perimetre();
	protected function bouger($dx, $dy){
		if($this->centre instanceof Point2D){
			$this->centre->bouger($dx, $dy);
		}
	}

}
?>