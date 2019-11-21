<?php
//@author Kwabena Aboagye-Otchere
require('../classes/personclass.php');
//abcd in this order EMAIL, PHONE_NUMBER, USER_PASSWORD, ADDRESS

//controller function to register person
function registerctrl($a, $b, $c, $d){
	
	//run the email and password by the userexists command. Restarts the registration process if a user with the same credentials is found. Allows registration if no match is found
	if(userexistsctrl($a, $c)){
		return false;
	} else{
		//Create instance of the class
		$insertperson = new personClass;
		$checkInsert = $insertperson->register($a, $b, $c, $d);
		return true;
	}	
}

//controller function to check if a customer exists with the credentials entered as parameters
//helper function for the registerctrl function
function userexists($a, $b){
	$checkforperson = new personClass;
	$check = $checkforperson->login($a, $b);
	if($check){
		return true;
	}else{
		return false;
	}
}

?>