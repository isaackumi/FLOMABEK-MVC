<?php
require('../classes/personclass.php');

//@author Kwabena Aboagye-Otchere
//function to return details of item
//Label, color, internal memory size then screen size
function getLaptop($a, $b, $c, $d){
	$person = new personClass;
	$result = $person->selectLaptop($a, $b, $c, $d);
	if($result){
		return $result;
	} else{
		//Let user know its unavailable
	}
}


?>