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
	if($check != false){
		$_SESSION['user_info'] = $check;
		header('../index.php');
	} else{
		//echo "login failed" maybe?
		header('../view/login.php');
	}
}

?>