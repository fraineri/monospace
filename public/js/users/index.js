var changePass = false;
document.getElementsByClassName('register-form-btn')[0].addEventListener('click',function(e){
	e.preventDefault();
	changePass = (changePass)?false:true;
	if(changePass){
		var txtPassword = document.createElement('INPUT');
		txtPassword.setAttribute('type','password');
		txtPassword.setAttribute('placeholder','Your Password');
		txtPassword.className += "register-form-input {{$errors->has('password') ? ' has-error ' : ''}}";
		document.getElementsByClassName('register-form')[0].appendChild(txtPassword);

	}
});