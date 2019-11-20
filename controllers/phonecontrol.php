<?php
require('../classes/personclass.php');

//@author Kwabena Aboagye-Otchere
//function to return details of item
//Label, color, internal memory size then a boolean denoting if it is dualsim or not
function getPhone($a, $b, $c, $d){
	$person = new personClass;
	$result = $person->selectPhone($a, $b, $c, $d);
	if($result != false){
		return $result;
	}
}

//Used to calculate installment value
function getCost($cost, $rate){
	$installment = $cost * ((0.3 * ((1+0..3)**($rate)))/(((1+0..3)**($rate - 1)))); 
	return $installment;
}
?>