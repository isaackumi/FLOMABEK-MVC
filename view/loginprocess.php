<?php
//@author Kwabena Aboagye-Otchere
//Check if submit was clicked on login page and processes accordingly
session_start();
require('../controllers/logincontrol.php');
require('../settings/globalfunctions.php');

//invalid isset value
if(isset($_GET['useradd'])){
	//grab form data and store in variables
	//Will change based on what the names of the variables on the front end are
	$pemail = $_GET['studemail'];
	$ppass = $_GET['studpass'];

	sanitizeData($pemail);
	sanitizeData($ppass);
	loginctrl($pemail, $ppass)
	if($_SESSION['user_info'] = NULL){
		//prompt user login failed and redirect to login page again
	} else{
		//redirect to previous page or index page if the previous was register
		/if(getCurrentPage() == '../view/register.php'){
			header(location: getCurrentPage());
		}else{
			if(getCurrentPage() == NULL){
				header(location: 'index.php');
			}else{

			}
		}
	}



	
?>