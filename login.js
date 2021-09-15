const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
	container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
	container.classList.remove("sign-up-mode");
});


	// Name Validate
	function valname() {
		var name = document.getElementById('name').value.trim();
		if (name == "") {
			error = "Name cannot be blank.";
			document.getElementById("check1").style.visibility = "hidden";
			document.getElementById("check2").style.visibility = "visible";
			document.getElementById("nameerror").style.visibility = "visible";
	        document.getElementById("nameerror").innerHTML = error;
			document.getElementById('name').focus();
		}
		else if (parseInt(name)) {
			error = "Enter only string.";
			document.getElementById("check1").style.visibility = "hidden";
			document.getElementById("check2").style.visibility = "visible";
			document.getElementById("nameerror").style.visibility = "visible";
	        document.getElementById("nameerror").innerHTML = error;
			document.getElementById('name').focus();
		}
		else{
			document.getElementById("check1").style.visibility = "visible";
			document.getElementById("check2").style.visibility = "hidden";
			document.getElementById("nameerror").style.visibility = "hidden";
		}
		
	}

	// Email Validate

	function valemail() {
		var email = document.getElementById('email').value.trim();
		var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(email.match(mailformat)){
			document.getElementById("check3").style.visibility = "visible";
			document.getElementById("check4").style.visibility = "hidden";
			document.getElementById("emailerror").style.visibility = "hidden";
		}
		else if(email == ""){
			error = "Please provide your Email address";
			document.getElementById("check3").style.visibility = "hidden";
			document.getElementById("check4").style.visibility = "visible";
			document.getElementById("emailerror").style.visibility = "visible";
	        document.getElementById("emailerror").innerHTML = error;
			document.getElementById('email').focus();
		}
		else{
			error = "You have entered an invalid email address.";
			document.getElementById("check3").style.visibility = "hidden";
			document.getElementById("check4").style.visibility = "visible";
			document.getElementById("emailerror").style.visibility = "visible";
	        document.getElementById("emailerror").innerHTML = error;
			document.getElementById('email').focus();
		}
	}

		//Validate mobile number
	

	//validate username

	function valuser() {
		var user = document.getElementById('username').value.trim();
		if (user == "") {
			error = "Please create a username.";
			document.getElementById("check7").style.visibility = "hidden";
			document.getElementById("check8").style.visibility = "visible";
			document.getElementById("usererror").style.visibility = "visible";
	        document.getElementById("usererror").innerHTML = error;
			document.getElementById('username').focus();
		}
		else if ((user.length < 5) || (user.length > 15)) {
			error = "Username should be of length 6 to 14.";
			document.getElementById("check7").style.visibility = "hidden";
			document.getElementById("check8").style.visibility = "visible";
			document.getElementById("usererror").style.visibility = "visible";
	        document.getElementById("usererror").innerHTML = error;
			document.getElementById('username').focus();
		}
		else{
			document.getElementById("check7").style.visibility = "visible";
			document.getElementById("check8").style.visibility = "hidden";
			document.getElementById("usererror").style.visibility = "hidden";
		}
		
	}


	//validate password
	function valpassword() {
		var pass = document.getElementById('password').value.trim();
		var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
		if (pass == "") {
			error = "Please create a password.";
			document.getElementById("check9").style.visibility = "hidden";
			document.getElementById("check10").style.visibility = "visible";
			document.getElementById("passworderror").style.visibility = "visible";
	        document.getElementById("passworderror").innerHTML = error;
			document.getElementById('password').focus();
		}
		else if(pass.match(paswd)){
			document.getElementById("check9").style.visibility = "visible";
			document.getElementById("check10").style.visibility = "hidden";
			document.getElementById("passworderror").style.visibility = "hidden";
		}
		else{
		error = "6-15 length(atleast 1 numeric and 1 special character)";
			document.getElementById("check9").style.visibility = "hidden";
			document.getElementById("check10").style.visibility = "visible";
			document.getElementById("passworderror").style.visibility = "visible";
	        document.getElementById("passworderror").innerHTML = error;
			document.getElementById('password').focus();
		}
		
	}

	//Crosscheck password
	function valcpassword() {
		var pass = document.getElementById('password').value.trim();
		var cpass = document.getElementById('cpassword').value.trim();
		if (cpass == "") {
			error = "Plaese enter the above password.";
			document.getElementById("check11").style.visibility = "hidden";
			document.getElementById("check12").style.visibility = "visible";
			document.getElementById("cpassworderror").style.visibility = "visible";
	        document.getElementById("cpassworderror").innerHTML = error;
			document.getElementById('password').focus();
		}
		else if (cpass != pass) {
			error = "Password does not match.";
			document.getElementById("check11").style.visibility = "hidden";
			document.getElementById("check12").style.visibility = "visible";
			document.getElementById("cpassworderror").style.visibility = "visible";
	        document.getElementById("cpassworderror").innerHTML = error;
	        document.getElementById('cpassword').focus();
		}
		else{
			document.getElementById("check11").style.visibility = "visible";
			document.getElementById("check12").style.visibility = "hidden";
			document.getElementById("cpassworderror").style.visibility = "hidden";
		
		}
	}


	
	
  	




