window.onload = function() {
	var send = document.getElementById("send");
	if (send) {
		send.disabled = true;
	}
};
function check() {
	var right = true;
	var wrong = null;

	var message = document.getElementById("message");
	if (message) {
		if (message.value.length==0) {
			right = false;
			message.style.background = '#f99';
			wrong = message;
		} else {
			message.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
		if (!checkPattern.test(email.value)) {
			right = false;
			email.style.background = '#f99';
			wrong = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var user = document.getElementById("user");
	if (user) {
		if (user.value.length<5) {
			right = false;
			user.style.background = '#f99';
			wrong = user;
		} else {
			user.style.background = '#9f9';
		}
	}

	if (wrong) {
		wrong.focus();
	}

	var send = document.getElementById("send");
	if (send) {
		send.disabled = !right;
	}

	return right;
}