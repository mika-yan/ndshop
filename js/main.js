let authModal = document.querySelector(".modal_auth")
let signupModal = document.querySelector(".modal_signup")

function openAuthModal() {
    signupModal.classList.remove('modal_signup_active')
	authModal.classList.add('modal_auth_active')

}

function openSignupModal() {
	authModal.classList.remove('modal_auth_active')
	signupModal.classList.add('modal_signup_active')

}

function closeAuthModal() {

	authModal.classList.remove('modal_auth_active')
	signupModal.classList.remove('modal_signup_active')
}

let login = document.querySelector(".login")
let menu1 = document.querySelector(".menu1")
let menu2 = document.querySelector(".menu2")


function noLogin() {
	login.classList.add('no_login')
	menu1.classList.remove('closemenu')
	menu2.classList.remove('closemenu')
}
 
function yesLogin() {
	menu1.classList.add('closemenu')
	menu2.classList.add('closemenu')
	login.classList.remove('no_login')
}


