<?php



function sanitizeData($input) {
	$data = trim($input);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
}

//function to get the current page you're on
function getCurrentPage(){
    $page_url   = 'http';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
        $page_url .= 's';
    }
    return $page_url.'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
}

//function to calculate the amount the user will pay if they choose to pay in installments
function getAmount($cost, $rate){
	$installment = $cost * ((0.3 * ((1+0.3)**($rate)))/(((1+0.3)**($rate - 1)))); 
	return $installment;
}

//Start session in every page and call this function to store the page
//To be used on the login page to redirect the user back to the page they were on before
//Inititialize this session variable in the index page
//$_SESSION['page'] = getCurrentPage();
?>