//Javascript functions which may come in handy for project
//@author Kwabena Aboagye-Otchere

var emailregex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/;


function checkEmail(){
	var userinput = document.getElementById(/*Enter element's ID here*/).value;

	var testemail = emailregex.test(userinput);

/*You can change it from alert to do some other thing instead of a popup
For example, some forms just make it appear as red text on top of the place where
the email was typed*/

	if(!testemail){
		alert("Email is not valid");
	}

}




//This checks for a 10 digit phone number. This is because,
// we assume every phone number entered will be Ghanaian so no need to check country codes
var phonenumregex = /0[2,5][0,4,5,6,7]([0-9]{7})/;

function checkNumber(){
	var userinput = document.getElementById(/*Enter element's ID here*/).value;

	var testphonenum = phonenumregex.test(userinput);

	//Once again you can change the alert to do something else. 
	//Its going to be like this for all functions because idk how you'd want to display these
	if(!testphonenum){
		alert("Phone number is not valid");
	}

}