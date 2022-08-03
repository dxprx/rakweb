with(document.register){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Type a name");
			username.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Type a Mail");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Type a Password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Type a Password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Password Mismatch");
			confirm_password.focus();
		}
		
		if(ok && username.value.length<3){
			ok=false;
			alert("Username is short");
			password.focus();
		}		

		if(ok && password.value.length<6){
			ok=false;
			alert("Password is short");
			password.focus();
		}
		if(ok && username.value.length>10){
			ok=false;
			alert("Username is long");
			password.focus();
		}
		if(ok && password.value.length>10){
			ok=false;
			alert("Password is long");
			password.focus();
		}

		if(ok){ submit(); }
	}
}
