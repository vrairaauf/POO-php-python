<?php
namespace raouf;
/**
 * 
 */
class Point2D
{
	protected $x;
	protected $y;
	public function __construct($x, $y)
	{
		$this->x=$x;
		$this->y=$y;
	}
	public function getCoords($c){
		if($c==='x'){
			return $this->x;
		}elseif ($c==='y') {
			return $this->y;
		}else{
			return false;
		}
	}
	public function toString(){
		return 'Point(X='.$this->x.', y='.$this->y.')';
	}
	public function bouger($dx, $dy){
		$this->x=$this->x+$dx;
		$this->y=$this->y+$dy;
	}

}
?>