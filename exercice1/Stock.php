<?php
namespace raouf;
class Stock{
	private $article=[];
	public function __construct($articles=array()){
		foreach($articles as $art){
			array_push($this->article, $art);
		}
	}
	public function voir_stock(){
		foreach($this->article as $item){
			var_dump($item);
		}
	}
	public function get_article($ref){

		if(empty($this->article)){
			return false;
		}else{
			
			foreach($this->article as $item){

				if($item->get_nrf()===$ref){
					return $item;
				}
			}
			return false;
		}
	}
	public function add_article(raouf\Article $article){
		if($this->get_article($article->get_nrf())){
			return false;
		}else{
			array_push($this->article, $article);
			return true;
		}
	}
	public function remove_article(raouf\Article $article){
		if($this->get_article($article->get_nrf())){
			for($i=0;$i<count($this->article);$i++){
				if($this->article[$i]->get_nrf()===$article->get_nrf()){
					unset($this->article[i]);
					return true;
				}
			}
		}else{
			return false;
		}
	}
	public function update_article($ref,$article){
		if($this->get_article($ref)){
			for($i=0;$i<count($this->article);$i++){
				if($this->article[$i]->get_nrf()===$ref){
					$this->article[$i]=$article;
					return true;
				}
			}
		}else{
			return false;
		}
	}
	public function get_with_name($name){
		if(empty($this->article)){
			return false;
		}else{
		foreach($this->article as $item){
			if($item->get_name()===$name){
				return $item;
			}
		}
		return false;
		}
	}
	public function search_with_intervale($interval=array()){
		foreach($this->article as $item){
			if($item->get_price()>= $interval[0] AND $item->get_price()<= $interval[1]){
				echo $item->get_name().'   :'.$item->get_price();

			}
		}
	}
}
?>