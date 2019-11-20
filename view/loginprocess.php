<?php
//@author Kwabena Aboagye-Otchere
//Check if submit was clicked on login page and processes accordingly
require('../controllers/logincontrol.php');

//invalid isset value
if(isset($_GET['useradd'])){
	//grab form data and store in variables
	//Will change based on what the names of the variables on the front end are
	$pemail = $_GET['studemail'];
	$ppass = $_GET['studpass'];

	loginctrl($pemail, $ppass);
?>