<?php

/*### PARADIGMA FUNCIONAL ###*/
$input = array(22,34,17,18,14,13,22,25);

$filtro = function($age){
	return ($age >= 18);
};

$output = array_filter($input,$filtro);

print_r($output);
/*### PARADIGMA FUNCIONAL ###*/