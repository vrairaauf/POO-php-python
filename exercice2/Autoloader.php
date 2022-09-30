<?php
namespace raouf;
class Autoloader{
	public function load(){
		spl_autoload_register(array(__CLASS__,'autoload'));
	}
	public function autoload($classe){
		if(strpos($classe, __NAMESPACE__.'\\')===0){
			$classe=str_replace(__NAMESPACE__ .'\\','' ,$classe);
			require $classe.'.php';
		}
		
	}
}
?>