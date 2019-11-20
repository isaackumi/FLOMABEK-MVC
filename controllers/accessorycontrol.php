<?php
require('../classes/personclass.php');

//@author Kwabena Aboagye-Otchere
//function to return details of item
//Label, then color
function getAccessory($a, $b){
	$person = new personClass;
	$result = $person->selectAccessory($a, $b);
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