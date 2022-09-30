<?php
require 'Autoloader.php';
$auto=new raouf\Autoloader();
$auto->load();


//$formateur=new raouf\Formateur('raaouf', '1999-12-11', 11000, 1);
$solution=new raouf\Solution();

//$sal=$formateur->SalairePaye($solution);
$agent=new raouf\Agent('raaouf', '1999-12-11', 11000, 100);
$sal=$agent->SalaireAPayer($solution);
var_dump($sal);
?>