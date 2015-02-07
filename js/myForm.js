function name(){
	
	var myID;
	
	if (this == document.getElementById("firstname"))
		myID = "firstVerif";
	else
		myID = "lastVerif";
	
	var patt = /^[a-z]+\-?[a-z]+$/i;
	
	var result = patt.test(this.value);
	
	if (!result) {	
		document.getElementById(myID).innerHTML = " &#x274c; ";
		this.focus();
	} else
		document.getElementById(myID).innerHTML = " &#x2713; ";
}

function phonenumber(){
	
	var patt = /^\(\d{3}\)\s?\d{3}\-\d{4}$/;
	
	var result = patt.test(this.value);
	
	if (!result) {
		document.getElementById("phoneVerif").innerHTML = " &#x274c; ";
		this.focus();
	} else
		document.getElementById("phoneVerif").innerHTML = " &#x2713; ";
}

function email(){
	
	var patt = /^[a-zA-Z0-9_.]+\@[a-zA-Z0-9_.]+\.\w{2,}$/;
	
	var result = patt.test(this.value);
	
	if (!result) {
		document.getElementById("emailVerif").innerHTML = " &#x274c; ";
		this.focus();
	} else
		document.getElementById("emailVerif").innerHTML = " &#x2713; ";
}

function login (){
	
	if (this.value.length < 6) {
		document.getElementById("loginVerif").innerHTML = " &#x274c; ";
		this.focus();
	} else {
		var patt = /^[a-z0-9]{6,}$/i;
	
		var result = patt.test(this.value);
	
		if (!result) {
			document.getElementById("loginVerif").innerHTML = " &#x274c; ";
			this.focus();
		} else
			document.getElementById("loginVerif").innerHTML = " &#x2713; ";

	}
}

function password(){	
	
	if (this.value.length < 6) {
			document.getElementById("passwordVerif").innerHTML = " &#x274c; ";
		this.focus();

	} else {
		var patt = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{6,}$/;
	
		var result = patt.test(this.value);
	
		if (!result) {
			document.getElementById("passwordVerif").innerHTML = " &#x274c; ";
			this.focus();
		} else
			document.getElementById("passwordVerif").innerHTML = " &#x2713; ";
	}
}

function verifyPassword(){
	if (this.value != document.getElementById("password1").value) {
		document.getElementById("matchIndicator").innerHTML = " &#x274c;";
	} else
		document.getElementById("matchIndicator").innerHTML = " &#x2713;";

}