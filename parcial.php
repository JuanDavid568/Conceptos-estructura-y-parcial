<?php
$animales = array("perro"=>12,"vaca"=>15,"leon"=>17,"sapo"=>18,"cigueña"=>24,"tigre"=>29,"rata"=>35,"rana"=>39);
array_push($animales,"perro");
array_push($animales,"vaca");
array_push($animales,"leon");
array_push($animales,"sapo");
array_push($animales,"cigueña");
array_push($animales,"tigre");
array_push($animales,"rata");
array_push($animales,"rana");

$animales =array_pop($animales);
echo"el animal con mayor edad es: ".$animales
?>