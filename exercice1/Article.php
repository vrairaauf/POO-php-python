<?php
namespace raouf;
class Article{
	private $nrf;
	private $nom;
	private $price;
	private $quantite;

	public function __construct($nrf, $nom, $prix, $quantite){
		$this->nrf=$nrf;
		$this->nom=$nom;
		$this->price=$prix;
		$this->quantite=$quantite;
	}
	public function toString(){
		
	}
	public function get_nrf(){
		return $this->nrf;
	}
	public function get_name(){
		return $this->nom;
	}
	public function get_price(){
		return $this->price;
	}
}
?>

