<?php
namespace raouf;
abstract class Impot{
	protected static $tranche=[0,28000, 40000, 50000, 60000, 150000];
	protected static $tauxIr=[0, 12, 24, 34, 38, 40];
	public static function getIr($salaire){
		$salaire=$salaire*12;
		for($i=count(self::$tranche)-1; $i>=0; $i--){
			if($salaire-self::$tranche[$i]<0){
				return self::$tauxIr[$i];
			}
		}
	}
}
?>