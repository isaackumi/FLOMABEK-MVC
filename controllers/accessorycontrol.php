<?php
require('../classes/personclass.php');

//@author Kwabena Aboagye-Otchere
//function to return details of item
//Label, then color
function getAccessory($a, $b){
	$person = new personClass;
	$result = $person->selectAccessory($a, $b);
	if($result){
		return $result;
	} else{
		//Let user know its unavailable
	}
}


?>