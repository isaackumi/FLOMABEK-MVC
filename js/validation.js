//Javascript functions which may come in handy for project
//@author Kwabena Aboagye-Otchere

var emailregex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/;


function checkEmail(input){
	var userinput = input;

	var testemail = emailregex.test(userinput);


	if(!testemail) return false;
	 else return true;

}




//This checks for a 10 digit phone number. This is because,
// we assume every phone number entered will be Ghanaian so no need to check country codes
var phonenumregex = /0[2,5][0,4,5,6,7]([0-9]{7})/;

function checkNumber(input){
	var userinput = input;

	var testphonenum = phonenumregex.test(userinput);

	//Once again you can change the alert to do something else. 
	//Its going to be like this for all functions because idk how you'd want to display these
	if(!testphonenum) return false;
	 else return true;

}


function checkInput(email, phone){
	if(checkEmail(email)){
		const email = email;
		if(checkNumber(phone)){
			return true;
		} else{
			alert('Incorrect phone number');
			return false;
		}
	} else{
		alert('Incorrect email');
		return false;
	}
}