var formRegisterSlide = 0;
var btnNext = document.getElementById('next-step');
var btnBack = document.getElementById('previous-step');

btnNext.addEventListener('click',function(e){
	e.preventDefault();
	if(formRegisterSlide<2)
		formRegisterSlide++;

	chengeForm(formRegisterSlide);
});

btnBack.addEventListener('click',function(e){
	e.preventDefault();
	if(formRegisterSlide>0)
		formRegisterSlide--;

	chengeForm(formRegisterSlide);
});


function chengeForm(formRegisterSlide){
			var txtName = document.getElementById('register-name');
			var txtSurname = document.getElementById('register-surname');
			var txtUsername = document.getElementById('register-username');
			var txtEmail = document.getElementById('register-email');
			var txtPassword = document.getElementById('register-password');
			var txtPasswordConfirm = document.getElementById('register-password-confirm');
			var btnSubmit = document.getElementById('register-submit');

	switch(formRegisterSlide){
		case 0:
			btnBack.style.visibility = 'hidden';
			btnNext.style.visibility = 'visible'
			txtName.style.display = "block";
			txtSurname.style.display = "block";
			txtUsername.style.display = "none";
			txtEmail.style.display = "none";			
			txtPassword.style.display = "none";
			txtPasswordConfirm.style.display = "none";
			break;
		case 1:
			btnBack.style.visibility = 'visible';
			btnNext.style.visibility = 'visible'
			txtName.style.display = "none";
			txtSurname.style.display = "none";
			txtUsername.style.display = "block";
			txtEmail.style.display = "block";			
			txtPassword.style.display = "none";
			txtPasswordConfirm.style.display = "none";
			btnSubmit.style.display = "none";
			break;
		case 2:
			btnBack.style.visibility = 'visible';
			btnNext.style.visibility = 'hidden'
			txtName.style.display = "none";
			txtSurname.style.display = "none";
			txtUsername.style.display = "none";
			txtEmail.style.display = "none";			
			txtPassword.style.display = "block";
			txtPasswordConfirm.style.display = "block";
			btnSubmit.style.display = "block";
			break;
	}
}