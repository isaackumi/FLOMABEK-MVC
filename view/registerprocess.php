<?php
//Check if submit was clicked for the register page and processes accordingly
require('../controllers/registercontrol.php');

if(isset($_GET['useradd'])){
	//grab form data and store in variables
	//Will change based on what the values for the front end are
	$pemail = $_GET['studemail'];
	$pphone = $_GET['studphone'];
	$ppass = $_GET['studpass'];
	$paddress = $_GET['studaddress'];


	//Call function to register user
	registerctrl($pemail, $pphone, $ppass, $paddress);
	
}


?>