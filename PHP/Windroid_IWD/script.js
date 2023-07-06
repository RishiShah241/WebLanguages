function login() {
	const username = document.getElementById("username").value;
	const password = document.getElementById("password").value;
	
	// Validate login credentials
	if(username === "emmi" && password === "emmi123") {
		alert("Login successful!✔️");
		window.location.href = "home.html";
	} else {
		alert("invalid username or password!❌");
	}
}