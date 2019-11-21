//Javascript functions for project

var emailregex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/g;


function checkEmail(){
	var userinput = document.getElementById("exampleInputEmail1").value;

	var testemail = emailregex.test(userinput);

/*You can change it from alert to do some other thing instead of a popup
For example, some forms just make it appear as red text on top of the place where
the email was typed*/

	if(!testemail){
		alert("Email is not valid");
	}

}



//This checks if the password entered has one lowercase letter,
// one uppercase, one number and is at least 8 characters long
var passwordregex = /(?=(.*[0-9]))((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.{8,}$/g;

function checkPassword(){
	var userinput = document.getElementById(/*Enter element's ID here*/).value;

	var testpassword = passwordregex.test(userinput);

	//Once again you can change the alert to do something else. 
	//Its going to be like this for all functions because idk how you'd want to display these
	if(!testpassword){
		alert("Password is not valid");
	}
}


//This checks for a 9 digit phone number. This is because,
// we assume every phone number entered will be ghanaian so no need for 
//+233 or the 0. So the number starts from after the 0
var phonenumregex = /^[0][1-9]\d{9}$|^[1-9]\d{8}$/g;

function checkNumber(){
	var userinput = document.getElementById("form-control").value;

	var testphonenum = phonenumregex.test(userinput);

	//Once again you can change the alert to do something else. 
	//Its going to be like this for all functions because idk how you'd want to display these
	if(!testphonenum){
		alert("Phone number is not valid");
	}

}

