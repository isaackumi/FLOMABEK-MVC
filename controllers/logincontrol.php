<?php
session_start();
require('../classes/personclass.php');

//controller function to log person person in
function loginctrl($a, $b){
	$checkforperson = new personClass;
	$check = $checkforperson->login($a, $b);
	if(mysqli_num_rows($check) > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_info'] = $row;
	}
}

?>