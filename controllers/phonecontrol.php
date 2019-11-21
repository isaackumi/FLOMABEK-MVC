<?php
require('../classes/personclass.php');

//@author Kwabena Aboagye-Otchere
//function to return details of item
//Label, color, internal memory size then a boolean denoting if it is dualsim or not
function getPhone($a, $b, $c, $d){
	$person = new personClass;
	$result = $person->selectPhone($a, $b, $c, $d);
	if($result){
		return $result;
	} else{
		//Let user know its unavailable
	}
}

?>