<?php
//@author Kwabena Aboagye-Otchere
//Check if submit was clicked for the register page and processes accordingly
require('../controllers/registercontrol.php');

if(isset($_GET['useradd'])){
	//grab form data and store in variables
	//Will change based on what the names of the variables on the front end are
	$pemail = $_GET['studemail'];
	$pphone = $_GET['studphone'];
	$ppass = $_GET['studpass'];
	$paddress = $_GET['studaddress'];


	//Call function to register user
	if(emailisvalid){
		if(phonenumisvalid){
			sanitizeemail
			sanitizephonenumb
			sanitizeaddress
			sanitizepass
			if(registerctrl($pemail, $pphone, $ppass, $paddress)){
				//direct to login page
			}else{
				//prompt user registration failed and redirect to registration page again
			}

		}else{
			//phonenumber was invalid
		}
	} else{
		//prompt user email is invald
	}

	
	
}


?>