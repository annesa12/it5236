function checkLength10(elem){
	if (elem.value.length > 10){
		elem.value = elem.value.substring(0,10);
	}
}
function doSubmit(e) {
	var saveLocal = document.getElementById("saveLocal").checked = true ;
		if (saveLocal) {
		console.log("Saving username to local storage");
		var username = document.getElementById("username").value;
		localStorage.setItem("username",username);
}else{
		localStorage.removeItem("username",username);
		}
}
function doPageLoad(e) {
	var usernameLocal= localStorage.getItem("username");
	
	
	
	if (usernameLocal) {
		document.getElementById("saveLocal").checked = true;
		document.getElementById("username").value = usernameLocal;
}
	
}
// Add event listeners for page load and form submit
window.addEventListener("load", doPageLoad, false)
document.getElementById("user").addEventListener("submit", doSubmit, false);
