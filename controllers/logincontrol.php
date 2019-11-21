<?php
//@author Kwabena Aboagye-Otchere
//The header locations might be incorrect
//Front end required
session_start();
require('../classes/personclass.php');

//controller function to log person person in
function loginctrl($a, $b){
	$checkforperson = new personClass;
	$check = $checkforperson->login($a, $b);
	if($check){
		//Initialize session in index file and set user info to null
		$_SESSION['user_info'] = NULL;
		
		//stores all customer detail in the session
		//to call specific attribute, for example email, you do $_SESSION['user_info']['USERID'];
		$_SESSION['user_info'] = $check;
		
	}
}

?>