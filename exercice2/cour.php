<?php
function affiche($n){
	if($n==0){
	
		return 0;
	}else{
		affiche($n--);
	}
}
$r=affiche(5);
echo $r;
?>