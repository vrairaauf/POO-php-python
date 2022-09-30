<?php

require 'Autoloader.php';
$auto=new raouf\Autoloader();
$auto->load();

$article1=new raouf\Article('AZE1234', 'mobile', 129, 2);
$article2=new raouf\Article('AZE1235', 'imprimante', 124, 2);
$article3=new raouf\Article('AZE1236', 'hub', 100, 2);
$article4=new raouf\Article('AZE1237', 'cable HDMI', 90, 2);
$article5=new raouf\Article('AZE1238', 'modem', 124, 2);


$stock=new raouf\Stock([$article1, $article2, $article3, $article4, $article5]);
$article6=new raouf\Article('AZE1239', 'PC gamer', 120, 8);
$get=$stock->update_article('AZE1234', $article6);
$g=$stock->get_article('AZE1239');
var_dump($g);
?>