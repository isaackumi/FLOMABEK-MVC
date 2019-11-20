<?php
$sterm = $_GET['sterm'];
$person = new personClass;
$result = $person->selectItem($sterm);
while($result != false){
	//Might do something aside echo
	echo $result;
}

?>