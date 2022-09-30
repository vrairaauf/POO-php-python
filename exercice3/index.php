<?php
require 'Autoloader.php';
$load=new raouf\Autoloader();
$load->register();
$point2d=new raouf\Point2D(2,4);


$carre=new raouf\Carre($point2d, 4, 8);
var_dump($carre);
echo "___________________________________________________________________________";
$rectangle=new raouf\Rectangle($point2d, 6, 10);
var_dump($rectangle);
?>