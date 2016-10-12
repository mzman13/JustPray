function checkInputs(){
	var name = document.forms["loginForm"]["username"].value;
	var password = document.forms["loginForm"]["password"].value;

	if(!name || name == null){
		alert("Error: Please enter your username\n");
		return false;
	}
	if(!password || password == null){
		alert("Error: Please enter your password\n");
		return false;
	} else {
		return true;
	}
}

function displayMenu(){
	document.getElementById("loginMenu").style.display = "block";
}

function hideMenu(){
	document.getElementById("loginMenu").style.display = "none";
}

window.onclick = function(event){
	modal = document.getElementById("loginMenu");

	if(event.target == modal) {
		modal.style.display = "none";
	}
}
