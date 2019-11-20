//@author Kwabena Aboagye-Otchere

function goToServer(){
	//stop the default behaviour of element
	event.preventDefault();

	//grab the search item
  //Nothing like searchbarID exists
  //Incomplete front end
	var myterm = document.getElementById("searchbarID").value;

	//Start ajax code
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
        //Showhere is the place where output will be displayed
        //Nowhere to put the ajax yet
        //incomplete front end
     		document.getElementById("showhere").innerHTML = this.responseText;
   	 	}
  	};
  	xhttp.open("GET", "../view/ajaxprocesss.php?sterm="+myterm, true);
  	xhttp.send();
}